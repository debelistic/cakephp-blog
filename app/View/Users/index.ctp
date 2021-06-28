<!-- File: /app/View/Posts/index.ctp -->

<h1>Users</h1>
<?php echo $this->Html->link(
    'Add User',
    array('controller' => 'users', 'action' => 'add')
); ?>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>role</th>
        <th>No of posts</th>
    </tr>

    <!-- Here is where we loop through our $posts array, printing out post info -->

    <?php foreach ($users as $user): ?>
    <tr>
        <td><?php echo $user['User']['id']; ?></td>
        <td>
            <?php echo $this->Html->link($user['User']['username'],
                array('controller' => 'users', 'action' => 'view', $user['User']['id'])); ?>
        </td>
        <td><?php echo $user['User']['role'] ?></td>
        <td><?php echo $user['User']['post_count'] ?></td>
    </tr>
    <?php endforeach; ?>
    <?php unset($user); ?>
</table>
