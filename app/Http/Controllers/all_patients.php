<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class all_patients extends Controller
{
    function checkDB() {
        $user = DB::select('select * from patient_vitals');
        print_r($user);
    }
}
