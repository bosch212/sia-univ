<?php

namespace App\Http\Controllers;

use App\MataKuliah;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index()
    {
        $matkul = MataKuliah::paginate(10);
        $data_matkul = MataKuliah::all();
        return view ('pages.matkul.index', compact('data_matkul'));
    }

    public function create()
    {
        return view ('pages.matkul.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        $matkul = MataKuliah::create($data);

        return redirect()->route('matkul-index');
    }

    public function edit($id)
    {
        $matkul = MataKuliah::findOrFail($id);

        return view ('pages.matkul.edit', compact('matkul'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $matkul = MataKuliah::findOrFail($id);

        $matkul->update($data);

        return redirect()->route('matkul-index');
    }
    

    public function delete($id)
    {
        $matkul = MataKuliah::findOrFail($id);

        $matkul->delete();

        return redirect()->route('matkul-index');
    }
}
