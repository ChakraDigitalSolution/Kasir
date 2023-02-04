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
            'harga' => $data['harga'],
            'deskripsi' => $data['deskripsi'],
            'foto' => $namaFoto
        ]);

        session()->setFlashdata('Berhasil', 'Data Berhasil Disimpan');
        return redirect()->to('/Gudang');
    }

    public function gudangAddStock()
    {
        $data = $this->request->getVar();
        $id = $data['id'];
        $stock = $this->Gudang->select('stock')->where('id', $id)->get()->getFirstRow();
        $stock = (int)$stock->stock + (int)$data['stock'];
        $this->Gudang->save([
            'id' => $data['id'],
            'stock' => $stock
        ]);

        session()->setFlashdata('Berhasil', 'Stock ' . $data['nama'] . ' Berhasil Ditambahkan');
        return redirect()->to('/Gudang');
    }

    public function gudangEdit($id)
    {
        $row = $this->Gudang->where('id', $id)->get()->getFirstRow();
        $data = [
            'row' => $row,
            'harga' => (int)$row->harga
        ];
        // dd($data);
        return view('gudang/edit', $data);
    }

    public function gudangUpdate()
    {
        $data = $this->request->getVar();
        $foto = $this->request->getFile('foto');
        $namaFoto = '';
        // dd($data);
        if ($data['gantiFoto']) {
            // Hapus Foto Lama
            if (file_exists('assets/foto/' . $data['oldFoto'])) {
                unlink('assets/foto/' . $data['oldFoto']);
            }
            $namaFoto = $foto->getRandomName();
            // Pindah Foto Ke Folder asset
            $foto->move('assets/foto', $namaFoto);
        } else {
            $namaFoto = $data['oldFoto'];
        }

        $this->Gudang->save([
            'id' => $data['id'],
            'nama' => $data['nama'],
            'stock' => $data['stock'],
            'harga' => $data['harga'],
            'deskripsi' => $data['deskripsi'],
            'foto' => $namaFoto,
        ]);

        session()->setFlashdata('Berhasil', 'Detail ' . $data['nama'] . ' Berhasil Diubah');
        return redirect()->to('/Gudang');
    }

    public function gudangDelete($id)
    {
        $data = $this->Gudang->select('foto, nama')->where('id', $id)->get()->getFirstRow();
        // Hapus Foto Lama
        if (file_exists('assets/foto/' . $data->foto)) {
            unlink('assets/foto/' . $data->foto);
        }
        $this->Gudang->where('id', $id)->delete();

        session()->setFlashdata('Berhasil', $data->nama . ' Berhasil Dihapus');
        return redirect()->to('/Gudang');
    }

    public function gudangView($id)
    {
        $data = [
            'row' => $this->Gudang->where('id', $id)->get()->getFirstRow()
        ];
        return view('gudang/view', $data);
    }
}
