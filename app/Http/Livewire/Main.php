<?php

namespace App\Http\Livewire;

use App\Quotes;
use Livewire\Component;

class Main extends Component
{
    public $dailyText = '';
    public $dailyAuthor = '';
    public $randomText = '';
    public $randomAuthor = '';

    public function render()
    {
        return view('livewire.main');
    }

    public function daily()
    {
        $quote = (new Quotes())->quotd();
        $this->dailyText = $quote['text'];
        $this->dailyAuthor = $quote['author'];
    }

    public function random()
    {
        $quote = (new Quotes())->random();
        $this->randomText = $quote['text'];
        $this->randomAuthor = $quote['author'];
    }
}
