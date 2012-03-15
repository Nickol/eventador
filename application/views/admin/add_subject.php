<?php
require_once ('header.php');
?>

<div  class="hero-unit">
	<h3>Добавить предмет</h3>
	<div>
	<?php echo form_open('admin/add_subject');?>
	
	<table>
		<tr>
			<td> Название предмета: </td>
			<td>
			<input type="text" name="subject">
			</td>
		</tr>
	</table>
<p>
	<input class="btn" type="submit" value = "Добавить" name="submit">
</p>
</form>
</div> 
</div>

<?php
	require_once ('footer.php');
?>

