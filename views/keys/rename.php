<div class="span12">
    <?php if (isset($this->renamed) && $this->renamed) { ?>
        <div class="alert alert-info">
            <a class="close" data-dismiss="alert" href="#">×</a>
            Key renamed successfuly
        </div>
    <?php } elseif(isset($this->renamed)) { ?>
        <div class="alert alert-danger">
            <a class="close" data-dismiss="alert" href="#">×</a>
            There was a problem renaming the key
        </div>
    <?php } ?>
    <?php if (!isset($this->renamed) || (isset($this->renamed) && !$this->renamed)) { ?>
        <form class="form-search" action="<?php echo $this->router->url?>/keys/rename" method="post">
            <legend>Rename key</legend>
            <div class="input-prepend">
                <span class="add-on"><i class="icon-key"></i></span>
                <input type="text" value="<?php echo $this->key?>" name="newkey">
            </div>
            <input name="key" value="<?php echo $this->key?>" type="hidden" />
            <button type="submit" class="btn"><i class="icon-pencil"></i> Rename</button>
        </form>
    <?php } ?>
</div>
