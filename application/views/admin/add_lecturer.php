<?php require_once ('header.php');?>

<div class="hero-unit">
	<h3 style="margin:0 auto;">Добавить преподавателя</h3>
	<form>
		<?php form_open('admin/add_lecturer');?>
		<table>
			<tr>
				<td>Имя</td><td>
				<input type = "text" name = "first_name"/>
				</td>
			</tr>
			<tr>
				<td>Отчество</td><td>
				<input type = "text" name = "second_name">
				</td>
			</tr>
			<tr>
				<td>Фамилия</td><td>
				<input type = "text" name = "middle_name">
				</td>
			</tr>
			<tr>
				<td>Звание</td><td>
				<select name = "degree">
					<option>Специалист</option>
					<option>Бакалавр</option>
					<option>Магистр</option>
					<option>Кандидат наук</option>
					<option>Доктор наук</option>
				</select></td>
			</tr>
		</table>
		<p>
			<input class="btn" type="submit" value = "Добавить" name="submit">
		</p>
	</form>
</div>
<?php 	require_once ('footer.php');?>
