# Yii2 ReturnUrl filter

Keeps current URL in session for controller actions so we can return to it if needed.

This is Yii2 port of [set-return-url-filter](https://github.com/yiiext/set-return-url-filter) extension.

### Install via Composer

In "composer.json" your project, add the following lines:

~~~javascript
"repositories": [
    ...
    {
        "type": "vcs",
        "url": "https://github.com/nezhelskoy/yii2-return-url"
    }
],
"require": {
    ...
    "nezhelskoy/yii2-return-url": "*"
},
~~~

Then update your project:

~~~
php composer.phar update --prefer-dist
~~~

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

