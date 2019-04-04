<?php

class Calculator {
    private $a;
    private $b;
    private $memory;

    public function __construct(){
        $this->a = null;
        $this->b = null;
    }

    public function setFirstNum($a) {
        $this->a = (int)$a;
    }

    public function setSecondNum($b) {
        $this->b = (int)$b;
    }

    public function getFirstNum() {
        return $this->a;
    }

   public function getSecondNum() {
        return $this->b;
    }

    public function setMemory($memory) {
        $this->memory = (int)$memory;
    }

    public function getMemory() {
        return $this->memory;
    }

    public function getSum() {
        return $this->a + $this->b;
    }

    public function getMin() {
        return $this->a - $this->b;
    }

    public function getSquare() {
        return sqrt($this->a);
    }

    public function getDiv() {
        if ($this->b != 0) {
            return $this->a / $this->b;
        }
        else {
            return ERROR;
        }
    }

    public function getMultiple() {
        return $this->a * $this->b;
    }

    public function getPercent() {
      return ($this->a / 100) * $this->b;
  }

}