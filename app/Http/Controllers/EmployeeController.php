<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    //
    function openRegister() {
        return view ("register");
    }
    function store(Request $request) {
        $result = $request->all();
        $result["hobby"]= implode(",",$result["hobby"]);
        Employee::create($result);
        print_r($result);
        
    }
    function display(){
        $employee = Employee::get();
         return view("display",["employee"=>$employee]);
        // return view("display",compact('employee'));
    }

    function delete($id){
        Employee::where("eid","=",$id)->delete();
    }
}

