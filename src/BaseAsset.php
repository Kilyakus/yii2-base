<?php
namespace kilyakus\base;

class BaseAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $js = [
        'jquery/dist/jquery.min.js',
        'popper.js/dist/umd/popper.min.js',
        'bootstrap/dist/js/bootstrap.min.js',
        // 'tooltip.js/dist/umd/tooltip.min.js',
    ];

    public $depends = [
        'kilyakus\fonts\FontAsset',
        'kilyakus\toastr\ToastrAsset',
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
