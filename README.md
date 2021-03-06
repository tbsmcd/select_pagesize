SELECT PAGESIZE
===
![Screen shot](https://raw.githubusercontent.com/tbsmcd/select_pagesize/images/select_pagesize.png)  
  
You can change `<input>` of pagesize to `<select>` with this plugin.

## Description

In Roundcube, pagesize can be set to any value. If the user sets an extremely large value, the mail server may be heavily loaded. In order to solve this problem, it is necessary to limit the values ​​that can be set.  
Using this plugin, you can not only change `<input>` to `<select>`, but also limit on the server side so that only the value set in `config.inc.php` can be posted.  

## install

`composer require tbsmcd/select_pagesize` 
 
repository: https://plugins.roundcube.net/packages/tbsmcd/select_pagesize

## Usage
Just edit `config.inc.php` .
```config.inc.php
$config['plugins'] = ['archive', 'zipdownload', 'select_pagesize'];

// Add array of option values. Values are int.
$config['pagesize_options'] = [10, 20, 50];

```

## Test
```
cd /path/to/src/
phpunit ./plugins/select_pagesize/tests/SelectPagesize.php --bootstrap ./tests/bootstrap.php
```

## Version
1.1.0

## License
[MIT](https://github.com/tbsmcd/select_pagesize/blob/master/LICENSE)

