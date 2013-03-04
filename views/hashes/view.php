<?php echo $this->renderPartial('actions')?>
<div class="span12">
    <?php echo $this->renderPartial('hashes/add', array('oldkey' => $this->key))?>
    <h5><i class="icon-key"></i> <?php echo $this->key?></h5>
    <table class="table table-striped settable">
        <tr>
            <th>Key</th>
            <th>Value</th>
            <th>Edit</th>
            <th>Delete</th>
            <th></th>
        </tr>
        <?php foreach ($this->members as $member => $value) { ?>
            <tr>
                <td>
                    <?php echo $member?>
                </td>
                <td>
                    <?php echo $value?>
                </td>
                <td>
                    <a href="<?php echo $this->router->url?>/hashes/edit/<?php echo urlencode($this->key)?>/<?php echo urlencode($member)?>" target="_blank" class="action">
                        <i class="icon-edit"></i>
                    </a>
                </td>
                <td>
                    <a href="#" class="action del">
                        <i class="icon-trash" id="<?php echo $member?>" keytype="hashes" keyinfo="<?php echo $this->key?>"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="keys[]" value="<?php echo $member?>" />
                </td>
            </tr>
        <?php } ?>
        <?php if (!empty($this->members)) { ?>
            <tr>
                <td colspan="3">
                </td>
                <td>
                    <a href="#" class="action delall">
                        <i class="icon-trash" keytype="hashes" keyinfo="<?php echo $this->key?>"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="checkall" id="checkall" />
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php echo $this->renderPartial('generalmodals')?>
