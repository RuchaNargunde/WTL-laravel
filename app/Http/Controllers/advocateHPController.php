<?php  
namespace App\Http\Controllers;  
use Illuminate\Http\Request;  

class advocateHPController extends Controller
{

public function homepage()
{
    return view('advocate/advocateHomePage');
}

public function announce()
{
    return view('advocate/announcements');
}


}