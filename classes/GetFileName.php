<?php

class GetFileName {

    public function f_getFileName($get) {
     $get_keys = array_keys($get);
     $fileName = trim($get_keys[1],'_php');

     return $fileName;
    }

}