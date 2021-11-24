<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class insert_patient extends Controller
{
    function checkDB() {
        $user = DB::select('insert into patients (registration_date, first_name, last_name, DOB, gender)
        values ("'.$_POST['date'].'", "'.$_POST['fname'].'", "'.$_POST['lname'].'","'.$_POST['dob'].'","'.$_POST['gender'].'")');
        if($user) {
            echo "Success";
        }
        else {
            echo "Failed";
        }
    }
}
