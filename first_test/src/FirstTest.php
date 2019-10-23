<?php
/**
 *
 * Created by PhpStorm.
 * @author DL
 * @date   2019/10/23 11:10:20
 */

namespace ggob\first_test;

class FirstTest
{

	public function __construct($url = null,$version = null){
		return $url.$version;
	}

	public function get(){
		return 123;
	}

	public function printRunning()
	{
		echo 'running';
	}

}