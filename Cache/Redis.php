<?php
class Redis{
        const HOST="127.0.0.1";
        const PORT="6379";
        public $redis;
        function __construct(){
            $this->redis = new redis();
            //redis-cli -h 127.0.0.1 -p 6379
            $this->redis->connect(self::HOST, self::PORT);
        }

		function down(){
			if($this->redis){
				$this->redis->close();
			}
		}
        //查看服务是否运行
        public function ping(){
            echo "Server is running: " . $this->redis->ping();
            echo "<br/>";
        }
    
        /*
        *   查看redis信息
        */
        function testInfo(){
            $info = $this->redis->info();
            var_dump($info);
            echo "<br/>";
        }
    
    
        #字符串
        
        
        function setStr($key,$value){
            $rs = $this->redis->set($key,$value);
            return $rs;
        }
	
        function getStr($key){
            echo "stored string in redis::".$this->redis->get($key).'<br/>';
            echo "得到键值的长度::".$this->redis->strlen($key).'<br/>';
        }
	

		/**设置多个键和多个值
		 * @param $arr	参考格式：：$arr = array('sex'=>'men','address'=>'njupt');
		 * @return bool
		 */
        function setStrs($arr){
			$rs = false;
			if(isset($arr)&&count($arr)>0){

				$rs = $this->redis->mset($arr);
			}
            return $rs;
        }

		/**删除字符串键值对
		 *
		 * @param string $key
		 * @return mixed
		 */
        function delStr($key='sex'){
            $rs = $this->redis->del($key);
            return $rs;
        }

        #hash表
		/**
		 * @param $hash
		 * @param $key
		 * @param $value
		 * @return mixed
		 */
        function setHash($hash,$key,$value){
            $rs = $this->redis->HSET($hash,$key,$value);
            //$redis->HSET('hashkey1','fail','world');
            return $rs;
        }
        
        function getHash($hash,$key){
            var_dump( $this->redis->HGET($hash,$key) );
            echo "<br/>";
        }
        
        
       
        #列表
        function setList(){
            $rs = $this->redis->lpush('test_list','chentao','shanghai','25','men');
            return $rs;
        }
        
        function getList($list='test_list'){
            //echo "删除::".$redis->lrem('list1',0,'chentao').'<br/>';
            echo "<br/>";
            var_dump($this->redis->lrange($list,0,-1));
            echo "<br/>";
        }
       // var_dump($redis->TYPE('test_list'));
        
        
        #集合
		/**
		 * 操作有序集合
		 * @param string $z			集合名
		 * @param int $index
		 * @param string $value
		 */
		function setz($z,$index,$value){
			$this->redis->zadd($z,$index,$value);
		}

		/**获取集合
		 * @param $z		集合名
		 */
		function getz($z){
			$rs = $this->redis->zrange($z,0,-1);
			return $rs;
		}


    }

?>
