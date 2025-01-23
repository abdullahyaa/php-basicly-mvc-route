<h1>Users</h1>
<ul>
    <?php foreach ($users as $user): ?>
        <li><?= htmlspecialchars($user['id']) ?> - <?= htmlspecialchars($user['name']) ?></li>
    <?php endforeach; ?>
</ul>

<h2>Menus</h2>
<ul>
    <?php foreach ($menus as $key => $content): ?>
        <li><strong><?= htmlspecialchars($key) ?>:</strong> <?= htmlspecialchars($content) ?></li>
    <?php endforeach; ?>
</ul>