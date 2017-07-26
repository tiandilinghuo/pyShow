<?php
namespace Home\Controller;
use Think\Controller;
//import('Vendor.jsonRPC.jsonRPCClient');
class IndexController extends Controller {
    public function index(){
        $this->show();

    }


    public function addTopicData(){
        $data=I('post.me');
        $top=session("topic");

        if(preg_match('/^[0-9]+$/',$top)){
            $data=trim($data);
            vendor('jsonRPC.jsonRPCClient');
            $client = new \jsonRPCClient('http://118.190.116.143:6115/');
            $ret=$client->addSen($top,$data);
            $real=json_decode($ret);

            $this->ajaxReturn($real);
        }
        else{
            $ret=array('code'=>2);
            $this->ajaxReturn($ret);
        }
    }
    public  function callR(){
        $data=I('post.');
        session("topic",$data['me']);

        vendor('jsonRPC.jsonRPCClient');
        $client = new \jsonRPCClient('http://118.190.116.143:6115/');
        $ret=$client->getOneT($data['me']);
        $real=json_decode($ret);

       $this->ajaxReturn($real);

    }
    public function callLetter(){
        $data=I('post.');

        vendor('jsonRPC.jsonRPCClient');
        $client = new \jsonRPCClient('http://118.190.116.143:6115/');
        $ret=$client->getLetter($data['me']);
        $real=json_decode($ret);

        $this->ajaxReturn($real);
    } public function callTerm(){
        $data=I('post.');

        vendor('jsonRPC.jsonRPCClient');
        $client = new \jsonRPCClient('http://118.190.116.143:6115/');
        $ret=$client->getTerms($data['me']);
        $real=json_decode($ret);

        $this->ajaxReturn($real);
    }
    public function showpy(){
        session('[destroy]');
        $this->display();
    }
    public function showsim(){
        session('[destroy]');
        $this->display();
    }
    public  function  getTop3(){
        $data=I('post.me');
        $top=session("topic");

        if(preg_match('/^[0-9]+$/',$top)){
            $data=trim($data);
            vendor('jsonRPC.jsonRPCClient');
            $client = new \jsonRPCClient('http://118.190.116.143:6115/');
            $ret=$client->getMostSim($top,$data);
            $real=json_decode($ret);

            $this->ajaxReturn($real);
        }
        else{
            $ret=array('code'=>2);
            $this->ajaxReturn($ret);
        }
    }
    public  function  seeLetter(){
        $data=I('post.me');
        $top=session("topic");

        if(preg_match('/^[0-9]+$/',$top)){
            $data=trim($data);
            vendor('jsonRPC.jsonRPCClient');
            $client = new \jsonRPCClient('http://118.190.116.143:6115/');
            $ret=$client->seeLetter($top,$data);
            $real=json_decode($ret);

            $this->ajaxReturn($real);
        }
        else{
            $ret=array('code'=>2);
            $this->ajaxReturn($ret);
        }
    }
    function addUserSample(){
        $data=I('post.me');
        $top=session("topic");

        if(preg_match('/^[0-9]+$/',$top)){
            $data=trim($data);
            vendor('jsonRPC.jsonRPCClient');
            $client = new \jsonRPCClient('http://118.190.116.143:6115/');
            $ret=$client->addUserSen($top,$data);
            $real=json_decode($ret);

            $this->ajaxReturn($real);
        }
        else{
            $ret=array('code'=>2);
            $this->ajaxReturn($ret);
        }
    }
    function getAllUserSample(){
        $top=session("topic");
        if(preg_match('/^[0-9]+$/',$top)){

            vendor('jsonRPC.jsonRPCClient');
            $client = new \jsonRPCClient('http://118.190.116.143:6115/');
            $ret=$client->getAllUserSen($top);
            $real=json_decode($ret);

            $this->ajaxReturn($real);
        }
        else{
            $ret=array('code'=>2);
            $this->ajaxReturn($ret);
        }
    }
    public  function  seePar(){
        $data=I('post.me');
        $top=session("topic");

        if(preg_match('/^[0-9]+$/',$top)){
            $data=trim($data);
            vendor('jsonRPC.jsonRPCClient');
            $client = new \jsonRPCClient('http://118.190.116.143:6115/');
            $ret=$client->seePar($top,$data);
            $real=json_decode($ret);

            $this->ajaxReturn($real);
        }
        else{
            $ret=array('code'=>2);
            $this->ajaxReturn($ret);
        }
    }
}