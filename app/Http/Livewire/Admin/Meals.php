<?php

namespace App\Http\Livewire\Admin;

use App\Models\meal_category;
use App\Models\meal_option;
use Livewire\Component;

class Meals extends Component
{

    public $category_id;
    public $categories;
    public $category_nm;
    public $option_nm;

    public $newCategory = false;

    protected $rules = [
        'category_nm' => 'required|unique:meal_categories',
        'category_id' => 'required',
        'option_nm' => 'required|string|unique:meal_option'
    ];

    public function storeCategory()
    {
        $this->validate();

        meal_category::create([
            'category_nm' => $this->category_nm
        ]);

        $this->dispatchBrowserEvent('close-modal');

    }

    public function storeOption()
    {
        $this->validate();

        meal_option::create([
            'category_id' => $this->category_id,
            'option_nm' => $this->option_nm,
        ]);

        $this->dispatchBrowserEvent('close-modal');
    }

    public function addCategory()
    {
        $this->newCategory = true;

        $this->dispatchBrowserEvent('oModal');
    }


    public function render()
    {
        $this->categories = meal_category::all();

        return view('livewire.admin.meals',
            ['meals' => meal_category::all()],
            ['options' => meal_option::all()])
            ->extends('layouts.admin');
    }
}
