<?php

interface phuongtien{
    
    public function method();
    
}

trait xe {
    
    public function xeco(){}
}

class xeA implements phuongtien{ 
    
    use xe;
    
    public function method(){}
    
    public function __construct(){}
    
    public function goWhat() {}
} 

$reflection = new \ReflectionClass(new xeA());

echo count(get_class_methods(new xeA())) <=> count($reflection->getMethods());

