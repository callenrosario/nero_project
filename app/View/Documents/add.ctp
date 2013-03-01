<h1>Add Document</h1>
<?php
echo $this->Form->create('Document');
echo $this->Form->input('title');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Document');
?>
