<?php

?>
<div>
    Name: <sub>-------------------------------------------------------------------------------------------------</sub><br /><br />
    Score: <sub>-------------------------------------------------------------------------------------------------</sub> <br />
</div>
<hr class="new4" />
<table>
    <?php
    $count = 1;
    ?>
    <?php foreach ($data as $d) {
        if ($count == 1 || $count == 5) {
            if ($count == 5) {
                $count = 1;
            }
    ?>
            <tr>
            <?php } ?>
            <td>
                <div>
                    <span class="number" style="padding-right: 100px;">
                        <?= $d['first_number']; ?>
                    </span>
                </div>
                <div>
                    <span class="operation">
                        <?= $d['operation']; ?>
                    </span>
                    <span class="number">
                        <?= $d['second_number']; ?>
                    </span>
                </div>
                <hr class="new4">
                <div></div>
                <hr class="new4">
            </td>
            <?php if ($count == 4) { ?>
            </tr>
        <?php } ?>
        <?php $count += 1; ?>
    <?php } ?>
</table>
<?php if ($need_answer_sheet == 2) { ?>
    <div style="page-break-after: always;"></div>
    <u>Answer Sheet</u>
    <table>
        <?php
        $count = 1;
        ?>
        <?php foreach ($data as $d) {
            if ($count == 1 || $count == 5) {
                if ($count == 5) {
                    $count = 1;
                }
        ?>
                <tr>
                <?php } ?>
                <td>
                    <div>
                        <span class="number" style="padding-right: 100px;">
                            <?= $d['first_number']; ?>
                        </span>
                    </div>
                    <div>
                        <span class="operation">
                            <?= $d['operation']; ?>
                        </span>
                        <span class="number">
                            <?= $d['second_number']; ?>
                        </span>
                    </div>
                    <hr class="new4">
                    <div><?= $d['result']; ?></div>
                    <hr class="new4">
                </td>
                <?php if ($count == 4) { ?>
                </tr>
            <?php } ?>
            <?php $count += 1; ?>
        <?php } ?>
    </table>
<?php } ?>