
<?php echo validation_errors(); ?>

<?php echo form_open('categories/create'); ?>

    <label for="catename">类别名称catename</label>
    <input type="input" name="catename" /><br />

    <input type="submit" name="submit" value="确认添加" />

</form>