<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Profile;
use App\Models\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class AnggotaController extends Controller
{
    public function index()
    {
        $iduser = Auth::id();
        $user = User::where('isAdmin', '0')->get(); // Ambil data user dengan isAdmin 0
        $profile = Profile::where('users_id', $iduser)->first();
        return view('anggota.tampil', ['anggota' => $user, 'profile' => $profile]);
    }

    public function create()
    {
        $iduser = Auth::id();
        $user = User::all()->where('isAdmin', '0');
        $profile = Profile::where('users_id', $iduser)->first();
        return view('anggota.tambah', ['user' => $user, 'profile' => $profile]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'name' => 'required',
                'npm' => 'required|unique:profile',
                'prodi' => 'required',
                'alamat' => 'required',
                'noTelp' => 'required',
                'email' => 'required|unique:users',
                'password' => 'required|min:8',
            ],
            [
                'name.required' => "Nama tidak boleh kosong",
                'npm.required' => "Nomor Induk tidak boleh kosong",
                'npm.unique' => "NPM Telah Digunakan",
                'prodi.required' => "Prodi tidak boleh kosong",
                'alamat.required' => "Alamat tidak boleh kosong",
                'noTelp.required' => "Nomor Telepon tidak boleh kosong",
                'email.required' => "Email tidak boleh kosong",
                'email.unique' => "Email Telah Digunakan",
                'password.required' => "Password Tidak boleh kosong",
                'password.min' => "Password tidak boleh kurang dari 8 karakter"
            ]
        );

        // Proses pembuatan user
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        // Proses pembuatan profil anggota
        Profile::create([
            'npm' => $request['npm'],
            'prodi' => $request['prodi'],
            'alamat' => $request['alamat'],
            'noTelp' => $request['noTelp'],
            'users_id' => $user->id,
        ]);

        // Menampilkan pesan sukses setelah data berhasil ditambahkan
        Alert::success('Success', 'Berhasil Menambah Anggota');

        // Redirect ke halaman daftar anggota
        return redirect('/anggota');
    }

    public function show($id)
    {
        $user = User::find($id);
        $profile = Profile::where('users_id', $id)->first();
        $pinjamanUser = Peminjaman::where('users_id', $user->id)->get();
        return view('anggota.detail', ['user' => $user, 'profile' => $profile, 'pinjamanUser' => $pinjamanUser]);
    }

    public function edit($id)
    {
        $user = User::find($id);
        $profile = Profile::where('users_id', $id)->first();
        return view('anggota.edit', ['user' => $user, 'profile' => $profile]);
    }

    public function update(Request $request, $id)
    {
        $profile = Profile::where('users_id', $id)->first();
        $user = User::find($id);

        // Validasi input
        $request->validate(
            [
                'name' => 'required',
                'npm' => 'required',
                'prodi' => 'required',
                'alamat' => 'required',
                'noTelp' => 'required',
                'photoProfile' => 'nullable|mimes:jpg,jpeg,png|max:2048'
            ],
            [
                'name.required' => "Nama tidak boleh kosong",
                'npm.required' => "Nomor Induk tidak boleh kosong",
                'prodi.required' => "Prodi tidak boleh kosong",
                'alamat.required' => "Alamat tidak boleh kosong",
                'noTelp.required' => "Nomor Telepon tidak boleh kosong",
                'photoProfile.mimes' => "Foto Profile Harus Berupa jpg,jpeg,atau png",
                'photoProfile.max' => "ukuran gambar tidak boleh lebih dari 2048 MB"
            ]
        );

        // Proses upload gambar jika ada
        if ($request->has('photoProfile')) {
            $path = 'images/photoProfile';

            if ($profile->photoProfile && File::exists(public_path($path . '/' . $profile->photoProfile))) {
                File::delete(public_path($path . '/' . $profile->photoProfile));
            }

            $namaGambar = time() . '.' . $request->photoProfile->extension();
            $request->photoProfile->move(public_path($path), $namaGambar);
            $profile->photoProfile = $namaGambar;
        }

        // Update data user dan profile
        $user->name = $request->name;
        $profile->npm = $request->npm;
        $profile->prodi = $request->prodi;
        $profile->alamat = $request->alamat;
        $profile->noTelp = $request->noTelp;

        // Simpan perubahan
        $profile->save();
        $user->save();

        // Menampilkan pesan sukses setelah data berhasil diubah
        Alert::success('Success', 'Berhasil Mengubah Profile');

        // Redirect ke halaman daftar anggota
        return redirect('/anggota');
    }

    public function destroy($id)
    {
        $user = User::find($id);

        // Hapus data user dan terkait
        $user->delete();

        // Menampilkan pesan sukses setelah data dihapus
        Alert::success('Berhasil', 'Berhasil Mengapus Anggota');

        // Redirect ke halaman daftar anggota
        return redirect('anggota');
    }
}
