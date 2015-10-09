<?php
class Dev_Tool_TollController extends Mage_Core_Controller_Front_Action{

    public function toolAction(){
        print ($this -> show());
    }
    private function show(){
        return $this -> getRequest() -> getActionName() .
        "Action from " . $this->getRequest() -> getControllerModule() .
        "_" . ucfirst ($this -> getRequest() -> getControllerName()) .
        "Controller";
    }
}