<?php 

function navItem(string $link,string $title) {
    $active = null;
    if($_SERVER['SCRIPT_NAME'] == $link ){
        $active = 'active';
    }
      return  
      <<<HTML
        <li class="$active">
            <a href="{$link}">$title</a>
        </li>
        HTML;
}