<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patients_by_id extends Controller
{
    function checkDB() {
        $user = DB::select('select * from patient_vitals where patient_id = "'.$_GET['id'].'"');
        print_r($user);
    }
}
