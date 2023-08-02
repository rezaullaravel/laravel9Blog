<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Post;

class HomeSearch extends Component
{
    use WithPagination;
    public $post_title;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $post_title = '%'.$this->post_title.'%';
        return view('livewire.home-search',[
            'posts' => Post::where('post_title','like', $post_title)->paginate(3),
        ]);
    }
}
