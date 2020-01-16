This is a PHP test

## [算法练习](/suanfa/)
- [快速排序](/suanfa/)
- [二分查找](/suanfa/binarySearch.php)
- [斐波那契数列](/suanfa/fibonacci_sequence.php)
- [猴群选举](/suanfa/monkey.php)
- [topK](/suanfa/topk.php)
- [给定一个二维数组，数组每行从左到右都是递增的；每列也是递增的。
请完成一个函数，输入如上二维数组和一个整数，函数功能为判断该整数是都存在于数组中。
时间复杂度尽可能低。（请说明时间复杂度）](/suanfa/deep_in_array.php)
- [输入一个字符串，输出所有排列](/suanfa/all_group.php)
- [合并两个有序数组为一个有序数组](/suanfa/array_merge_sort.php)
- [求一个矩阵中最大的二维矩阵（元素和最大) ](/suanfa/max_array.php)

如：

    1 2 0 3 4
    2 3 4 5 1
    1 1 5 3 0
    
    中最大的是：
    4 5
    5 3




## [laboratory 实验室](/laboratory)
- [测试 array_filter|array_walk|array_map](/laboratory/array_foreach.php)
- [写一个函数，尽可能高效的，从一个标准 url 里取出文件的扩展名](/laboratory/getUrlExtensionName.php)



- [php7新特性——标量类型与返回值类型声明](laboratory/php7_1.php)
- [php7新特性——Null合并运算符](laboratory/php7_2.php)
- [php7新特性——太空船运算符](laboratory/php7_3.php)
- [php7新特性——define定于常量数组](laboratory/php7_4.php)
- [php7新特性——define定于常量数组](laboratory/php7_4.php)
- [php7新特性——new class创建匿名类](laboratory/php7_5.php)
- [php7新特性——Closure::call ](laboratory/php7_6.php)
有着更好的性能，将一个闭包函数动态绑定到一个新的对象实例并调用执行该函数
- [php7新特性——过滤unserialize](laboratory/php7_7.php)
- [php7新特性——CSPRNG 生成加密强壮的随机数](laboratory/php7_8_csprng.php)
- [php7新特性——异常 assert断言](laboratory/php7_9_assert.php)
- php7新特性——use语句
批量加载同一个命名空间下的类、函数、常量
- php7新特性——Session选项
```php
//session_start可以接受一个数组参数，覆盖php.ini中的session配置
//这个特性也引入了一个新的 php.ini 设置（session.lazy_write）, 默认情况下设置为 true，意味着 session 数据只在发生变化时才写入。
//除了常规的会话配置指示项， 还可以在此数组中包含 read_and_close 选项。如果将此选项的值设置为 TRUE， 那么会话文件会在读取完毕之后马上关闭，
//因此，可以在会话数据没有变动的时候，避免不必要的文件锁
session_start([
    'cache_limiter' => 'private',
    'read_and_close' => true,
])
```
- [php7新特性——错误处理](laboratory/php7_10_error.php)
- [php7新特性——运算函数intdiv](laboratory/php7_2.php)
- [php7新特性——废弃特性](https://www.runoob.com/php/php-deprecated-features.html)
- [php7新特性——移除扩展](https://www.runoob.com/php/php-removed-extensions.html)

## [Helper 辅助类小工具](/Helper)
- [裁剪分割文本文件](/Helper/cuttxt.php)


## [下载图片](/getimg)
1. [基类](/getimg/GetImageClass.php)
2. [测试](/getimg/gethenha.php)


## [Helper 帮助](/Helper)
- [手机号查询](/Helper/QueryPhone.php)
- [file_get_content发送http请求](/Helper/HttpRequest.php)



## cli
- [爬虫获取某视频网站的资源](/cli/pachong.php)
- [redis 发布订阅模式测试](/cli/redis_subscrible.php)