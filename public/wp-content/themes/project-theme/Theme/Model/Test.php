<?php

namespace Theme\Model;

class Test {
    private $testModule;

    public function __construct()
    {
       $this->testModule = get_field('test');
       //$this->title = get_field('title');
    }

    // private function sortList() {
    //     // does some stufff
    //     //returns []
    // }
    
    public function getData() {
       return [
            'test' => $this->testModule,
            //'title' => $this->title
            //'sortedArray' => $this->sortList()
       ];
    }
 }