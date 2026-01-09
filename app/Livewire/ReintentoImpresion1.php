<?php

namespace App\Livewire;

use Livewire\Component;

class ReintentoImpresion1 extends Component
{
  public $impresoras_manuales = [
    '1' => 'Impresora 1',
    '2' => 'Impresora 2',
    '3' => 'Impresora 3',
    '4' => 'Impresora 4'
  ];

  public $numeroDocumentos = [
    '0' => '1472583694',
    '1' => '7893214564',
    '2' => '0831269754',
    '3' => '5648973010',
  ];

  public $gradosDelLicencia = [
    '2' => 'Licencia 2da Grado',
    '3' => 'Licencia 3er Grado',
    '4' => 'Licencia 4to Grado',
    '5' => 'Licencia 5to Grado',
  ];

  public function render()
  {
    return view('livewire.reintento-impresion1');
  }
}
