<?php
/*
  
// Анонимные функции
 
$f = function($x, $y) {
    return $x * $y;
};

echo $f(5, 10);
 * 
 */

/*
function getFilter($type)
{
    switch ($type) {
        case 'email':
            return function($x) {
                return trim($x);
            };
        case 'username':
            return function ($x) {
                return str_replace(' ', '', $x);
            };    
    }
}

$filter = getFilter('username');
echo $filter('dsfasdf dfadf dfaf sfaf');
echo getFilter('email')('     dsfasdf@sdf    ');
 * 
 */

/*
$a = array_map(function ($x) {
    return $x * 2;
}, [1, 2, 3]);

var_dump($a);

$a = [1, 2, 3];
array_walk($a, function (&$x) {
    $x *= 2;
});

var_dump($a);
 
 */

/*
// Замыкание

// Простой случай

$prefix = 'project';

$f = function ($name) use ($prefix) {
    return $prefix . '_' . $name;
};

echo $f(users); // project_users

// Более сложный случай
function getPrefix() {
    $prefix = 'project';
    return function ($name) use ($prefix) {
        return $prefix . '_' . $name;
    };
}
    
echo getPrefix()('users'); // project_users

function getPrefix2() {
    $prefix = 'project';
    $f = function ($name) use ($prefix) { // значение $prefix фиксируется на момент создания анонимной функции
        return $prefix . '_' . $name;
    };
    $prefix = 'foobar';
    return $f;
}
    
echo getPrefix2()('users'); // project_users
 
 */

/*
// Генераторы

function get()
{
    for ($i = 1; $i < 10; $i++) {
        yield $i;
    } 
}

foreach (get() as $n) {
    echo $n;    
} 
 */

/*
// переменное число аргументов

function sum(array $nums = [])
{
    return array_sum($nums);
}

//echo sum([1, 2, 3]);

function sum2(...$nums)
{
    var_dump($nums);
    return array_sum($nums);
}

//echo sum2(1, 2, 3);

function sum3($x, ...$nums)
{    
    var_dump($nums);
    return $x + array_sum($nums);
}

//echo sum3(1, 2, 3);

function sum4($x, $y, $z) {
    return $x + $y + $z;
}

$input = [1, 2, 3];

echo sum4(...$input);
 
 */

/*
// Новые операторы
//$x = true;
//$val = $x ? 12 : 85;
//echo $val;

//$val = $x->test() ? 12 : 85;
//echo $val; // Fatal error: Uncaught Error: Call to a member function test() on boolean

//$x = 0;
//$y = 1;
//$val = $x ?: $y;
//echo $val; // 1

//$y = 1;
//$val = $x ?? $y;
//echo $val; // 1 
 

$x = 0;
$y = 1;
echo $x <=> $y; // -1
echo $y <=> $x; // 1


$x = 'abc';
$y = 'bcd';
echo $x <=> $y; // -1

 */

