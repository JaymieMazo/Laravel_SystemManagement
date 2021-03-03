<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\department;


class DepartmentController extends Controller
{
        public function get_data(){
            $dept=department::all();
                return $dept;
        }

}
