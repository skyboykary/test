<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends GOMS_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function tip()
    {
    	var_dump('this is test');
    }
    public function test()
    {
    	var_dump('this is test');die;
    	var_dump(123231);die;
    }

    public function test()
    {
    	var_dump(123456);die;
    }
}