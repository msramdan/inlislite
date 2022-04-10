<?php



use yii\widgets\DetailView;
use kartik\datecontrol\DateControl;
use yii\helpers\Url;

/**
 * @var yii\web\View $this
 * @var common\models\KelompokPelanggaran $model
 */

$this->title = $model->Name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Kelompok Pelanggarans'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kelompok-pelanggaran-view">
   <p> <a class="btn btn-warning" href="/inlislite/backend/gii">Kembali</a>        <a class="btn btn-primary" href="/inlislite/backend/gii/default/update?id=%24model-%3Eid">Koreksi</a>        <a class="btn btn-danger" href="/inlislite/backend/gii/default/delete?id=%24model-%3Eid" data-confirm="Apakah Anda yakin ingin menghapus item ini?" data-method="post">Hapus</a>    </p>



    <?= DetailView::widget([
            'model' => $model,
            
        'attributes' => [
            'Name',
            'Jumlah',
            'Warna',
            'SuspendMember',
        ],
       
    ]) ?>

</div>
