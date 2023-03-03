<?php

namespace App\Exports;

use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use App\Models\Comment;

class CommentExport implements FromView, ShouldAutoSize
{

    private $comments;

    public function __construct()
    {
        $this->comments = Comment::all();
    }

    public function view(): View
    {
        return view('excel.comments', ['comments'=>$this->comments]);
    }
}