<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Books';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <table class= "table pink">
        <tr> <th>ID</th>
            <th>Name</th>
            <th>Author</th>
        </tr> 
        <?php foreach ($allbook as $book): ?>
            <tr>
            <td><?= $book->id; ?></td>
                <td><?= $book->name; ?></td>
                <td>         
                    <?= $book->author0->name; ?>   
                </td>
            </tr>
        <?php endforeach; ?>
    </table> 
</div>