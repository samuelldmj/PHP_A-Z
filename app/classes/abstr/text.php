<?php
namespace App\classes\abstr;

class Text extends Field
 {

    public function render()
{
    return <<<HTML
    <input type="text" name="{$this->name}"/>
    HTML;

}

 }