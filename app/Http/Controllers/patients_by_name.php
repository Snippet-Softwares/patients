<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patients_by_name extends Controller
{
    function checkDB() {
        $user = DB::select('select first_name from patient where first_name = "'.$_GET['id'].'"');
        print_r($user);
    }
}

