<?php

namespace App\Controllers;

use App\Models\Tagihan;

class Grafik extends BaseController
{

    public function __construct()
    {
        $this->tagihan = new Tagihan();
    }
    public function index()
    {
        if (hakAkses()->role != 1) {
            return redirect(site_url('/'));
        }

        $data = [
            'tagihan' => $this->tagihan->findAll()
        ];

        return view('pemimpin/grafik', $data);
    }
}
