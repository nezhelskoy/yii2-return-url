# Yii2 ReturnUrl filter

Keeps current URL in session for controller actions so we can return to it if needed.

This is Yii2 port of [set-return-url-filter](https://github.com/yiiext/set-return-url-filter) extension.

### Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

~~~
php composer.phar require --prefer-dist nezhelskoy/yii2-return-url
~~~

Or add

~~~
"nezhelskoy/yii2-return-url": "~0.1.0"
~~~

to the require section of your `composer.json` file.

### Usage

In your controller add ReturnUrl filter to behaviors:

~~~php
public function behaviors()
{
    return [
        'returnUrl' => [
            'class' => 'nezhelskoy\returnUrl\ReturnUrl',
        ],
    ];
}
~~~

For access to previously visited url:

~~~php
Yii::$app->user->getReturnUrl();
~~~

## License

yii2-return-url is released under the BSD License. See [LICENSE.md](https://github.com/nezhelskoy/yii2-return-url/blob/master/LICENSE.md) file for
details.

