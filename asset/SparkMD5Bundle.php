<?php
namespace kfosoft\yii2\asset;

use yii\web\AssetBundle;

/**
 * @see https://github.com/satazor/SparkMD5
 * @package app\services
 * @version 1.0
 * @copyright (c) 2014-2015 KFOSoftware Team <kfosoftware@gmail.com>
 */
class SparkMD5Bundle extends AssetBundle
{
    /** @var string path to source folder */
    public $sourcePath = '@vendor/kfosoft/yii2-js-spark-md5-asset-bundle/asset/assets';

    /** @var array js files. */
    public $js = [
        'js/spark-md5.js'
    ];
}
