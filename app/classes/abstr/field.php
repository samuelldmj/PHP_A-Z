<?php
namespace App\classes\abstr;

abstract class Field 
{

public function __construct(protected string $name)
{

}

abstract public function render();


}

