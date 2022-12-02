<?php

namespace App\Controllers;

use App\Models\Tagihan;

class Pemimpin extends BaseController
{
    public function index()
    {
        if (hakAkses()->role != 1) {
            return redirect('/');
        }
        $tagihan = new Tagihan();
        $data = [
            'tagihan' => $tagihan->findAll()
        ];
        return view('pemimpin/index', $data);
    }
}
