<div class="row">
    <div class="col-md-12">
        <center>
            <form action="<?php echo site_url('BackController/update') ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $solution[0]['id']; ?>">
                <input type="hidden" name="table" value="<?php echo $table; ?>">
                <input type="text" class="form-control disable" name="solution" placeholder="<?php echo $solution[0]['solution']; ?>"><br>
                <button class="btn btn-outline-primary" type="submit">Modifier</button>
            </form>
        </center>
    </div>
</div>