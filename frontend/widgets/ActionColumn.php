<?php

namespace frontend\widgets;

use Yii;
use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\bootstrap\Modal;

class ActionColumn extends \yii\grid\ActionColumn {
    //Detail中字段的配置，params为array|func
    public $detailViewAttributes;

    public function init(){
        parent::init();
        $this->template = '<div class="btn-group" role="group" aria-label="...">'.$this->template.'</div>';
    }

    protected function initDefaultButtons(){
        if (!isset($this->buttons['view'])) {
            $this->buttons['view'] = function ($url, $model, $key) {
                Modal::begin([
                    'id' => 'gridview_view_modal_'.$key,
                    'header' => '<h2>Detail</h2>',
                ]);
                echo DetailView::widget([
                    'model' => $model,
                    'attributes' => $this->getDataCellDetailAttributes($model,$key),
                ]);
                Modal::end();
                $options = array_merge([
//                    'class' => 'btn btn-light btn-icon',
                    'data-toggle' => 'modal',
                    'data-target' => '#gridview_view_modal_'.$key,
                    'title' => Yii::t('yii', 'View'),
                    'aria-label' => Yii::t('yii', 'View'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['update'])) {
            $this->buttons['update'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Update'),
                    'aria-label' => Yii::t('yii', 'Update'),
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, $options);
            };
        }
        if (!isset($this->buttons['delete'])) {
            $this->buttons['delete'] = function ($url, $model, $key) {
                $options = array_merge([
                    'title' => Yii::t('yii', 'Delete'),
                    'aria-label' => Yii::t('yii', 'Delete'),
                    'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                    'data-method' => 'post',
                    'data-pjax' => '0',
                ], $this->buttonOptions);
                return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, $options);
            };
        }
    }

    public function getDataCellDetailAttributes($model,$key){
        if($this->detailViewAttributes !== null){
            if(is_array($this->detailViewAttributes)){
                return $this->detailViewAttributes;
            } else {
                return call_user_func($this->detailViewAttributes,$model,$key);
            }
        } else{
            return [];
        }
    }
}
