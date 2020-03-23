<?php

class JsonMessageFormatter {

    public function format(InfoMessage $message) {
        $vars = array_filter(
            get_object_vars($message),
            function ($item) {
                return !is_null($item);
            }
        );
    
        return $vars;
    }

}