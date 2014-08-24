<?php
/**
 * @author Dmitry Nezhelskoy <dmitry@nezhelskoy.ru>
 * @link https://github.com/nezhelskoy/yii2-return-url
 * @copyright Copyright (c) 2014 Dmitry Nezhelskoy
 * @license "BSD-3-Clause"
 */

namespace nezhelskoy\returnUrl;

use Yii;
use yii\base\ActionFilter;
use yii\helpers\Url;

/**
 * ReturnUrl filter
 * 
 * Keep current URL (if it's not an AJAX url) in session so that the browser may be redirected back.
 */
class ReturnUrl extends ActionFilter
{
    
    public $visitedParam = 'visitedUrl';
    /**
     * This method is invoked right after an action is executed.
     * You may override this method to do some postprocessing for the action.
     * @param Action $action the action just executed.
     * @param mixed $result the action execution result
     * @return mixed the processed action result.
     */
    public function afterAction($action, $result)
    {
        if ( ! Yii::$app->request->getIsAjax()) {
            Url::remember(Yii::$app->request->getUrl(), $this->visitedParam);
        }
        return $result;
    }
}
