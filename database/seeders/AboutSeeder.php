<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about')->insert([
            'header' => "Halo !",
            'content' =>  "Saya berasal dari Pacitan, Jawa Timur. Sekarang saya masih kuliah di Universitas Gadjah Mada. Kalau Anda merasa bosan ajak saya jalan - jalan. Gatau mau diisi apa lagi ini teksnya cuma buat isian aja.",
            'image' => "http://127.0.0.1:8000/asset/profil.png" ]);
            
    }
}
