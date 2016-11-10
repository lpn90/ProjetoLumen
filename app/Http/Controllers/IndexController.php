<?php
/**
 * User: Leonardo
 * Date: 07/11/2016
 * Time: 14:29
 */

namespace CodeAgenda\Http\Controllers;


class IndexController extends Controller
{
    public function index()
    {
        return view('layout');
    }

}