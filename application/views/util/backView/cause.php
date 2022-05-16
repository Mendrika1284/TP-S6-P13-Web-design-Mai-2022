<br><div class="row">
	<div class="col-md-12">
		<center><h3>Ajouter Cause</h3></center>
		<form action="add" method="post">
			<input type="hidden" name="table" value="cause">
			<input type="hidden" name="id" value="<?php echo $cause[0]['idQuestion'] ?>">
			<textarea name="textarea" placeholder="Cause" class="form-control"></textarea><br>
			<center><input type="submit" class="btn btn-outline-primary" value="Ajouter"></center>
		</form>
	</div>
</div>
<div class="row">
			<div class="col-lg-12">
				<table class="table table-responsive-lg">
				<tr>
					<?php foreach($column as $key){ ?>
						<th><?php echo $key['Field']; ?></th>
					<?php } ?>
				</tr>
					<?php foreach($cause as $key){ ?>
						<tr>
                            <td><?php echo $key['id'] ?></td>
                            <td contenteditable><?php echo $key['detail'] ?></td>
							<td><a href="<?php echo site_url('BackController/update'); ?>?id=<?php echo $key['id'] ?>&&table=cause">Modifier</a></td>
							<td><a href="<?php echo site_url('BackController/delete'); ?>?id=<?php echo $key['id'] ?>&&table=cause">Supprimer</a></td>
                        </tr>
					<?php } ?>
				</table>
			</div>
</div><br>