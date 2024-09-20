<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;
class Users extends Controller
{
      protected $UsersModel;
      public function __construct(UsersModel $UsersModel) {
        $this->UsersModel = $UsersModel;
      }

      public function index() {
        $getdatausers = $this->UsersModel->all();
       
        // Memastikan data diambil dalam format koleksi Laravel
if ($getdatausers->isNotEmpty()) {
    // Iterasi melalui setiap pengguna dan cetak username
    foreach ($getdatausers as $user) {
        echo $user->username . "<br>";
    }
} else {
    echo "Tidak ada data pengguna.";
}


      }
}
