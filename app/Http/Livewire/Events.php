<?php

namespace App\Http\Livewire;

use App\Models\Event;
use Livewire\Component;

class Events extends Component
{
    public $perPage;
    public $hasMore = false;

    public function mount()
    {
        $this->perPage = 6;


    }

    public function addPerPage()
    {
        $this->perPage += 3;
    }
    public function render()
    {
        if ($this->perPage <= Event::count()) {
            $this->hasMore = true;
        } else {
            $this->hasMore = false;
        }
        $events= Event::query()->paginate($this->perPage);
        return view('livewire.events',[
            'events'=>$events
        ]);
    }
}
