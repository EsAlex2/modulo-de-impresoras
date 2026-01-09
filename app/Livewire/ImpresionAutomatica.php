<?php

namespace App\Livewire;

use Livewire\Component;

class ImpresionAutomatica extends Component
{
  public $impresorasAutomaticas = [
    '1' => 'Impresora 1',
    '2' => 'Impresora 2',
    '3' => 'Impresora 3',
    '4' => 'Impresora 4',

  ];

  public $oficinasINTT = [
    '1' => 'Oficina Guarenas',
    '2' => 'Oficina Los Teques',
    '3' => 'Oficina La Urbina',
    '4' => 'Oficina La California',
  ];

  public $licenciasPorOficina = [
    'Guarenas' => '500',
    'Los Teques' => '700',
    'La Urbina' => '600',
    'La California' => '800',
  ];

  public function render()
  {
    return view('livewire.impresion-automatica');
  }
}
