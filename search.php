<?php

  include "curl.php";

    if(isset($_POST['search']))
    {
        foreach($response['data'] as $key=>$value)
        {
            $name=$value['name'];
            if($_POST['name']==$name)
            {
                $name=$value['name'];
                header("location:coins.php?name=".$name." ");
            }
        }
    }
?>
