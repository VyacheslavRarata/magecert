<?php
class Dev_Stuff_IndexController extends Mage_Core_Controller_Front_Action{

    public function indexAction(){
        print ($this -> show());
    }
    public function secondAction(){
        print ($this -> show());
    }
    private function show(){
        return $this -> getRequest() -> getActionName() .
            "Action from " . $this->getRequest() -> getControllerModule() .
            "_" . ucfirst ($this -> getRequest() -> getControllerName()) .
            "Controller";
    }
}