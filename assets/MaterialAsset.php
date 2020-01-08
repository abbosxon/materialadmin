<?php

namespace abbosxon\materialadmin\assets;

use yii\base\Exception;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class MaterialAsset extends AssetBundle
{
    public $sourcePath = '@vendor/abbosxon/yii2-material-admin/web';
    public $css = [
        'css/main.css',
        'css/font-awesome.min.css',
        'css/material-design-iconic-font.min.css',
    ];
    public $js = [
        'js/spin.min.js',
        'js/jquery.autosize.min.js',
        'js/jquery.nanoscroller.min.js',
        'js/App.js',
        'js/AppNavigation.js',
        'js/AppOffcanvas.js',
        'js/AppCard.js',
        'js/AppForm.js',
        'js/AppNavSearch.js',
        'js/AppVendor.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $theme = 'default';

    public function init()
    {
        if ($this->theme) {
            if (('default' !== $this->theme) && (strpos($this->theme, 'theme-') !== 0)) {
                throw new Exception('Invalid theme specified');
            }

            $this->css[] = sprintf('css/%s.css', $this->theme);
        }

        parent::init();
    }
}
