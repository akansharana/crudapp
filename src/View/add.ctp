<h2>Add New User</h2>
<div class='upper-right-opt'>
    <?php echo $this->Html->link( 'List Users', array( 'action' => 'index' ) ); ?>
</div>

<?php
echo $this->Form->create('User');

echo $this->Form->input('username');
echo $this->Form->input('email');
echo $this->Form->input('password', array('type'=>'password'));

echo $this->Form->end('Submit');
?>
