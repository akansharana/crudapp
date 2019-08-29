<h2>Users</h2>
<div class='upper-right-opt'>
    <?php echo $this->Html->link( '+ New User', array( 'action' => 'add' ) ); ?>
</div>

<table style='padding:5px;'>
    <tr style='background-color:#fff;'>
        <th>ID</th>
        <th>Username</th>
        <th>Email</th>
        <th>Password</th>
        <th>Actions</th>
    </tr>

    <?php

    foreach($users as $user ){

        echo "<tr>";
        echo "<td>{$user['User']['id']}</td>";
        echo "<td>{$user['User']['username']}</td>";
        echo "<td>{$user['User']['email']}</td>";
        echo "<td>{$user['User']['password']}</td>";

        echo "<td class='actions'>";
        echo $this->Html->link( 'Edit', array('action' => 'edit', $user['User']['id']) );

        echo $this->Form->postLink( 'Delete', array(
            'action' => 'delete',
            $user['User']['id']), array(
            'confirm'=>'Are you sure you want to delete that user?' ) );
        echo "</td>";
        echo "</tr>";
    }
    ?>

</table>
