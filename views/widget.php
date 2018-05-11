<?php

use yii\helpers\Json;
use yii\web\View;

/* @var $this View */
/* @var $onlyIe7 bool */
/* @var $data array */
?>
<?php if (false) { ?>
    <script>
<?php } ?>
    $(function () {
<?= $onlyIe7 ? "if ($('#outdated').length > 0) {" : '' ?>
        outdatedBrowser(<?= Json::encode($data) ?>);
<?= $onlyIe7 ? '}' : '' ?>
    });
<?php if (false) { ?>
    </script>
<?php } ?>