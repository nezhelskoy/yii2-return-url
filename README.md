# Yii2 ReturnUrl filter

Keeps current URL in session for controller actions so we can return to it if needed.

### Install via Composer

In "composer.json" your project, add the following lines:

~~~
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

## License

yii2-return-url is released under the BSD License. See [LICENSE.md](https://github.com/nezhelskoy/yii2-return-url/blob/master/LICENSE.md) file for
details.

