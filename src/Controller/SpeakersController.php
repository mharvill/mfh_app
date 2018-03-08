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

public function add()
  {
      $speaker = $this->Speakers->newEntity();
      if ($this->request->is('post')) {
          $speaker = $this->Users->patchEntity($speaker, $this->request->getData());
          if ($this->Users->save($speaker)) {
              $this->Flash->success(__('Your speaker has been saved.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to add your speaker.'));
      }
      $this->set('speaker', $speaker);
  }
  public function edit($id = null)
  {
      $speaker = $this->Users->findById($id)->first();
      if ($this->request->is(['post', 'put'])) {
          $this->Users->patchEntity($speaker, $this->request->getData());
          if ($this->Users->save($speaker)) {
              $this->Flash->success(__('Your speaker has been updated.'));
              return $this->redirect(['action' => 'index']);
          }
          $this->Flash->error(__('Unable to update your speaker.'));
      }
      $this->set('speaker', $speaker);
  }
}