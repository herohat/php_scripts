<html lang="en">

<head></head>

<body>

<form action="https://pruebas.azul.com.do/PaymentPage/" method="post" id="paymentForm" name="paymentForm">

<input type="hidden" id="MerchantId" name="MerchantId" value="39038540035" >

<input type="hidden" id="MerchantName" name="MerchantName" value="Azul Test" >

<input type="hidden" id="MerchantType" name="MerchantType" value="E-Commerce" >

<input type="hidden" id="CurrencyCode" name="CurrencyCode" value="$" >

<input type="hidden" id="OrderNumber" name="OrderNumber" value="001" >

<input type="hidden" id="Amount" name="Amount" value="2000" >

<input type="hidden" id="ITBIS" name="ITBIS" value="1000" >

<input type="hidden" id="ApprovedUrl" name="ApprovedUrl" value="https://azul.com.do" >

<input type="hidden" id="DeclinedUrl" name="DeclinedUrl" value="https://azul.com.do" >

<input type="hidden" id="CancelUrl" name="CancelUrl" value="https://azul.com.do" >

<input type="hidden" id="UseCustomField1" name="UseCustomField1" value="0" >

<input type="hidden" id="CustomField1Label" name="CustomField1Label" value="" >

<input type="hidden" id="CustomField1Value" name="CustomField1Value" value="" >

<input type="hidden" id="UseCustomField2" name="UseCustomField2" value="0" >

<input type="hidden" id="CustomField2Label" name="CustomField2Label" value="" >

<input type="hidden" id="CustomField2Value" name="CustomField2Value" value="" >

<input type="hidden" id="ShowTransactionResult" name="ShowTransactionResult" value="0" >

<input type="hidden" id="AuthHash" name="AuthHash" value = "<?php echo calculateAuthHash()?>" >

<input type="submit" name="submit" value="Continuar" style="font-size : 20px;">

</form>
<?php
function  calculateAuthHash() {
$hash =  "39038540035"
."Azul Test"
."E-Commerce"
."$"
."001"
."2000"
."1000"
."https://azul.com.do"
."https://azul.com.do"
."https://azul.com.do"
."0"
.""
.""
."0"
.""
.""
."asdhakjshdkjasdasmndajksdkjaskldga8odya9d8yoasyd98asdyaisdhoaisyd0a8sydoashd8oasydoiahdpiashd09ayusidhaos8dy0a8dya08syd0a8ssdsax";
return hash_hmac('sha512',$hash, 'asdhakjshdkjasdasmndajksdkjaskldga8odya9d8yoasyd98asdyaisdhoaisyd0a8sydoashd8oasydoiahdpiashd09ayusidhaos8dy0a8dya08syd0a8ssdsax');
}

?>


AuthHash: <br />
<?php echo calculateAuthHash()?>

</body>

</html>