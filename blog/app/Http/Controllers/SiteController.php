<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class SiteController extends Controller
{
    function ShowHome(){
        return view('Home');
    }
    function ShowAbout(){
        return view('about');
    }
    function ShowProject(){
        return view('project');
    }
    function ShowQualification(){
        return view('qualification');
    }
    function ShowSkill(){
        return view('skill');
    }
}
