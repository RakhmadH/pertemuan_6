<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostTableSeeder extends Seeder
{
    private $_posts = [
        ["title" => "Seeder 1", "description" => "Deskripsi seeder 1"],
        ["title" => "Seeder 2", "description" => "Deskripsi seeder 2"],
        ["title" => "Seeder 3", "description" => "Deskripsi seeder 3"],
        ["title" => "Seeder 4", "description" => "Deskripsi seeder 4"],
        ["title" => "Seeder 5", "description" => "Deskripsi seeder 5"],
        ["title" => "Seeder 6", "description" => "Deskripsi seeder 6"],
        ["title" => "Seeder 7", "description" => "Deskripsi seeder 7"],
        ["title" => "Seeder 8", "description" => "Deskripsi seeder 8"],
        ["title" => "Seeder 9", "description" => "Deskripsi seeder 9"],
        ["title" => "Seeder 10", "description" => "Deskripsi seeder 10"],
    ];
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data =[];
        foreach ($this->_posts as $post){
            $data[] = [
                'title'=>$post['title'],
                'description'=>$post['description']
            ];
        }
        DB::table('posts')->insert($data);
    }
}
