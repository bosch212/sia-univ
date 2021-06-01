<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $matkul = MataKuliah::all();

        $data_matkul = MataKuliah::all();

        $jml = [];

        foreach($data_matkul as $matkul){
            $jml[] = [
                'name' => $matkul->nama_mkul,
                'y' => $matkul->jumlah_mhs,
                'drilldown' => $matkul->jumlah_mhs
            ];
        }

        $jml_mhs = json_encode($jml);

  
        return view('pages.dashboard', compact('matkul', 'jml_mhs'));
    }
}
