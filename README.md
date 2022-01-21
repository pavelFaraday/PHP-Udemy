# PHP-Udemy

PHP Udemy Course - [PHP for Beginners - Become a PHP Master - CMS Project](https://www.udemy.com/course/php-for-complete-beginners-includes-msql-object-oriented/)

## Documentations & Topics

`print_r` - Prints/displays information about a variable in a way that's readable by humans.
`var_dump` - Dumps information about a variable. This function displays structured information about one or more expressions that includes its type and value. Arrays and objects are explored recursively with values indented to show structure.
`die()` - is an inbuilt function in PHP. It is used to print message and exit from the current php script. It is equivalent to exit() function in PHP.

[PHP Manual | Scope in PHP | 'global' keyword | $GLOBALS array](https://www.php.net/manual/en/language.variables.scope.php)

[PHP Manual | Math Functions](https://www.php.net/manual/en/ref.math.php)

[PHP Manual | String Functions](https://www.php.net/manual/en/ref.strings.php)

[PHP Manual | Array Functions](https://www.php.net/manual/en/ref.array.php)

[tutorialspoint.com | PHP - GET & POST Methods | $\_REQUEST variable](https://www.tutorialspoint.com/php/php_get_post.htm)

`isset()`, `unset()` - The isset() function is an inbuilt function in PHP which checks whether a variable is set (not empty) and is not NULL. This function also checks if a declared variable, array or array key has null value, if it does, isset() returns false, it returns true in all other possible cases. Determine if a variable is considered set, this means if a variable is declared and is different than null. If a variable has been unset with the unset() function, it is no longer considered to be set.

`in_array(needle, array)` - Returns true if needle is found in the array, false otherwise. [see example](https://www.php.net/manual/en/function.in-array.php).
`needle` - The searched value.

The `time()` function is a built-in function in PHP which returns the current time measured in the number of seconds since the Unix Epoch. The number of seconds can be converted to the current date using `date()` function in PHP.

`class_exists("Car")` — Checks if the class has been defined

`method_exists("Car", "turnONradio")` - Checks if the class has certain method

---

The `LIKE` operator is used in a `WHERE` clause to search for a specified pattern in a column.
In examples below it finds in DB any values that have "$search" value in any position:

`"SELECT * FROM posts WHERE post_tags LIKE '%$search%'"`

---

Show Limited Categories from DB:

`$query = 'SELECT * from categories LIMIT 3';`
