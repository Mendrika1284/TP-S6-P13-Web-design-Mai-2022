<?php
    if(isset($error)){ ?>
        <div class="alert alert-danger" role="alert">
            <?php foreach($error as $key){ echo $key; } ?>
        </div>
    <?php }
?>
<br><div class="row">
	<div class="col-md-12">
		<center><h3>Ajouter Consequence</h3></center>
		<form enctype="multipart/form-data" action="add" method="post">
			<input type="hidden" name="table" value="consequence">
			<input type="hidden" name="id" value="<?php echo $consequence[0]['idQuestion'] ?>">
			<label>Image de representation:</label><input type="file" name="file" class="form-control" size='100' ><br>
			<label>Titre:</label><input type="text" name="input" placeholder="Titre" class="form-control"><br>
			<label>Votre avis:</label><textarea name="textarea" placeholder="Consequence" class="form-control"></textarea><br>
			<center><input type="submit" name="submit" class="btn btn-outline-primary" value="Ajouter"></center>
		</form>
	</div>
</div>
<div class="row">
			<div class="col-lg-12">
				<table class="table table-responsive-lg">
				<tr>
					<th>ID</th>
					<th>Representation</th>
					<th>Titre</th>
					<th>Conséquence</th>
					<th>URL</th>
				</tr>
					<?php foreach($consequence as $key){ ?>
						<tr>
                            <td><?php echo $key['id'] ?></td>
                            <td><?php echo $key['representation'] ?></td>
                            <td><?php echo $key['titre'] ?></td>
                            <td><?php echo $key['consequence'] ?></td>
							<td><?php echo $key['url'] ?></td>
							<td><a href="<?php echo site_url('BackController/updatePage'); ?>?id=<?php echo $key['id'] ?>&table=consequence">Modifier</a></td>
							<td><a href="<?php echo site_url('BackController/delete'); ?>?id=<?php echo $key['id'] ?>&table=consequence">Supprimer</a></td>
                        </tr>
					<?php } ?>
				</table>
			</div>
</div><br>