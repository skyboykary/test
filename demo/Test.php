<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends GOMS_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function tip()
    {
    	var_dump('this is test22');
    	var_dump(3333333333);
    	var_dump('this is test beta');
    }
    public function tip2()
    {
    	var_dump('this is test111');
    }
    public function test()
    {
    	var_dump('this is test111');die;
    	var_dump(123231);die;
    }

    public function test()
    {
    	var_dump(123456);die;
    }
}