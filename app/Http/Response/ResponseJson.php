<?php
/*
 * Created by PhpStorm.
 * 用户: 曾伟峰
 * 创建日: 2020-03-15
 * 创建时间: 19:23
 * 文件名:ResponseJson.php
 * 作用:
*/

namespace App\Http\Response;


trait ResponseJson
{
    /**
     * 返回一个json
     * @param $code
     * @param $msg
     * @param $data
     * @return false|string
     */
    private function jsoResponse($code,$msg,$data)
    {
        $content = [
            'code' => $code,
            'msg' =>$msg,
            'data' =>$data
        ];
        return response() -> json($content);
    }

    /**
     * App 接口请求成功返回
     * @param array $data
     * @return false|string
     */
    public function jsonSuccessData($data=[])
    {
        return $this ->jsonResponse(0,'成功',$data);
    }

    /**
     * 当APP接口出现异常是的返回
     * @param $code
     * @param $msg
     * @param array $data
     * @return false|string
     */
    public function jsonData($code,$msg,$data=[])
    {
        return $this ->jsonResponse($code,$msg,$data);
    }
}
