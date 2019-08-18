<?php
namespace kilyakus\base;

class BaseAsset extends \yii\web\AssetBundle
{
    public function init()
    {
        $this->sourcePath = __DIR__;
    }
    public $depends = [
        'kilyakus\fonts\FontAsset',
        'kilyakus\toastr\ToastrAsset'
    ];
    public $jsOptions = array(
        'position' => \yii\web\View::POS_HEAD
    );
}
