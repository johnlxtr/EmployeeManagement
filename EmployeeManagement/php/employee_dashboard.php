<!DOCTYPE html>
<html lang="en" dir="ltr">
 <head> <meta charset="utf-8">
    <title>My First PHP WEB Page</title>
    <style media="screen">
    #header{
      width: 100%;
      height: 100px;
      background:blue;
    }
       #content{
         width: 100%;
         background: grey;
       }

         #left_pane{
           width: 20%;
           height:500px;
           background: green;
           float: left;
           }
           #right_pane{
             width: 80%;
             height:500px;
             background:orange;
             float: right;
           }
             </style>
              </head>
              <body> <div id="header">
                <h1>Employee Dashboard</h1>
              </div>
              <div id="content">
                 <div id="left_pane">
                   <ul>
                     <li><a href="homepage.php?page=CheckBalance">Check Balance</a>
                     </li> <li><a href="homepage.php?page=Deposit">Deposit</a>
                     </li> <li><a href="homepage.php?page=Withdraw">Withdraw</a> </li>
                     <li><a href="homepage.php?page=Transfer">Transfer</a> </li>
                   </ul>
                 </div>
                 <div id="right_pane">
                    <br/>
                    <?php
                    if(isset($_GET['page'])){
                      $page=$_GET['page'];
                      switch($page){
                        case 'CheckBalance':include('CheckBalance.php'); break;
                        case 'Deposit': include('Deposit.php'); break;
                        case 'Withdraw': include('Withdraw.php'); break;
                        case 'Transfer': include('Transfer.php'); break;
                        default: include('CheckBalance.php');break;
                      }
                      }else{
                        include('CheckBalance.php');
                      }
                      ?>
                      </div>
                    </div>
                   </body>
                 </htm1>
