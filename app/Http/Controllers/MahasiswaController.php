<?php

namespace App\Http\Controllers;

use App\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function tampilMahasiswa()
    {
        return Mahasiswa::all();
    }


    public function tampilMahasiswaById($id)
    {
        return Mahasiswa::find($id);
    }


    public function tambahMahasiswa(Request $request)
    {
        $addMahasiswa = new \App\Mahasiswa;

        $addMahasiswa->nama = $request->nama;
        $addMahasiswa->nim = $request->nim;
        $addMahasiswa->alamat = $request->alamat;
        $addMahasiswa->email = $request->email;
        $addMahasiswa->jurusan = $request->jurusan;
        $addMahasiswa->semester = $request->semester;

        $addMahasiswa->save();

        return "Berhasil disimpan";
    }

    public function ubahMahasiswa(Request $request, $id)
    {
        $updateMahasiswa = Mahasiswa::find($id);

        $updateMahasiswa->nama = $request->nama;
        $updateMahasiswa->nim = $request->nim;
        $updateMahasiswa->alamat = $request->alamat;
        $updateMahasiswa->email = $request->email;
        $updateMahasiswa->jurusan = $request->jurusan;
        $updateMahasiswa->semester = $request->semester;

        $updateMahasiswa->save();

        return "Berhasil Diubah";
    }

    public function hapusMahasiswa($id)
    {
        $deleteMahasiswa = Mahasiswa::find($id);

        $deleteMahasiswa->delete();

        return "Berhasil dihapus";
    }
}
