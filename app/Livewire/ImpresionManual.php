<?php

namespace App\Livewire;

use Livewire\Component;

class ImpresionManual extends Component
{
  public $campo;

  protected $rules = [
    'campo' => 'required|min:5|max:10|regex:/^\d+$/',
  ];

  protected $messages = [
    'campo.required' => 'El campo no debe estar vacio',
    'campo.regex' => 'Solo debe recibir datos numericos',
    'campo.max:10' => 'Maximo 10 caracteres',
    'campo.min:5' => 'Minimo 10 caracteres',
  ];

  public $impresoras = [
    '1' => 'Impresora 1',
    '2' => 'Impresora 2',
    '3' => 'Impresora 3',
    '4' => 'Impresora 4',
  ];

  public $selectedImpresora = null;

  public $gradosDelLicencia = [
    '2' => 'Licencia 2da Grado',
    '3' => 'Licencia 3er Grado',
    '4' => 'Licencia 4to Grado',
    '5' => 'Licencia 5to Grado',
  ];

  public function updated($propertyName)
  {

    $this->validateOnly($propertyName);

  }

  public function impresion()
  {
  }

  public function saveImpresora()
  {
    $validate = $this->validate();

    try {


    } catch (\Exception $e) {

    }
  }


  public function render()
  {
    return view('livewire.impresion-manual');
  }
}
