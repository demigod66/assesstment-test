<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {

        $this->db = \Config\Database::connect();
        if ($this->db->table('tagihan')->where('tagihan', 1)) {
            $data['tagihan'] = $this->db->table('tagihan')
                ->where('nama_mahasiswa', session()->get('id_user'))
                ->join('users', 'users.id_user = tagihan.nama_mahasiswa')
                ->get();
        }

        return view('mahasiswa/index', $data);
    }

    public function bayar()
    {
        $this->db = \Config\Database::connect();
        $data['tagihan'] = $this->db->table('tagihan')
            ->where('nama_mahasiswa', session()->get('id_user'))
            ->join('users', 'users.id_user = tagihan.nama_mahasiswa')
            ->get();
        return view('mahasiswa/bayar', $data);
    }
}
