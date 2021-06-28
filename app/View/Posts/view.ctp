<h1><?php echo h($post['Post']['title']); ?></h1>

<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>

<p><small>Created by: <?php echo $user['username']; ?></small></p>

<p><?php echo h($post['Post']['body']); ?></p>

