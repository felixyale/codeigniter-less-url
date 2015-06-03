## What is CodeIgniter-less-url

CodeIgniter-less-url is an less assets helper for CodeIgniter Framework, a toolkit for people wants to use lesscss width CodeIgniter. It'll comiple your .less file while your edit it and access it. It integrated with lessc.inc.php.

- CodeIgniter-less-url is a develop mode solution, you can precompile your static file before release.

### lesscss && CodeIgniter

-  [lesscss.org](http://lesscss.org)
-  [CodeIgniter](http://codeigniter.com)


### How to use it

```
<link rel="stylesheet" type="text/css" href="<?php echo less_url('css/main.less'); ?>" media="all">
```

will be produced to

```
<link rel="stylesheet" type="text/css" href="http://domain/less.php?path=css/main.less" media="all">
```

### Server Requirements

PHP version 5.4 or newer is recommended.

It should work on 5.2.4 as well, but we strongly advise you NOT to run
such old versions of PHP, because of potential security and performance
issues, as well as missing features.

### License

Please see the [license agreement](https://github.com/felixyale/codeigniter-less-url/blob/master/LICENSE).
