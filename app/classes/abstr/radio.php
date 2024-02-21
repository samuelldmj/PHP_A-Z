<?php
namespace App\classes\abstr;

class Radio extends Boolean
{

    public function render()
    {
        return <<<HTML
        <input type="radio" name="{$this->name}"/>
        HTML;
    
    }
}