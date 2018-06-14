
<?php echo validation_errors(); ?>
<?php print_r($news_item) ?>
<?php echo form_open('news/update'); ?>
	<input type="hidden" name="id" value="<? echo $news_item['id'] ?>">
    <label for="title">标题Title</label>
    <input type="input" name="title" value="<? echo $news_item['title'] ?>" /><br />

    <label for="text">内容Text</label>
    <textarea name="text"><? echo $news_item['content'] ?></textarea><br />

    <input type="submit" name="submit" value="确认编辑" />

</form>