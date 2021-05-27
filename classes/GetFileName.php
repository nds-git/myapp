<?php

/*
 *  класс GetFileName
 *  Все страницы с динамическим распределением ?id = 1242
 *  содержат название страницы fileName
 *  Чтобы его получить, необходимо извлечь ключи из глоб.массива $_GET
 *  Второй ключ [1] это и будет имя нашего файла
*/
class GetFileName {

    public function f_getFileName($get) {
     $get_keys = array_keys($get);
     $fileName = trim($get_keys[1],'_php');

     return $fileName;
    }

}