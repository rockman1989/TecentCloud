<?php 
namespace app\weather\controller;

use think\Controller;
use think\Db;
use think\Request;

class Weather extends Controller
{
	public function weather()
	{
		return $this->fetch();
	}
	
    public function weatherSearch()
    {
    	$param = Request::instance()->param();
    	//dump($param);die();
        $res = Db::table("city")->field('weather')->where('number',$param['city'])->select();
        //var_dump($res); die();
        return json($res);
    }
    
    public function weatherAPI(){
    	$param = Request::instance()->param();
    	if(empty($param)){
    		$res=array("result"=>1,"msg"=>"error");
    		return $res;
    	}
    	$latitude = trim($param['latitude']);
    	$longitude = trim($param['longitude']);
    	$data = $this->location($latitude,$longitude);
    	$city=$data->result->addressComponent->city;
    	$district=$data->result->addressComponent->district;
    	$city1=str_replace("市","",$city);
    	$district1=str_replace("区","",$district);
    	$res = Db::table("city")->field('weather')->where('province',$city1)->where('city',$district1)->select();
    	$ress = array_merge(array('city'=>$city1),$res);
    	return $ress;
    }
    
    public function location($latitude,$longitude){
    	if(!empty($latitude)){
    		$json=file_get_contents("http://api.map.baidu.com/geocoder/v2/?location=".$latitude.",".$longitude."&output=json&pois=1&ak=aCtf56tsYuUK1rI89mTCWCfWD8FABsZn");
    		return json_decode($json);
    	} else {
    		return null;
    	}
    }
}
?>