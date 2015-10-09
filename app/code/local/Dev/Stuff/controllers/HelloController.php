<?php

class Dev_Stuff_HelloController extends Mage_Core_Controller_Front_Action{

    public function helloAction(){
        print ($this -> show());
    }
    private function show(){
        return $this -> getRequest() -> getActionName() .
        "Action from " . $this->getRequest() -> getControllerModule() .
        "_" . ucfirst ($this -> getRequest() -> getControllerName()) .
        "Controller";
    }
}