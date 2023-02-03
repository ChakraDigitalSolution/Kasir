<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Kasir extends BaseController
{

    protected $Gudang;

    public function index()
    {
        return view('index');
    }

    public function penjualan()
    {
        $data = [
            'row' => $this->Gudang->orderBy('nama')->findAll()
        ];
        return view('penjualan/index', $data);
    }

    public function gudang()
    {
        $data = [
            'row' => $this->Gudang->orderBy('nama')->findAll()
        ];
        return view('gudang/index', $data);
    }

    public function gudangTambah()
    {
        return view('gudang/tambah');
    }

    public function gudangSimpan()
    {
        $data = $this->request->getVar();
        $foto = $this->request->getFile('foto');
        // dd($data['harga']);
        // Ubah Nama Foto Menjadi Random
        $namaFoto = $foto->getRandomName();
        // Pindah Foto Ke Folder asset
        $foto->move('assets/foto', $namaFoto);

        // Simpan Data Ke Database
        $this->Gudang->save([
            'nama' => $data['nama'],
            'stock' => $data['stock'],
            'harga' => substr($data['harga'], 0, -3),
            'deskripsi' => $data['deskripsi'],
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('Berhasil', 'Data Berhasil Disimpan');
        return redirect()->to('/Gudang');
    }
}
