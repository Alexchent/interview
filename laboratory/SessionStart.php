<?php/** * Created by PhpStorm. * User: chentao * Date: 2021/7/3 * Time: 11:47 AM *///session_start可以接受一个数组参数，覆盖php.ini中的session配置//这个特性也引入了一个新的 php.ini 设置（session.lazy_write）, 默认情况下设置为 true，//意味着 session 数据只在发生变化时才写入。//除了常规的会话配置指示项， 还可以在此数组中包含 read_and_close 选项。如果将此选项的值设置为 TRUE， 那么会话文件会在读取完毕之后马上关闭，//因此，可以在会话数据没有变动的时候，避免不必要的文件锁session_start([    'cache_limiter' => 'private',    'read_and_close' => true,]);