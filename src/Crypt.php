<?php
// ========================================================================= //
// SINEVIA PUBLIC                                        http://sinevia.com  //
// ------------------------------------------------------------------------- //
// COPYRIGHT (c) 2008-2018 Sinevia Ltd                   All rights resrved! //
// ------------------------------------------------------------------------- //
// LICENCE: All information contained herein is, and remains, property of    //
// Sinevia Ltd at all times.  Any intellectual and technical concepts        //
// are proprietary to Sinevia Ltd and may be covered by existing patents,    //
// patents in process, and are protected by trade secret or copyright law.   //
// Dissemination or reproduction of this information is strictly forbidden   //
// unless prior written permission is obtained from Sinevia Ltd per domain.  //
//===========================================================================//

namespace Sinevia;

class Crypt {

    /**
     * XOR Encodes a String
     * Encodes a String with another key String using the
     * XOR encryption.
     * @param String the String to encode
     * @param String the key String
     * @return String the XOR encoded String
     */
    public static function xorEncode($string, $key) {
        for ($i = 0, $j = 0; $i < strlen($string); $i++, $j++) {
            if ($j == strlen($key)) {
                $j = 0;
            }
            $string[$i] = $string[$i] ^ $key[$j];
        }
        return base64_encode($string);
    }

    /**
     * XOR Decodes a String
     *
     * Decodes a XOR encrypted String using the same key String.
     * @param String the String to decode
     * @param String the key String
     * @return String the decoded String
     */
    public static function xorDecode($encstring, $key) {
        $string = base64_decode($encstring);
        for ($i = 0, $j = 0; $i < strlen($string); $i++, $j++) {
            if ($j == strlen($key)) {
                $j = 0;
            }
            $string[$i] = $key[$j] ^ $string[$i];
        }
        return $string;
    }

}

?>
