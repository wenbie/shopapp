<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){$this->display();  }
     public function left(){$this->display(); }
    public function right(){
         $this->display();
         C('SHOW_PAGE_TRACE',false);
     }
    public function top(){$this->display();}
}