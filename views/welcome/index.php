<script type="text/javascript">
    $(document).ready(function() {
        $('#redisTab a').click(function (e) {
            e.preventDefault();
            $(this).tab('show');
        })
    });
</script>
<?php echo $this->renderPartial('generalmodals')?>
<span class="span12" style="margin-bottom: 20px;">
    <?php foreach($this->dbs as $db) {
        if($db == $this->selectedDb) {
        ?>
            <a href="#" class="btn btn-primary disabled">
        <?php } else { ?>
            <a href="<?php echo $this->router->url?>/welcome/index/<?php echo $db?>" class="btn">
        <?php } ?>
            DB <?php echo $db?>
        </a>
    <?php } ?>
</span>
<span class="span12">
    <ul class="nav nav-tabs" id="redisTab">
        <li class="active">
            <a href="#search">Search</a>
        </li>
        <li>
            <a href="#keys">Keys</a>
        </li>
        <li>
            <a href="#strings">Strings</a>
        </li>
        <li>
            <a href="#hashes">Hashes</a>
        </li>
        <li>
            <a href="#lists">Lists</a>
        </li>
        <li>
            <a href="#sets">Sets</a>
        </li>
        <li>
            <a href="#sorted_sets">Sorted Sets</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade active in" id="search">
            <form class="form-search" action="<?=$this->router->url?>/keys/search" method="post">
                <legend>Search keys</legend>
                <div class="alert alert-warning">
                    <a class="close" data-dismiss="alert" href="#">×</a>
                    Since this doesn't support pagination yet, try to limit your search. Otherwise your browser might crash
                </div>
                <div class="input-prepend">
                    <span class="add-on"><i class="icon-key"></i></span>
                    <input type="text" placeholder="Key" name="key">
                </div>
                <button type="submit" class="btn"><i class="icon-search"></i> Search</button>
            </form>
        </div>
        <div class="tab-pane fade" id="keys">
            <legend>List keys</legend>
            <iframe src="http://localhost/phpRedisAdmin/?overview" width="98%" height="600px">
            </iframe>
        </div>
        <div class="tab-pane fade" id="strings">
            <?php echo $this->renderPartial('strings/add')?>
        </div>
        <div class="tab-pane fade" id="hashes">
            <?php echo $this->renderPartial('hashes/add')?>
        </div>
        <div class="tab-pane fade" id="lists">
            <?php echo $this->renderPartial('lists/add')?>
        </div>
        <div class="tab-pane fade" id="sets">
            <?php echo $this->renderPartial('sets/add')?>
        </div>
        <div class="tab-pane fade" id="sorted_sets">
            <?php echo $this->renderPartial('zsets/add')?>
        </div>
    </div>
</span>
