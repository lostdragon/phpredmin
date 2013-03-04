<?php echo $this->renderPartial('actions')?>
<span class="span12">
    <div class="alert alert-warning">
        <a class="close" data-dismiss="alert" href="#">×</a>
        Since this doesn't support pagination yet, try to limit your search. Otherwise your browser might crash
    </div>
    <div class="alert alert-info">
        <a class="close" data-dismiss="alert" href="#">×</a>
        Number of results: <?php echo count($this->keys)?>
    </div>
    <h5><i class="icon-key"></i> Redis Keys</h5>
    <form class="form-search" action="<?php echo $this->router->url?>/keys/search" method="post">
        <div class="input-prepend">
            <span class="add-on"><i class="icon-key"></i></span>
            <input type="text" value="<?php echo $this->search?>" name="key">
        </div>
        <button type="submit" class="btn"><i class="icon-search"></i> Search</button>
    </form>
    <table class="table table-striped">
        <tr>
            <th>Key</th>
            <th>Type</th>
            <th>TTL</th>
            <th>Ref Count</th>
            <th>Idle Time</th>
            <th>Encoding</th>
            <th>Size</th>
            <th>Expire</th>
            <th>Rename</th>
            <th>View</th>
            <th>Move</th>
            <th>Delete</th>
            <th></th>
        </tr>
        <?php foreach($this->keys as $key) {?>
            <tr>
                <td>
                    <?php echo $key?>
                </td>
                <td>
                    <?php echo Redis_Helper::instance()->getType($key)?>
                </td>
                <td>
                    <?php echo Redis_Helper::instance()->getTTL($key)?>
                </td>
                <td>
                    <?php echo Redis_Helper::instance()->getCount($key)?>
                </td>
                <td>
                    <?php echo Redis_Helper::instance()->getIdleTime($key)?>
                </td>
                <td>
                    <?php echo Redis_Helper::instance()->getEncoding($key)?>
                </td>
                <td>
                    <?php echo Redis_Helper::instance()->getSize($key)?>
                </td>
                <td>
                    <a href="<?php echo $this->router->url?>/keys/expire/<?php echo urlencode($key)?>" target="_blank" class="action">
                        <i class="icon-time"></i>
                    </a>
                </td>
                <td>
                    <a href="<?php echo $this->router->url?>/keys/rename/<?php echo urlencode($key)?>" target="_blank" class="action">
                        <i class="icon-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="<?php echo $this->router->url?>/keys/view/<?php echo urlencode($key)?>" target="_blank" class="action">
                        <i class="icon-folder-open-alt"></i>
                    </a>
                </td>
                <td>
                    <a href="<?php echo $this->router->url?>/keys/move/<?php echo urlencode($key)?>" target="_blank" class="action">
                        <i class="icon-move"></i>
                    </a>
                </td>
                <td>
                    <a href="#" class="action del">
                        <i class="icon-trash" id="<?php echo $key?>" keytype="keys"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="keys[]" value="<?php echo $key?>" />
                </td>
            </tr>
        <?php } ?>
        <?php if (!empty($this->keys)) { ?>
            <tr>
                <td colspan="10">
                </td>
                <td>
                    <a href="#" class="action moveall">
                        <i class="icon-move" keytype="keys" modaltitle="Move key to?" modaltip="Database Number"></i>
                    </a>
                </td>
                <td>
                    <a href="#" class="action delall">
                        <i class="icon-trash" keytype="keys"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="checkall" id="checkall" />
                </td>
            </tr>
        <?php } ?>
    </table>
</span>
