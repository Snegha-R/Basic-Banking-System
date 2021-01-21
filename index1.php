<!DOCTYPE html>
<html>
<head>
<style>
label{display:inline-block;width:100px;margin-bottom:10px;}

.login{  
        width: 400px;  
        overflow: hidden;  
        margin: auto;       
        border-radius: 15px ;  
 }
 body  
{  
    margin: 0;  
    padding: 0;
    background-image:url("bb2.JPG");
    height: 100vh;
    background-size: cover;
    background-position: center;

    background-color: white;
    font-family: 'normal';
    font-size:30px;  
}  
h2{  
    text-align: center;  
    color: black;
    font-style: italic;
    font-size:40px;

    padding: 10px;  
} 
} 

</style>


<title>TRANSACTION</title>
</head>
<body>

<h2>Transaction</h2><br>
<div class="login">

<form id="login" method="post" action="process.php">
<label>From</label>
<input type="text" name="Afrom" />
<br />
<label>To</label>
<input type="text" name="Ato" />
<br />
<label>Amount</label>
<input type="number" name="amount" />
<br />

<input type="submit" value="SUBMIT">
<br />
<br />
<a href="Home.html" >Home</a>
</form>
</div>




</body>
</html>
 