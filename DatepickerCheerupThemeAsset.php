<?php
/**
 * DatepickerCheerupThemeAsset.php
 *
 * @copyright Copyright Moslem Mobarakeh, https://github.com/farsidesign, 2016
 * @author Moslem Mobarakeh
 * @package farsidesign/yii2-jalali-datepicker
 * @license MIT
 */

namespace farsidesign\jalalidatepicker;

use yii\web\AssetBundle;

class DatepickerCheerupThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/persian-datepicker/dist';
    public $css = [
        'css/theme/persian-datepicker-cheerup.css',
    ];
}
