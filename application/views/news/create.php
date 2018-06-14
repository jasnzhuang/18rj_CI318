
<?php echo validation_errors(); ?>

<?php echo form_open('news/create'); ?>
<div>
	    <h1>
        <?php if(isset($cid)) : ?>
        <?php echo $cid; ?>
        <?php endif;?>
    </h1>
	<label for="category">类别category</label>
	<select name="category" id="category">
		<?php foreach ($categories as $c_item): ?>
		<option value="<?php echo $c_item['id']; ?>" <?php if($c_item['id']==$cid):?> selected="selected"<?php endif;?>><?php echo $c_item['catename']; ?></option>
		<?php endforeach; ?>
	</select>
	</div>
    <label for="title">标题Title</label>
    <input type="input" name="title" /><br />

    <label for="content">内容Text</label>
    <textarea name="content"></textarea><br />

    <input type="submit" name="submit" value="确认添加" />

</form>