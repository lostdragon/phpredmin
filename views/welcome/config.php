<span class="span12">
    <h5><i class="icon-cogs"></i> Redis Config</h5>
    <table class="table table-striped">
        <?php foreach($this->config as $key => $value) {?>
            <tr>
                <td>
                    <?php echo $key?>
                </td>
                <td>
                    <?php echo $value?>
                </td>
            </tr>
        <?php } ?>
    </table>
</span>
