<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace iamguba\MaskedInput;

use yii\web\AssetBundle;

/**
 * The asset bundle for the [[MaskedInput]] widget.
 *
 * Includes client assets of [jQuery input mask plugin](https://github.com/RobinHerbots/Inputmask).
 *
 * @author Kartik Visweswaran <kartikv2@gmail.com>
 * @author Alexander Gubenko <gubacoolest@gmail.com>
 * @since 1.0
 */
class MaskedInputAsset extends AssetBundle
{
    public $sourcePath = '@npm/inputmask/dist';
    public $js = [
        'jquery.inputmask.bundle.js'
    ];
    public $depends = [
        \Yiisoft\Yii\JQuery\YiiAsset::class
    ];
}
