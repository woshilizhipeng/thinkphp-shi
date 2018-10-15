<?php
namespace app\index\controller;
use think\Controller;

class News extends Controller
{
	public function _initialize()
	{
		echo '呵呵<br/>';

	}


	public function read()
	{
		return '你好';
	}
}