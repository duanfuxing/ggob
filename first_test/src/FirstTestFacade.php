<?php

namespace ggob\first_test;

use Illuminate\Support\Facades\Facade;

class FirstTestFacade extends Facade{

	protected static function getFacadeAccessor(){
		return 'firstTest';
	}

}