<?php
/*
 * Created by PhpStorm.
 * 用户: 曾伟峰
 * 创建日: 2020-03-15
 * 创建时间: 19:18
 * 文件名:function.php
 * 作用: 公用函数文件
*/
if(!function_exists('random_str')){
    /**
     * [makeStr  随机字符串]
     * @param $length [随机长度]
     * @return string [返回一个指定长度的字符串]
     */
    function random_str($length)
    {
        //生成一个包含 大写英文字母, 小写英文字母, 数字 的数组
        $arr = array_merge(range(0, 9), range('a', 'z'), range('A', 'Z'));
        $str = '';
        $arr_len = count($arr);
        for ($i = 0; $i < $length; $i++)
        {
            $rand = mt_rand(0, $arr_len-1);
            $str.=$arr[$rand];
        }
        return $str;
    }
}

