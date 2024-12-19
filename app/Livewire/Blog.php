<?php

namespace App\Livewire;

use App\Models\Blog as ModelsBlog;
use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class Blog extends Component
{
    public $posts;

    public function mount()
    {
        $this->posts = ModelsBlog::all(); // Lấy tất cả bài viết
    }

    public function render()
    {
        return view('livewire.blog', [
            'posts' => $this->posts,
        ]);
    }
}