<?php echo $this->renderPartial('actions')?>
<div class="span12">
    <?php echo $this->renderPartial('sets/add', array('oldkey' => $this->key))?>
    <h5><i class="icon-key"></i> <?php echo $this->key?></h5>
    <table class="table table-striped settable">
        <tr>
            <th>Value</th>
            <th>Delete</th>
            <th></th>
        </tr>
        <?php foreach ($this->members as $member) { ?>
            <tr>
                <td>
                    <?php echo $member?>
                </td>
                <td>
                    <a href="#" class="action del">
                        <i class="icon-trash" id="<?php echo $member?>" keytype="sets" keyinfo="<?php echo $this->key?>"></i>
                    </a>
                </td>
                <td>
                    <input type="checkbox" name="keys[]" value="<?php echo $member?>" />
                </td>
            </tr>
        <?php } ?>
        <?php if (!empty($this->members)) { ?>
            <tr>
                <td colspan="2">
                </td>
                <td>
                    <input type="checkbox" name="checkall" id="checkall" />
                    <a href="#" class="action moveall" style="margin-left: 10px;">
                        <i class="icon-move" keytype="sets" keyinfo="<?php echo $this->key?>" modaltitle="Move value to?" modaltip="Destination Set">
                        </i>
                    </a>
                    <a href="#" class="action delall" style="margin-left: 10px;">
                        <i class="icon-trash" keytype="sets" keyinfo="<?php echo $this->key?>"></i>
                    </a>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>
<?php echo $this->renderPartial('generalmodals')?>
