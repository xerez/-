<h1>追加</h1>

<?php
  echo $this->Form->create('SampleData');
  echo $this->Form->input('name');
  echo $this->Form->input('description');
  echo $this->Form->input('url');
  echo $this->Form->input('img');
  echo $this->Form->end('Submit');
?>