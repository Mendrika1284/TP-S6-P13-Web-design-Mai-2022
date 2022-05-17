<div class="row">
    <div class="col-md-12">
        <center>
            <form action="<?php echo site_url('BackController/update') ?>" method="POST">
                <input type="hidden" name="id" value="<?php echo $cause[0]['id']; ?>">
                <input type="hidden" name="table" value="<?php echo $table; ?>">
                <textarea type="text" class="form-control disable" placeholder="<?php echo $cause[0]['detail']; ?>"></textarea><br>
                <textarea type="text" class="form-control" name="cause"></textarea><br>
                <button class="btn btn-outline-primary" type="submit">Modifier</button>
            </form>
        </center>
    </div>
</div>