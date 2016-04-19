<?php
/**
 * @author Dmitry A. Nezhelskoy <dmitry@nezhelskoy.pro>
 * @link https://github.com/nezhelskoy/yii2-return-url
 * @copyright Copyright (c) 2014 - 2016 Dmitry A. Nezhelskoy
 * @license "BSD-3-Clause"
 */

namespace nezhelskoy\returnUrl;

use Yii;
use yii\base\ActionFilter;

/**
 * ReturnUrl filter
 * 
 * Keep current URL (if it's a GET url and it's not an AJAX url) in session so that the browser may be redirected back.
 */
class ReturnUrl extends ActionFilter
{
    
    /**
     * This method is invoked right before an action is to be executed (after all possible filters.)
     * You may override this method to do last-minute preparation for the action.
     * @param \yii\base\Action $action the action to be executed.
     * @return boolean whether the action should continue to be executed.
     */
    public function beforeAction($action)
    {
        if (Yii::$app->getRequest()->getIsGet() && !Yii::$app->getRequest()->getIsAjax()) {
            Yii::$app->getUser()->setReturnUrl(Yii::$app->getRequest()->getUrl());
        }

        return parent::beforeAction($action);
    }
}
