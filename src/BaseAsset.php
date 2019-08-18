<?php
namespace kilyakus\base;

class BaseAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $js = [
        'jquery/dist/jquery.js',
        'bootstrap/dist/js/bootstrap.min.js',
    ];

    public $depends = [
        'kilyakus\fonts\FontAsset',
        'kilyakus\toastr\ToastrAsset',
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
