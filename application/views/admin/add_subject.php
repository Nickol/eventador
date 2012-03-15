<?php
require_once ('header.php');
?>

<div>
	<?php echo form_open('admin/add');?>
	<table>
		<tr>
			<td> Название предмета: </td>
			<td>
			<input type="text" name="subject">
			</td>
		</tr>
	</table>
</div>
<p>
	<input class="btn" type="submit" value = "Добавить" name="submit">
</p>
</form>
</div> 

<?php
	require_once ('footer.php');
?>

