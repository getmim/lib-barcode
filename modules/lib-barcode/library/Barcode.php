<?php
/**
 * Barcode
 * @package lib-barcode
 * @version 0.0.1
 */

namespace LibBarcode\Library;

use \Mim\Library\Fs;

class Barcode
{

    static function generate(array $opts) {
        $output = $opts['output'] ?? 'png';
        $handler = 'Picqer\\Barcode\\BarcodeGenerator' . strtoupper($output);

        $gener = new $handler;

        $result = $gener->getBarcode(
            $opts['number'],
            constant('Picqer\\Barcode\\BarcodeGenerator::' . ($opts['type']??'TYPE_CODE_39')),
            ( $opts['widthFactor'] ?? 2 ),
            ( $opts['height'] ?? 30 ),
            ( $opts['color'] ?? 'black' )
        );

        if(isset($opts['file']))
            Fs::write($opts['file'], $result);
        return $result;
    }
}