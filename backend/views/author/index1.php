<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AuthorSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Authors';
$this->params['breadcrumbs'][] = $this->title;
?>
    <table class= "table orange" >
        <tr><th>Id</th>
            <th>Name</th>
            <th>Book</th>
        </tr>
        <?php foreach ($allauthor as $author): ?>
            <tr>
                <td><?= $author->id?></td>
                <td><?= $author->name ?></td>
                <td>            
                    <?php if($author->books!=null): ?>
                    <?php foreach ($author->books as $book): ?>
                        <div class="col-md-12">
                           <?= $book->name ?>
                       </div>
                    <?php endforeach; ?>
                    <?php else: ?>
                    <?= "no books found"; ?>
                     <?php endif; ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
