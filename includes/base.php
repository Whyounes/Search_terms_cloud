<?php
/*
 *  File containing some utils functions.
 */


namespace RY\search_terms;

class Utils{
    /*
     *   Truncate a string and add a specified ellipsis at the end.
     *   
     *   @param string The string to work with
     *   @param length Number of chars to truncate
     *   @param ellipsis string to add at the end, default "..."
     *
     *   @return Resulted string
     */
    function truncate( $string, $length, $ellipsis = "" ){
        if( strlen($string) <= $length )
            return $string;
        else
            return substr( $string, 0, $length).$ellipsis;
    }//truncate

    /*
     *   Convert an Array of stdObject to an associative Array
     *   
     *   @param array Array of sdtObjects. 
     *
     *   @return An associative Array
     */
    function objectToArray($array) {
        if (is_object($array)) {
            $array = get_object_vars($array);
        }

        if (is_array($array)) {
            return array_map("RY\search_terms\Utils::objectToArray", $array);
        }
        else {
            return $array;
        }
    }//objectToArray

}//class
