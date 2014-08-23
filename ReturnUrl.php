<?php
/**
 * @link https://github.com/nezhelskoy/yii2-return-url
 * @copyright Copyright (c) 2014 Dmitry Nezhelskoy
 * @license "BSD-3-Clause"
 */

namespace nezhelskoy\returnUrl;

use Yii;
use yii\base\ActionFilter;

/**
 * ReturnUrl filter
 * 
 * Keep current URL (if it's not an AJAX url) in session so that the browser may
 * be redirected back.
 *
 * @author Dmitry Nezhelskoy <dmitry@nezhelskoy.ru>
 */
class ReturnUrl extends ActionFilter
{
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
            Yii::$app->user->setReturnUrl(Yii::$app->request->getUrl());
        }
        return $result;
    }
}
