<?php
/**
 * @var $ticket Ticket
 */

$url = Yii::app()->createUrl('site/create');
$link = CHtml::link('Create New',$url);

?>

<div class="wrap">
    <?php
    screen_icon();
    echo $link;
    ?>

    <h2>Yii Connect Example</h2>

    <?php

    $columns = array();
    $columns[] = array(
        'name' => 'id',
    );
    $columns[] = array(
        'name' => 'name',
    );
    $columns[] = array(
        'header' => 'Actions',
        'value' => 'implode(" | ", $data->getActionLinks())',
        'type' => 'raw',
    );
    Yii::app()->controller->widget('zii.widgets.grid.CGridView', array(
        'id' => 'ticket-grid',
        'dataProvider' => $ticket->search(),
        'filter' => $ticket,
        'columns' => $columns,
    ));
    ?>
</div>
