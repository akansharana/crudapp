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

    $post ="";
    foreach($post as $posts ){
        echo "<tr>";
        echo "<td>['$posts']['post']['id']}</td>";
        echo "<td>['$posts']['post']['username']}</td>";
        echo "<td>['$posts']['post']['email']}</td>";
        echo "<td>['$posts']['post']['password']}</td>";

        echo "<td class='actions'>";
        echo $this->Html->link( 'Edit', array('action' => 'edit', $posts['post']['id']) );

        echo $this->Form->postLink( 'Delete', array(
            'action' => 'delete',
            $posts['post']['id']), array(
            'confirm'=>'Are you sure you want to delete that user?' ) );
        echo "</td>";
        echo "</tr>";
    }
    ?>

</table>
