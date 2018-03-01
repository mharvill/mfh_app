<?php
namespace App\Model\Table;
class SpeakersTable extends Table
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $users = $this->Paginator->paginate($this->Users->find());
    $this->set(compact('users'));
  }
}