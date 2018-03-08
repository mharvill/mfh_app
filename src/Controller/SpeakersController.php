<?php

namespace App\Controller;
class SpeakersController extends AppController
{
  public function index()
  {
    $this->loadComponent('Paginator');
    $speakers = $this->Paginator->paginate($this->Speakers->find());
    $this->set(compact('speakers'));
  }
  public function view($id = null)
  {
      $speaker = $this->Speakers->findById($id)->first();
      $this->set(compact('speaker'));
  }
}