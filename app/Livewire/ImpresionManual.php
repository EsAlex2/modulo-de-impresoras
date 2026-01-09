<?php

namespace App\Livewire;

use Livewire\Component;

class ImpresionManual extends Component
{
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

  public function impresion()
  {
  }
  public function render()
  {
    return view('livewire.impresion-manual');
  }
}
