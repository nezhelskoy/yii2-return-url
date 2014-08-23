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
     * This method is invoked right before an action is to be executed (after all possible filters.)
     * You may override this method to do last-minute preparation for the action.
     * @param Action $action the action to be executed.
     * @return boolean whether the action should continue to be executed.
     */
    public function beforeAction($action)
    {
        if ( ! Yii::$app->request->getIsAjax()) {
            Yii::$app->user->setReturnUrl(Yii::$app->request->getUrl());
        }
        return true;
    }
}
