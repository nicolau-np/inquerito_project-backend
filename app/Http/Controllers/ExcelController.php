<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CommentExport;


class ExcelController extends Controller
{
    public function comments()
    {
        return Excel::download(new CommentExport, 'comments.csv');
    }
}