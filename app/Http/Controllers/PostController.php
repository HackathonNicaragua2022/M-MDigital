<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class AddPostFeed extends Component
{

    use WithFileUploads;

  //  protected $rules = [

   // ];

    public $body, $coverImage;

    protected $rules = [
        'body' => 'required',
        'coverImage' => 'image',
        
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    

    public function render()
    {
        return view('livewire.add-post-feed');
    }

    public function store()
    {
        $this->validate();

        auth()->user()->posts()->create([
            'image' => $this->coverImage->store('posts', 'public'),
            'body' => $this->body,
            
        ]);

        session()->flash('success', 'Post created');

        $this->body = '';
        $this->coverImage = '';

    }

}
