<?php foreach ($girls as $girls_item): ?>

    <h3><?php echo $girls_item['id']; ?></h3>
    <div class="main">
        <?php echo $girls_item['girl_name']; ?>
    </div>

<?php endforeach; ?>