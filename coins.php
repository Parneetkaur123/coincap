<?php
include "css.php";

include "curl.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
    <header id=header>
        <center><img src="https://coincap.io/static/logos/black.svg" class="ui tiny image"></center>
        
    </header>
    <div id="blue">
        <?php
        if(isset($_GET['name']))
        {
            $id=$_GET['name'];
            foreach($response['data'] as $key=>$value)
            {
                $name= $value['name'];
                if($id==$value['name'])
                {
                
                  echo "<div id=rank>". $value['rank']."<br>". "Rank</div>";
                  echo "<div id=name>" . $value['name']."</div>";
                  echo "<div id=price>" .$value['priceUsd']. "</div>";
                  echo "<div id=cap>MarketCap</div>";
                  echo "<div id=marketc>" .round($value['marketCapUsd'])."</div>";
                  echo "<div id=vol>Volume24Hr</div>";
                  echo "<div id=vwap>" .round($value['vwap24Hr'])."</div>";
                  echo "<div id=sup>Supply</div>";
                  echo "<div id=supp>" .round($value['supply'])."</div>";
                }
            }
        }
        ?>
    </div><br>
    <div id="white">
    <?php
        if(isset($_GET['name']))
        {
            $id=$_GET['name'];
            foreach($response['data'] as $key=>$value)
            {
                $name= $value['name'];
                $icons= strtolower($value['symbol']);
                if($id==$value['name'])
                {
                    echo "<img src= 'https://assets.coincap.io/assets/icons/$icons@2x.png' width='110px' height='100px' text-align='center'>";
                    echo "<div id=valnam>".$value['name'].($value['symbol'])."</div>";
                    
                  
                }
            }
        }
        ?>
        <div id="high">HIGH  $19,654.74</div>
        <div id="low">LOW    $19,133.53</div>
        <div id="Average">AVERAGE  $19,320.84</div>
        <div id="Change">CHANGE   -2.02%</div>
        
    </div>
    <img src="graph.png" class="graph"/><br><br>
    <div id="buysell">
        <img src="buyimg.png" class="buyimg"/>
        <form action="" method="post">
        <input type="text" name="coin" placeholder="enter no. of coins"/>
    
        <input type="submit" name="submit" value="submit"/>
        <?php
        if(isset($_POST['submit']))
        {
            if(empty($_POST['submit']))
            {
                echo "please enter no. of coins";
            }
            elseif(!empty($_POST['submit']))
            {
                echo "<a href=login.php>Login</a>";
            }
        }
        ?>
        </form>
        <img src="sellimg.png" class="buyimg"/>
        <input type="text" name="coin" placeholder="enter no. of coins"/>
        <p>To Sell coins. Please Click here<a href="login.php">Sell</a><br><br>
    </div>
    <footer>
        <img src="footer.jpg"/>
    </footer>
</body>
</html>