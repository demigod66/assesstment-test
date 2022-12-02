<?php

namespace App\Controllers;

use App\Models\Tagihan;
use App\Models\UserModel;
use CodeIgniter\Database\Config;

class Bendahara extends BaseController
{

    public function __construct()
    {
        $this->user = new UserModel();
        $this->tagihan = new Tagihan();
    }

    public function index()
    {
        if (hakAkses()->role != 2) {
            return redirect('/');
        }
        $tagihan = new Tagihan();
        $data = [
            'tagihan' => $tagihan->getAll()
        ];
        return view('bendahara/index', $data);
    }

    public function create()
    {
        $this->db = Config::connect();
        $data['users'] = $this->db->table('users')->where('role', 3)->get();

        return view('bendahara/create', $data);
    }

    public function simpan()
    {
        $tagihan = new Tagihan();
        $nm = $this->request->getPost('nama_mahasiswa');
        $st = $this->request->getPost('status_tagihan');
        $tt = $this->request->getPost('total_tagihan');
        $data = [
            'nama_mahasiswa' => $nm,
            'status_tagihan' => $st,
            'total_tagihan' => $tt,
            //more value? add here
        ];
        $tagihan->save($data);
        if ($tagihan->insert($data)) {
            echo json_encode(array("status" => true));
        } else {
            echo json_encode(array("status" => false));
        }
    }
}
