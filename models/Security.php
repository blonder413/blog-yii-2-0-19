<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace app\models;
use Yii;
/**
 * Description of Security
 *
 * @author blonder413
 */
class Security extends \yii\base\Model {
    /**
     * This method encrypt a string using mcrypt
     * @param String $text string to encrypt
     * @return String text encrypted
     */
    public static function encrypt($text)
    {
        if (!$text == null) {
            return base64_encode( convert_uuencode ($text) );
        }
    }
    //-----------------------------------------------------------------------------------------------------------------
    /**
     * decrypt a string using a reversible mode with mcrypt
     * @param String $string    String to encript
     * @return String encripted
     */
    public static function decrypt($string)
    {		
    	return convert_uudecode( base64_decode( $string ) );
    }
    //-----------------------------------------------------------------------------------------------------------------
}