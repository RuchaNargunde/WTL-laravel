<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  

class clientHPController extends Controller
{

public function homepage()
{
    return view('clientHomePage');
}

public function announce()
{
    return view('announcements');
}


}

