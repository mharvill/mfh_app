<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class SpeakersTable extends Table
{
  public function initialize(array $config)
  {

    $this->displayField('name');
    $this->addBehavior('Timestamp');
  }
}