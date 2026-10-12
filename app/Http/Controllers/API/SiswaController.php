<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index()
    {
        return response()->json([
            'status'  => true,
            'message' => 'Data siswa berhasil diambil',
            'data'    => Siswa::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'    => 'required',
            'nis'     => 'required|unique:siswas',
            'kelas'   => 'required',
            'jurusan' => 'required',
        ]);

        $siswa = Siswa::create($request->all());

        return response()->json([
            'status'  => true,
            'message' => 'Siswa berhasil ditambahkan',
            'data'    => $siswa
        ], 201);
    }

    public function show($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json([
                'status'  => false,
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data'   => $siswa
        ]);
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json([
                'status'  => false,
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        $siswa->update($request->all());

        return response()->json([
            'status'  => true,
            'message' => 'Data siswa berhasil diupdate',
            'data'    => $siswa
        ]);
    }

    public function destroy($id)
    {
        $siswa = Siswa::find($id);

        if (!$siswa) {
            return response()->json([
                'status'  => false,
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        $siswa->delete();

        return response()->json([
            'status'  => true,
            'message' => 'Siswa berhasil dihapus'
        ]);
    }
}