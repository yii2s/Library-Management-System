<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * 此 asset 只服务于用户 图书档案 > 图书添加
 * @author Zhiqiao Xu  <xuzhiqiao97@gmail.com> 
 */

class BorrowQueryAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

	public $css = [
		'css/indexGlobal.css',
		'css/background.css',
		'css/borrowQuery/index.css',
    ];

    public $js = [
    ];


    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

}
