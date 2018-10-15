<?php
namespace app\admin\controller;
use think\Controller;
use code\Code;


class Login extends Controller
{

	public function login()
	{
		
		return $this->fetch();
	}

	public function code()
	{

		$code = new Code();
		$date = $code->make();
		//return $date;
		$this->assign('data',$data);
		return $this->fftch('login');
	}
}