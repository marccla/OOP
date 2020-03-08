<? 
    include 'templates/header.php'; 
    include 'classes/account.class.php'; 

$myAccount = new Account(1000);
$myAccount2 = new Account(11000);

// var_dump($myAccount); ?><br><?
// print_r($myAccount->$balance);
 
// $myAccount->getAmount(); 
$myAccount->doWithdraw(232); ?><br><br><?
$myAccount2->doWithdraw(3432);?><br><br><?
$myAccount->doWithdraw(345); ?><br><br><?
var_dump($myAccount);?><br><br><?
var_dump($myAccount2);

    
    ?>




</body>
</html>