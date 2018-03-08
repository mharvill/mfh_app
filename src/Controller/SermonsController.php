<?php
namespace App\Controller;
class SermonsController extends AppController
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $sermons = $this->Paginator->paginate($this->Sermons->find());
    $this->set(compact('sermons'));
  }
}