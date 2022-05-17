<br><div class="row">
	<div class="col-md-12">
		<center><h3>Ajouter Solution</h3></center>
		<form action="add" method="post">
			<input type="hidden" name="table" value="solution">
			<input type="hidden" name="id" value="<?php echo $solution[0]['idQuestion'] ?>">

			<input type="text" name="input" placeholder="Solution" class="form-control"><br>
			<center><input type="submit" class="btn btn-outline-primary" value="Ajouter"></center>
		</form>
	</div>
</div>

<div class="row">
			<div class="col-lg-12">
				<table class="table table-responsive-lg">
				<tr>
					<th>ID</th>
					<th>Solution</th>
				</tr>
					<?php foreach($solution as $key){ ?>
						<tr>
                            <td><?php echo $key['id'] ?></td>
                            <td><?php echo $key['solution'] ?></td>
							<td><a href="<?php echo site_url('BackController/updatePage'); ?>?id=<?php echo $key['id'] ?>&&table=solution">Modifier</a></td>
							<td><a href="<?php echo site_url('BackController/delete'); ?>?id=<?php echo $key['id'] ?>&&table=solution">Supprimer</a></td>
                        </tr>
					<?php } ?>
				</table>
			</div>
</div><br>