<?php

class azulAuthHash {

    private $_AuthKey = 'asdhakjshdkjasdasmndajksdkjaskldga8odya9d8yoasyd98asdyaisdhoaisyd0a8sydoashd8oasydoiahdpiashd09ayusidhaos8dy0a8dya08syd0a8ssdsax';

    public function _generate_hash($args)
    {
        $args_string = implode($args);
        mb_convert_encoding($args_string, 'UTF-16LE', 'ASCII');

        $args_string = hash_hmac('sha512', $args_string, 'asdhakjshdkjasdasmndajksdkjaskldga8odya9d8yoasyd98asdyaisdhoaisyd0a8sydoashd8oasydoiahdpiashd09ayusidhaos8dy0a8dya08syd0a8ssdsax');        


        /**
         * Azul documentation as December 2017, says that we need do this:
         * 1 - concatenating a few fields (those in the method: _getAzulFormFields())
         * 2 - calculate a hash sha512
         * 3 - convert the hash to hexadecimal string
         * but, the third step doesn't work, if you do that, now in Jan 21, 2018, we are getting this error: INVALID_AUTH: AuthHash 
         */
        // $args_string = implode(unpack("H*", $args_string)); // string to hex:

        return (string)$args_string;

    }

    public function _getAzulFormFields(){

        return array(
            'MerchantId'        => (string)'39038540035',
            'MerchantName'      => 'Azul Test',
            'MerchantType'      => 'E-Commerce',
            'CurrencyCode'      => '$',
            'OrderNumber'       => '001',
            'Amount'            => (string)'2000',
            'ITBIS'             => (string)'1000',
            'ApprovedUrl'       => 'https://azul.com.do',
            'DeclinedUrl'       => 'https://azul.com.do',
            'CancelUrl'         => 'https://azul.com.do',
            'UseCustomField1'   => (string)'0',
            'CustomField1Label' => '',
            'CustomField1Value' => '',
            'UseCustomField2'   => (string)'0',
            'CustomField2Label' => '',
            'CustomField2Value' => '',
            'AuthKey'           => $this->_AuthKey, // ***** WARNING! *****, DON'T SEND THIS FIELD IN THE POST FORM IN CLIENT SIDE. Tips: unset($args['AuthKey'])
        );

    }

}

$azulAuthHash = new azulAuthHash();
$data = $azulAuthHash->_getAzulFormFields();
$authHash = $azulAuthHash->_generate_hash($data);
var_dump($authHash);