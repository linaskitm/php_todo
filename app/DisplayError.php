<?php

namespace TaskManager;
class DisplayError
{
    static public function getError($data){
        foreach ($data as $item){
            echo "<div class='alert alert-danger'>$item</div>";
        }
    }
}