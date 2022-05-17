<div class="row">
    <div class="col-md-12">
        <center>
            <form action="<?php echo site_url('BackController/update') ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $consequence[0]['id']; ?>">
                <input type="hidden" name="table" value="<?php echo $table; ?>">
                <label>Image:</label><input type="file" name="image" accept="image/webp" class="form-control"><br>
                <label>Titre:</label><input type="text" name="titre" class="form-control" placeholder="<?php echo $consequence[0]['titre'] ?>"><br>
                <label>Consequence:</label><textarea type="text" class="form-control" name="consequence" placeholder="<?php echo $consequence[0]['consequence']; ?>"></textarea><br>
                <button class="btn btn-outline-primary" type="submit" name="submit">Modifier</button>
            </form>
        </center>
    </div>
</div>