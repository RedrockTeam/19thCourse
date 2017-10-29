<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class BaseController extends Controller {
     public function _initialize(){
        header('Access-Control-Allow-Origin: *');
        if (APP_DEBUG) {
            $openid = 'ouRCyjpsCjN1luOFckV6tZKpPRM4';//session('openid');//
            $nickname = '闪闪的红星';// session('nickname'); //
        } else {
            $openid = session('openid');//
            $nickname = session('nickname'); //
        }
        if (!$openid || !$nickname) {
            $openid = I('get.openid');
            $nickname = urldecode(I('get.nickname'));//'知识混子周政';//
        }
        if (!$openid  || !$nickname) {
            $uri = '//wx.idsbllp.cn/MagicLoop/index.php?s=/addon/Api/Api/oauth&redirect='.urlencode('https://'.$_SERVER['HTTP_HOST'].'/game'.$_SERVER['REQUEST_URI']);
            redirect($uri);
        }
        session('openid', $openid);
        session('nickname', $nickname);
        $users = M('users');
        $res = $this->stuInfo();
        $num = $users->where(array('openid' => $openid))->count();
        if ($res['status'] == 200) {
            $usernumber = $res['data']['usernumber'];
            $colleges = M('colleges');
            $row = $colleges->query("select class , college from colleges where stuid = '$usernumber'");
            $college = ($row[0]['college'] != NULL ? $row[0]['college'] :NULL);
            $class = ($row[0]['class'] != NULL ? $row[0]['class']: NULL);
        } else {
           $usernumber = NULL;
           $class = NULL;
           $college = NULL;
        }
        if ($num == 0) {
            $data = array(
                'openid' => $openid,
                'nickname' => $nickname,
                'days'   => 0,
                'count'  => 0,
                'imgurl' => urldecode(I('get.headimgurl')),
                'score'  => 0,
                'usernumber' => $usernumber,
                'class' => $class,
                'college' => $college
            );
            $users->add($data);
            $userCurrent = M('user_current_question');
            $currentData = array(
                'openid' => $openid,
                'current' => 0,
                'today_group_count' => 0,
                'today_learn_id' => json_encode(array()),//2
                'date' => date('Y-m-d', time()),
            );
            $userCurrent->add($currentData);
        } else {
            $img = I('get.headimgurl');
            if ($nickname) {
                $data['nickname'] = $nickname;
                $data['imgurl'] = urldecode($img);
                $data['usernumber'] =  $usernumber;
                $data['class'] =  $class;
                $data['college'] = $college;
                $users->where(array('openid' => $openid))->save($data);
            }
        }
    }
    /*curl通用函数*/
    protected function curl_api($url, $data=''){
        // 初始化一个curl对象
        $ch = curl_init();
        curl_setopt ( $ch, CURLOPT_URL, $url );
        curl_setopt ( $ch, CURLOPT_POST, 1 );
        curl_setopt ( $ch, CURLOPT_HEADER, 0 );
        curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt ( $ch, CURLOPT_POSTFIELDS, $data );
        // 运行curl，获取网页。
        $contents = json_decode(curl_exec($ch), true);
        // 关闭请求
        curl_close($ch);
        return $contents;
    }

    /*从接口获取学生信息*/
    protected function stuInfo() {
        $openid = session('openid');
        $url = "https://wx.idsbllp.cn/MagicLoop/index.php?s=/addon/UserCenter/UserCenter/getStuInfoByOpenId&openId=".$openid;
        $res =  $this->curl_api($url);
        return $res;
    }


}
