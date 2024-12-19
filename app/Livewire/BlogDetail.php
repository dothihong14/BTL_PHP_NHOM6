<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Blog; // Đảm bảo rằng bạn đang sử dụng đúng mô hình

class BlogDetail extends Component
{
    public $post;

    public function mount($slug)
    {
        $this->post = Blog::where('slug', $slug)->firstOrFail(); // Lấy bài viết theo slug
    }

    public function render()
    {
        return view('livewire.blog-detail', [
            'post' => $this->post,
        ]);
    }
}
