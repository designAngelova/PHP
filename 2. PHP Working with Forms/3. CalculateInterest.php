<!--Write a PHP script CalculateInterest.php which generates an HTML page that contains:
An input text field to hold the amount of money
Radio buttons to choose the currency
An input text field to enter the compound annual interest amount
A dropdown menu to choose the period of time
A submit button
When the information is submitted, the script should print out the amount of money you will have after the selected period, rounded to 2 decimal places. Semantic HTML is required. Styling is not required-->
<?php
if(isset($_POST['amount']) && isset($_POST['currency']) && isset($_POST['interest']) && isset($_POST['period'] )){
    $amount = $_POST['amount'];
    $currency = $_POST['currency'];
    $interest = $_POST['interest'];
    $period = $_POST['period'];

    $interestPerMonth = ($interest/100)/12;
    if($period == '6months'){
        $period  = 6;
    }
    else if($period == '1year'){
        $period  = 12;
    }
    else if($period == '2years'){
        $period  = 24;
    }
    else if($period == '5year'){
        $period  = 60;
    }
    $result = round($amount * pow(1 + $interestPerMonth, $period / 12 * 12), 2);
    if($currency == 'usd'){
        $result = '$ '.$result;
    }
    else if($currency == 'eur'){
        $result = '&#8364; ' . $result;
    }
    else {
        $result .= " Lv.";

    }
    echo $result;
}
?>
<!DOCTYPE html>

<html>
<head>
    <title>Calculate Interest</title>
</head>
<body>

<form method="post">
    <label for="amount">Enter Amount</label>
    <input type="text" name="amount" /><br />
   <input type="radio"  name ="currency" value="usd">
    <label for="usd">USD</label>
    <input type="radio" name ="currency" value="eur">
    <label for="eur">EUR</label>
    <input type="radio" name ="currency" value="bgn">
    <label for="bgn">BGN</label><br />
    <label for="interest ">Compound annual interest amount</label>
    <input type="text" name="interest" /><br />
    <select  name="period"><br />
        <option value="6months">6 months</option>
        <option value="1year"> 1 year</option>
        <option value="2years"> 2 years </option>
        <option value="5years"> 5 years </option>

    </select>
    <input type="submit" name="submit" />
</form>

</body>
</html>