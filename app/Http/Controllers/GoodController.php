<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Good;

class GoodController extends Controller
{
    public function index(){
        $goods = Good::all();
        return view('good/index', compact('goods'));
    }

    public function create(){
        return view('good/create');
    }

    public function store(){
        $data = request()->validate([
            'name'=>'string',
            'price'=>'integer',
            'category'=>'integer',
            'icon'=>'string',
            'seller'=>'string'
        ]);
        
        Good::create($data);
        return redirect()->route('goods.index');
    }

    public function show(Good $good){
        return view('good/show', compact('good'));
    }

    public function edit(Good $good){
        return view('good/edit', compact('good'));
    }

    public function update(Good $good){
        $data = request()->validate([
            'name'=>'string',
            'price'=>'integer',
            'category'=>'integer',
            'icon'=>'string',
            'seller'=>'string'  
        ]);

        $good->update($data);
        return redirect()->route('goods.index');
    }

    public function destroy(Good $good){
        $good->delete();
        return redirect()->route('goods.index');
    }

    public function trashed(){
        $trashedGoods = Good::withTrashed()->where('deleted_at', '!=', null)->get();
        return view('good/trashed', compact('trashedGoods'));
    }

    public function restore($id){
        $good = Good::withTrashed()->findOrFail($id);
        $good->restore();
        return redirect()->route('goods.trashed');
    }

}
