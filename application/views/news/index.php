<a href="<?php echo base_url('news/create'); ?>">New article</a>
<div class="blog-post">
    <?php foreach ($news as $news_item): ?>

        <div class="blog-post-title"> <?php echo $news_item['title']; ?></div>
        <p>
            <?php echo $news_item['content']; ?>
        </p>
        <p><a href="<?php echo base_url('news/' . $news_item['id']); ?>">View article</a><a
                    href="<?php echo base_url('news/edit/' . $news_item['id']); ?>">Edit article</a></p>

    <?php endforeach; ?>
</div>