<?php
namespace App\Model\Table;
use Cake\ORM\Table;
class SermonsTable extends Table
{
  public function initialize(array $config)
  {
    $this->hasMany('Videos');
    $this->displayField('name');
    $this->addBehavior('Timestamp');
  }
}