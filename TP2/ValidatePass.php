<?php

class ValidatePass{
    const MINLGT = 6;
    const MAXLGT = 20;
    public function  ValidLength ($pass){
        $passlength >= self::MINLGT && $passlength <= self::MAXLGT){
            return true;
        }else {
            return false;
        }
    }
  }
}

