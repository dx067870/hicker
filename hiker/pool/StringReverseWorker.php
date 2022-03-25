<?php
namespace  Hiker\Pool;
class  StringReverseWorker{

    private  $createdAt;
    public  function __construct()
    {
        $this->createdAt=new \DateTime();
    }
    /**
     * @param string $text
     * @return string
     */

    public  function  run(string $text){
        return strrev($text);
    }
}
