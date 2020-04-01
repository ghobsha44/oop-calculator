<?php
class Calculator{
  public $number1;
  public $add;
  public $subtract;
  public $multiply;
  public $divide;
  public $number2;
  

  public function __construct($num1,$sum,$sub,$multi,$divition,$num2){
    $this->number1=$num1;
    $this->add=$sum;
    $this->subtract=$sub;
    $this->multiply=$multi;
    $this->divide=$divition;
    $this->number2=$num2;
  }

    public function domath(){
      $result=0;
      if(isset($this->add)){
        $result=$this->number1+$this->number2;
        echo $result;
      }
      if(isset($this->subtract)){
        $result=$this->number1-$this->number2;
        echo $result;
      }
      if(isset($this->multiply)){
        $result=$this->number1*$this->number2;
        echo $result;
      }
      if(isset($this->divide)){
        $result=$this->number1/$this->number2;
        echo $result;
      }


    }





}

 ?>
