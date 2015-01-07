<?php
/**
 * Created by PhpStorm.
 * User: Phillipp
 * Date: 07.01.2015
 * Time: 19:08
 */

namespace Ohlandt\CatStatus;


class CatStatus {

    private $cats = array(
        'STANDARD' => '(=^･^=)',
        'SUCCESS' => '└(=^‥^=)┐',
        'NOT_FOUND' => '(=ＴェＴ=)',
    );



    function __construct()
    {

    }


    public function __toString(){
        $str = "";
        foreach($this->cats as $key => $value){
            $str .= $key . ':'.$value.'|';
        }
        return substr_replace($str, "", -1);
    }


    public function set($status){
        if($status){
            foreach ($status as $key => $value) {
                $this->cats[$key] = $value;
            }
        }
        return $this;
    }


    public function get($status){
        if (array_key_exists($status, $this->cats)) {
            return $this->cats[$status];
        }
        return $this->cats['STANDARD'];
    }


    public function getAll(){
        return $this->cats;
    }

}