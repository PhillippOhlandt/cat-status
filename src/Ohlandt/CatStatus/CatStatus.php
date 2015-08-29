<?php

/**
 * Created by PhpStorm.
 * User: Phillipp
 * Date: 07.01.2015
 * Time: 19:08
 */

namespace Ohlandt\CatStatus;

class CatStatus
{
    private $cats = array(
        'STANDARD'  => '(=^･^=)',
        'SUCCESS'   => '└(=^‥^=)┐',
        'NOT_FOUND' => '(=ＴェＴ=)',
    );

    public function __toString()
    {
        $str = "";

        foreach ($this->cats as $key => $value){
            $str .= $key . ':' . $value . '|';
        }

        return substr_replace($str, "", -1);
    }

    public function set(array $status)
    {
        $this->cats = array_merge($this->cats, $status);

        return $this;
    }

    public function get($status)
    {
        $key = array_key_exists($status, $this->cats) ? $status : 'STANDARD';

        return $this->cats[$key];
    }

    public function getAll()
    {
        return $this->cats;
    }
}
