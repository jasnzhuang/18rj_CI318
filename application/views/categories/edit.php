<?php echo validation_errors(); ?>
<?php print_r($categories_item) ?>
<?php echo form_open('categories/update'); ?>
	<input type="hidden" name="id" value="<? echo $categories_item['id'] ?>">
    <label for="catename">类别名称catename</label>
    <input type="input" name="catename" value="<? echo $categories_item['catename'] ?>" /><br />
    <input type="submit" name="submit" value="确认编辑" />
</form>