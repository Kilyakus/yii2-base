<?php
namespace kilyakus\base;

class BaseAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__ . '/assets';
    }
    public $css = [
        'css/fonts.css',
    ];
    public $depends = [
        'kilyakus\fonts\FontAsset',
        'kilyakus\toastr\ToastrAsset'
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
