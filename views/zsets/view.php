<?php echo $this->renderPartial('actions', array('nomove' => True))?>
<div class="span12">
    <?php echo $this->renderPartial('zsets/add', array('oldkey' => $this->key))?>
    <h5><i class="icon-key"></i> <?php echo $this->key?></h5>
    <table class="table table-striped settable">
        <tr>
            <th>Value</th>
            <th>Score</th>
            <th>Delete</th>
            <th></th>
        </tr>
        <?php foreach ($this->values as $member => $value) { ?>
            <tr>
                <td>
                    <?php echo $member?>
                </td>
                <td>
                    <?php echo $value?>
                </td>
                <td>
                    <a href="#" class="action del">
                        <i class="icon-trash" id="<?php echo $member?>" keytype="zsets" keyinfo="<?php echo $this->key?>"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="keys[]" value="<?php echo $member?>" />
                </td>
            </tr>
        <?php } ?>
        <?php if (!empty($this->values)) { ?>
            <tr>
                <td colspan="2">
                </td>
                <td>
                    <a href="#" class="action delall">
                        <i class="icon-trash" keytype="zsets" keyinfo="<?php echo $this->key?>"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="checkall" id="checkall" />
                </td>
            </tr>
        <?php } ?>
    </table>
    <?php if ($this->count > 30) {
        $ceil = floor($this->count / 30);
    ?>
        <ul class="pager">
            <li class="previous <?php if ($this->page == 0) echo "disabled";?>">
                <a href="<?php echo $this->router->url?>/zsets/view/<?php echo urlencode($this->key)?>/<?php echo $this->page - 1?>">&larr; Previous</a>
            </li>
            <li class="next <?php if ($this->page == $ceil) echo "disabled";?>">
                <a href="<?php echo $this->router->url?>/zsets/view/<?php echo urlencode($this->key)?>/<?php echo $this->page + 1?>">Next &rarr;</a>
            </li>
        </ul>
    <?php } ?>
</div>
<?php echo $this->renderPartial('generalmodals')?>
