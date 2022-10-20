<?php
include "css.php";
include "refresh.php";
include "search.php";
include "curl.php";
?>
<html>
    <head>
        <tittle></tittle>
    </head>
    
    <body>
        <header id=header>
        <img src="https://coincap.io/static/logos/black.svg" class="ui tiny image">
 
        <form action="search.php" method="post">
       
        <input id="search" type="text" name="name"  />
        <input id="label" type="submit" name="search" value="search"/>
        <?php
    
        ?>
        </form>
        
        <form action=""/>
        <input id="input" type="submit" name="refresh" value="refresh"/>
        </form>
        <?php
        if(isset($_POST['refresh']))
        {
            $obj= new fresher();
            $obj->refresh();
            header("location: coincap.php");
        }
        ?>
    </header>
    <div id="blue">
        <div id="market">
            <p>MARKETCAP</p>
            <p>$1.13T</p>
        </div>
        <div id="exchange">
            <p>EXCHANGE VOL</p>
            <p>$38.79B</p>
        </div>
        <div id="assets">
            <p>ASSETS</p>
            <p>2,295</p>
        </div>
        <div id="exch">
            <p>EXCHANGES</p>
            <p>73</p>
        </div>
        <div id="markets">
            <p>MARKETS</p>
            <p>13,840</p>
        </div>
        <div id="BTC">
            <p>BTC DOM INDEX</p>
            <p>33.1%</p>
        </div>
    </div>
<main>
        <div id="box">
        <table>
                <tr>
                    
                    <th>Rank</th>
                    <th></th>
                    <th>Name</th>
                    <th>price</th>
                   <th>MarketCap</th>
                    <th>VWAP(24Hr)</th>
                    <th>Supply</th>
                    <th>Volume(24Hr)</th>
                    <th>Change(24Hr)</th>
                 </tr>
                
                   <?php
                    foreach($response['data'] as $key=>$value)
                    {
                        $icon= $value['symbol'];
                        $icons= strtolower($icon);
                        
                        echo "<tr>";
                           echo "<td>". $value['rank'] ."</td>";
                           echo "<td width=3px>"."<img src= 'https://assets.coincap.io/assets/icons/$icons@2x.png' width='55px' height='40px'>"."</td>";
                           echo "<td width=5px><a href='coins.php?name=". $value['name']." '>". $value['name']."</a></td>";
                            echo "<td>". number_format($value['priceUsd'],2)."</td>";
                            echo "<td>". number_format($value['marketCapUsd'],2). "</td>";
                            echo "<td>". round($value['vwap24Hr']). "</td>";
                            echo "<td>". round($value['supply']) ."</td>";
                            echo "<td>". round($value['volumeUsd24Hr'])."</td>";
                            echo "<td>". round($value['changePercent24Hr'])."</td>";
                            echo "</tr>";
                            
                        }
                 
                 
                   ?> 
                
</table>
        </div>
</main>
<footer id="container">
    <img src="footer.jpg"/>
    </footer>
</body>
</html>