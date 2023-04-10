<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KerenController extends Controller
{
    public function anjay(){
        $produk = [
            ['Product name' => 'Irene', 'Status Product' => 'SSR', 'Product Price' => '100.000','image' => 'Irene.png'],
            ['Product name' => 'Blemishine', 'Status Product' => 'SR', 'Product Price' => '80.000','image'=>'Blemishine.png'],
            ['Product name' => 'Vigna', 'Status Product' => 'R', 'Product Price' => '60.000','image'=>'Vigna.png'],
            ['Product name' => 'Nearl', 'Status Product' => 'SR', 'Product Price' => '80.000','image'=>'Nearl.png']
        ];
        return view('welcome', compact('produk'));
    }

    public function deskrip($nama){
        $namaewa = [
            ['Product name' => 'Irene', 'Status Product' => 'SSR', 'Product Price' => '100.000','image' => 'Irene.png' , 'Penjelasan' => "Ini waifu saya da best"],
            ['Product name' => 'Blemishine', 'Status Product' => 'SR', 'Product Price' => '80.000','image'=>'Blemishine.png', 'Penjelasan' => "Ini waifu saya da best kedua"],
            ['Product name' => 'Vigna', 'Status Product' => 'R', 'Product Price' => '60.000','image'=>'Vigna.png', 'Penjelasan' => "Ini waifu saya da best ketiga"],
            ['Product name' => 'Nearl', 'Status Product' => 'SR', 'Product Price' => '80.000','image'=>'Nearl.png', 'Penjelasan' => "Ini waifu saya da best keempat"]
        ];
        $kowe = [];
        foreach($namaewa as $name){
            if($name['Product name'] == $nama){
                $kowe = $name;
            }
        }
        return view('matamu',compact('kowe'));
    }
}


