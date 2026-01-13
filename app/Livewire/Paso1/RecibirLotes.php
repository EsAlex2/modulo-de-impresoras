<?php

namespace App\Livewire\Paso1;

use Livewire\Component;

class RecibirLotes extends Component
{

  public $dni;
  public $funcionario = [
    '1' => 'Alex Jonfranc',
    '2' => 'Madrid Marin',
    '3' => 'Planta Central de Produccion (Chacao)',
    '4' => '0000123',
  ];


  protected $rules = [
    'dni' => 'required|max:8|regex:/^\d+$/',
  ];

  protected $message = [
    'dni.required' => 'No debe estar vacio',
    'dni.numeric' => 'Solo se permiten datos numericos',
    'dni.max:8' => 'Maximo 8 caracteres',
  ];

  public function updated($propertyName)
  {

    $this->validateOnly($propertyName);

  }

  public function lotes()
  {
    $validate = $this->validate();

    try {


    } catch (\Exception $e) {

    }
  }



  public function render()
  {
    return view('livewire.paso1.recibir-lotes');
  }
}
