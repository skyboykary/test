<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Test extends GOMS_Controller {
    
    public function __construct()
    {
        parent::__construct();
    }
    
    public function test()
    {
    	var_dump(1236666666);die;
    }
}