<?php require_once('header.php');?>

      <!-- Main hero unit for a primary marketing message or call to action -->
      <div class="hero-unit">
        <h3 style="margin:0 auto;">Добавить тему</h3>
        <div>
		<?php echo form_open('admin/add'); ?>
			<table>
			<tr>
				<td> Название лекции: </td>
				<td> <input type="text" name="theme_name"> </td>
			</tr> <tr>	
				<td> Номер аудитории: </td>
				<td><input type="text" name="room"></td>
			</tr>
				<td> Время начала лекции: </td>
				<td><input type="text" name="time"></td>
			</tr> <tr>	
				<td> Продолжительность лекции: </td>
				<td><input type="text" name="duration"></td>
			</tr>	
				<!--тут сделать выбор предмета и преподавателя -->
			</table>
		</div>
        <p><input class="btn" type="submit" value = "Добавить" name="submit"></p>
		</form>
      </div>

            <hr>

<?php require_once ('footer.php');?>
