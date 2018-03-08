<div class="container">
  <div class="py-5 text-center">
    <h2>Add Sermon</h2>
    <p class="lead">Create new sermon.</p>
  </div>
  <div class="row">
    <div class="col">
      <?php
        echo $this->Form->create($sermon);
          echo $this->Form->control('title', ['class' => 'form-control mb-3']);
          echo $this->Form->control('description', ['class' => 'form-control mb-3']);
          echo $this->Form->control('url', ['type' => 'url', 'class' => 'form-control mb-3']);
          echo $this->Form->control('user_id', ['type' => 'select', 'options' => $users, 'class' => 'form-control mb-3']);
          echo '<hr class="mb-4">';
          echo $this->Form->button('Add Sermon', ['class' => 'btn btn-danger btn-lg btn-block']);
        echo $this->Form->end();
      ?>
    </div>
  </div>
</div>