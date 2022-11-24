<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    private static $home =   
    [
        "header" => "Selamat Datang",
        "content" => "Laman ini merupakan Landing Page tugas portofolio. Saya ngga tau pak mau diisi apa, portofolio saya masih kosong ya jadi cuma teks aja sih. atau mau diisi apa lagi ini teksnya cuma buat isian aja.",
        "image"=> "{{asset('asset/merenung.png')}}"
    ];

    public static function getHome()
    {
        return self::$home;
    }

    private static $about =   
    [
        "header" => "Halo !",
        "content" => "Saya berasal dari Pacitan, Jawa Timur. Sekarang saya masih kuliah di Universitas Gadjah Mada. Kalau Anda merasa bosan ajak saya jalan - jalan. Gatau mau diisi apa lagi ini teksnya cuma buat isian aja.",
        "image"=> "http://127.0.0.1:8000/asset/profil.png"
    ];

    public static function getAbout()
    {
        return self::$about;
    }

    private static $education =   
    [
        "header" => "Pendidikan yang ditempuh :",
        "educations" => ["Universitas Gadjah Mada","SMA Negeri 1 Pacitan"],
        "years"=> ["2021-sekarang","2018-2021"],
        "tambahan"=> "Gatau mau diisi apa lagi, soalnya cuma riwayat pendidikan.",
        "image"=> "http://127.0.0.1:8000/asset/merenung.png"
    ];

    public static function getEducation()
    {
        return self::$education;
    }

    private static $projects =   
    [
        "header" => "Dalam Pengerjaan :",
        "projects" => ["Web Wisma Rini Ruko & Kost"],
        "gambar_project"=> ["http://127.0.0.1:8000/asset/logo.png"],
        "tambahan"=> "Jikalau Anda membutuhkan anggota untuk projek anda silahkan hubungi saya.",
        "logo_wa"=> "http://127.0.0.1:8000/asset/wangsaff.png",
        "nomor"=> "089603636063" 
    ];

    public static function getProjects()
    {
        return self::$projects;
    }

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    protected $appends = [
        'small_pict',
        'medium_pict',
        'large_pict',
        'original_pict',
        'pict_queue_no',
    ];

    public function getSmallPictAttribute()
    {
        $path = "storage/posts_image/small_{$this->picture}";
        return asset($path);
    }
    public function getMediumPictAttribute()
    {
        $path = "storage/posts_image/medium_{$this->picture}";
        return asset($path);
    }

    public function getLargePictAttribute()
    {
        $path = "storage/posts_image/large_{$this->picture}";
        return asset($path);
    }
    public function getOriginalPictAttribute()
    {
        $path = "storage/posts_image/{$this->picture}";
        return asset($path);
    }

}






 
