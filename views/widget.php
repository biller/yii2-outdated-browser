<?php

use biller\outdatedBrowser\Outdatedbrowser;
use yii\helpers\Json;
use yii\web\View;

/* @var $this View */
/* @var $widget Outdatedbrowser */
?>
<?php if (false) { ?>
    <script>
<?php } ?>
    $(function () {
<?= $widget->onlyIe7 ? "if ($('#outdated').length > 0) {" : '' ?>
        outdatedBrowser(<?= Json::encode($widget) ?>);
<?= $widget->onlyIe7 ? '}' : '' ?>
    });
<?php if (false) { ?>
    </script>
<?php } ?>