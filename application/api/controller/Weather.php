<?php 
namespace app\api\controller;

use think\Controller;
use think\Db;
use think\Request;

class Weather
{
    public function index()
    {
    	$param = Request::instance()->param();
    	//dump($param);die();
        $res = Db::table("weather")->where('code',$param['city'])->select();
        //var_dump($res); die();
        return json($res);
    }
}
?>