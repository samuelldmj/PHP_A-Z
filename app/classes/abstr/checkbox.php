<?php
namespace App\classes\abstr;

class Checkbox extends Boolean
{

    public function render()
    {
        return <<<HTML
        <input type="checkbox" name="{$this->name}"/>
        HTML;
    
    }
}