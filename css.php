<style>
#header
    {
        background: white;
         height: 50px;
        text-align:left;
      
    }
       
.ui.tiny.image, .ui.tiny.images .image, .ui.tiny.images img, .ui.tiny.images svg
    {
    width: 120px;
    height: auto;
    font-size: .85714286rem;
    margin-left: 30px;
    }
    
.ui tiny image
{
       
        position: center;
        vertical-align: middle;
        max-width: 100%;
        background-color: transparent;
}
#input{
    display:flex;
    margin-left: 90%;
    position: absolute;
    top: 10px;
    background: blue;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    border: none;
}
#label{
    display:flex;
    margin-left: 75%;
    position: absolute;
    top:10px;
    background: blue;
    color: white; 
    border: 1px solid black;
    padding: 10px 15px;
    border-radius:5px;

}
#search{
    display:flex;
    margin-left: 60%;
    position: absolute;
    top:10px;
    background: white;
    border: 1px solid black;
    padding: 10px 15px;
    border-radius:5px;

}
  
    #blue{
        height: 200px;
        width:100%;
        background:#4287f5;
    }
    #box{
        height: 7000px;
        width:80%;
        margin:auto;
        margin-bottom:0;
        position: absolute;
        top:140px;
        margin-left: 130px;
        display:flex;
        border: 1px solid black;
        box-shadow: white;
        text-align: left;
        background: white;
        border-collapse: separate;
        border-spacing:0;
        color: black;
        box-shadow:white;
        padding: 7px;
           }
    table
    {
    border: 0px solid black;
    width: 110%;

    }
    th,td{
    border: 0px solid black;
    padding: 0px;

    }
    th{
        text-align: center;
        height:4px
    }
    td{
        text-align:center;
    }
  

    tr
    {
    border: 1px solid black;
    line-height: 1px;
    }
   
    #container{
        margin-top: 7000px;
        width:100%;
        height: 40vh;
        bottom:0;
        left:0;
        background:#4287f5;
        color: white;
        display: flex;

    }
    .graph{
    width: 70%;
    height: auto;
    font-size: .85714286rem;
    margin-top:10px;
    margin-left: 0px;
    position: left;
    vertical-align: middle;
    max-width: 100%;
    background-color: transparent;

    }
    #buysell{
    width: 30%;
    height: 70%;
    top: 250px;
    font-size: .85714286rem;
    margin-top:10px;
    margin-right: 0px;
    margin-left:70%;
    position: absolute;
    vertical-align: middle;
    max-width: 100%;
    background-color: transparent;
    border: 0px solid black;
    text-align: center;
    font-size:15px;
    }
    button1{
        background: red;
        color: white;
        padding: 10px 15px;
        border-radius: 5px;
        border: none;
    }
   p{
       font-weight: bold;
       font-size: 14px;
   }
   #market{
       height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:130px;
       top: auto;
       position: absolute;
        color: white;
        font-size: 1em;
       font-weight: 700;
       text-transform: uppercase;
       text-align: center;
       

   }
   #exchange{
       height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:280px;
       top: auto;
       position: absolute;
        color: white;
        font-size: 1em;
       font-weight: 700;
       text-transform: uppercase;
       text-align: center;

   }
   #assets{
      height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:440px;
       top: auto;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;

    }
   #exch{
     height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:630px;
       top: auto;
       position: absolute;
       color: white;
       font-size: 1em;
       font-weight: 700;
      text-transform: uppercase;
      text-align: center;

    }
   #markets{
       height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:800px;
       top: auto;
       position: absolute;
       color: white;
       font-size: 1em;
       font-weight: 700;
       text-transform: uppercase;
       text-align: center;

    }
   #BTC{
       height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:1000px;
       top: auto;
       position: absolute;
       color: white;
       font-size: 1em;
       font-weight: 700;
       text-transform: uppercase;
       text-align: center;

}
#rank{
     height: 100px;
       width: 70px;
       border: 0px solid black;
       margin-left:50px;
       top: 90px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      font-size: 20px;
      text-align: center;
      background: rgb(24, 198, 131);;
      border-radius: 7px;
      text-align: center;
}
#name{
    height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:180px;
       top: 100px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      font-size: 15px;
}
#price{
    height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:180px;
       top: 150px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      font-size:20px;
}
#cap{
        height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:450px;
       top: 100px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      font-size: 30px;
}
#marketc{
      height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:450px;
       top: 150px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      font-size:20px;
}
#vol{
    height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:690px;
       top: 100px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      font-size: 30px;
}
#vwap{
    height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:690px;
       top: 150px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
}
#sup{
    height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:970px;
       top: 100px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
      font-size: 30px;
}
#supp{
    height: 90px;
       width: 150px;
       border: 0px solid black;
       margin-left:970px;
       top: 150px;
       position: absolute;
       color: white;
       font-size: 1em;
      font-weight: 700;
      text-transform: uppercase;
      text-align: center;
}
#login{
    height: 340px;
    width:30%;
    border: 1px solid white;
    margin-left: 450px;
    margin-top: 100px;
    text-align:center;
    background:#4287f5;
    color: white;
    border-radius: 4px;
}
#login.h3{
    text-align: center;
    font-size: bold;
}
#login.p{
    text-align: center;
    font-size: 20px;
}
#white{
    height:120px;
    width:400px;
    border: 0px solid black;
    margin-left:30px;
    top: 30px;
}
#valnam{
    text-align:center;
    position: absolute;
    top:300px;
    margin-left:150px;
    font-size:30px;
}
#high{
    height:30px;
    width:140px;
    border: 0px solid black;
    margin-left:400px;
    position: absolute;
    top: 300px;
}
#low{
    height:30px;
    width:140px;
    border: 0px solid black;
    margin-left:400px;
    position: absolute;
    top: 350px;
    
}
#Average{
    height:30px;
    width:180px;
    border: 0px solid black;
    margin-left:600px;
    position: absolute;
    top: 300px;
    
}
#change{
    height:30px;
    width:180px;
    border: 0px solid black;
    margin-left:600px;
    position: absolute;
    top: 350px;
    
}
</style>