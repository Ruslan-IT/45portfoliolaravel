<?php

namespace App\Livewire\Pages\Work;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{

    use WithPagination;

    public $search = '';

    protected $updatesQueryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage(); // сброс страницы при поиске
    }

    public function render()
    {
        $works = [];

        if ($this->search) {
            $works = Work::where('title', 'like', '%' . $this->search . '%')
                ->latest()
                ->paginate(5);
        }

        return view('livewire.pages.work.index', compact('works'));
    }



}
