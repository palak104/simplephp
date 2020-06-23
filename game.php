<!DOCTYPE html>
<head>
    <!-- I palak depani ,student no - 000787449 , cerify that all code submitted
     is my own work;that i have not copied from any other source .
I also certify that i have not allowed my work to be copied by other.
 
Assignment 1 - here is a php page which is redirected by submiting form 
and display output according to users input -->
<style>
    
            body{
                text-align: center;
                margin-left: auto;
                margin-right: auto;
                background-color:lightseagreen;
                color:lightyellow;
                font-size: 30px;
            }
            .black {
                color: black;
            }

            button{
                float: left;
                font-size: 20px;
                
            }
           
            img{
               
                display: inline-block;
                height:8%;
                width: 8%;
                padding: 2%;

            }
            img:hover {
                background: black;
                height: 10%;
                width: 10%;

  

            }
        </style>

</head>

<body>
    <!-- button which redirect again on index.html page if user want to enter again all details or change input-->
    <form action = index.html method="get">
        <button type = submit value = "submit"> Re-enter details </button>
    </form>
<?php
 $class= "black";  // use for css purpose

 $name =($_GET["name"]); // this will get name enter by user from form
 echo "Hello ! $name. <br>";

 $num = ($_GET["card-num"]); // get number of cards input from form

 $cardchoice=($_GET["cardseries"]); // get choice of series of card from user

 
 if ($cardchoice !== "Deck"){
 echo" You have selected <span class = '$class'> $num </span>numbers of cards
       from suits <span class='$class'> $cardchoice </span> <br>";
 }
 else {
     echo"You want to display all cards from <span class='$class'> $cardchoice </span> <br>";
 }

 // array which hold series of cards
$suits = array ("Spades", "Diamonds", "Hearts","Clubs", "Deck");

    // this one is used to display only one card once from series/deck
    $numbers = range(1, $num);
    shuffle($numbers);
    if($cardchoice == $suits[0]){
    foreach ($numbers as $number) {

     // print cards from spades series   
     if($number == 1)
    { 
        echo "<img src=img/spades/AS.jpg>";   
    }
    elseif($number == 2)
    { 
        echo "<img src=img/spades/2S.jpg>";   
    }
    elseif($number == 3)
    { 
        echo "<img src=img/spades/3S.jpg>";   
    }
    elseif($number == 4)
    { 
        echo "<img src=img/spades/4S.jpg>";   
    }
    elseif($number == 5)
    { 
        echo "<img src=img/spades/5S.jpg>";   
    }
    elseif($number == 6)
    { 
        echo "<img src=img/spades/6S.jpg>";   
    }
    elseif($number == 7)
    { 
        echo "<img src=img/spades/7S.jpg>";   
    }
    elseif($number == 8)
    { 
        echo "<img src=img/spades/8S.jpg>";   
    }
    elseif($number == 9)
    { 
        echo "<img src=img/spades/9S.jpg>";   
    }
    elseif($number == 10)
    { 
        echo "<img src=img/spades/10S.jpg>";   
    }
    elseif($number == 11)
    { 
        echo "<img src=img/spades/JS.jpg>";   
    }
    elseif($number == 12){
        echo "<img src=img/spades/QS.jpg>";   

    }
     else{
      echo "<img src=img/spades/KS.jpg>"; 
    }

}
    

}
// print cards from diamonds series
elseif($cardchoice == $suits[1]){
    foreach ($numbers as $number) {
        
    if($number == 1)
    { 
        echo "<img src=img/diamonds/AD.jpg>";   
    }
    elseif($number == 2)
    { 
        echo "<img src=img/diamonds/2D.jpg>";   
    }
    elseif($number == 3)
    { 
        echo "<img src=img/diamonds/3D.jpg>";   
    }
    elseif($number == 4)
    { 
        echo "<img src=img/diamonds/4D.jpg>";   
    }
    elseif($number == 5)
    { 
        echo "<img src=img/diamonds/5D.jpg>";   
    }
    elseif($number == 6)
    { 
        echo "<img src=img/diamonds/6D.jpg>";   
    }
    elseif($number == 7)
    { 
        echo "<img src=img/diamonds/7D.jpg>";   
    }
    elseif($number == 8)
    { 
        echo "<img src=img/diamonds/8D.jpg>";   
    }
    elseif($number == 9)
    { 
        echo "<img src=img/diamonds/9D.jpg>";   
    }
    elseif($number == 10)
    { 
        echo "<img src=img/diamonds/10D.jpg>";   
    }
    elseif($number == 11)
    { 
        echo "<img src=img/diamonds/JD.jpg>";   
    }
    elseif($number == 12)
    { 
        echo "<img src=img/diamonds/QD.jpg>";   
    }

    else{
        echo "<img src=img/diamonds/KD.jpg>";   

    }
}
    
}
// print cards from hearts series
elseif($cardchoice == $suits[2]){
    foreach ($numbers as $number) {
        
    if($number == 1)
    { 
        echo "<img src=img/hearts/AH.jpg>";   
    }
    elseif($number == 2)
    { 
        echo "<img src=img/hearts/2H.jpg>";   
    }
    elseif($number == 3)
    { 
        echo "<img src=img/hearts/3H.jpg>";   
    }
    elseif($number == 4)
    { 
        echo "<img src=img/hearts/4H.jpg>";   
    }
    elseif($number == 5)
    { 
        echo "<img src=img/hearts/5H.jpg>";   
    }
    elseif($number == 6)
    { 
        echo "<img src=img/hearts/6H.jpg>";   
    }
    elseif($number == 7)
    { 
        echo "<img src=img/hearts/7H.jpg>";   
    }
    elseif($number == 8)
    { 
        echo "<img src=img/hearts/8H.jpg>";   
    }
    elseif($number == 9)
    { 
        echo "<img src=img/hearts/9H.jpg>";   
    }
    elseif($number == 10)
    { 
        echo "<img src=img/hearts/10H.jpg>";   
    }
    elseif($number == 11)
    { 
        echo "<img src=img/hearts/JH.jpg>";   
    }
    elseif($number == 12)
    { 
        echo "<img src=img/hearts/QH.jpg>";   
    }

    else{
        echo "<img src=img/hearts/KH.jpg>";   

    }
}
    
}
// print cards from clubs series
elseif($cardchoice == $suits[3]){
    foreach ($numbers as $number) {
        
    if($number == 1)
    { 
        echo "<img src=img/clubs/AC.jpg>";   
    }
    elseif($number == 2)
    { 
        echo "<img src=img/clubs/2C.jpg>";   
    }
    elseif($number == 3)
    { 
        echo "<img src=img/clubs/3C.jpg>";   
    }
    elseif($number == 4)
    { 
        echo "<img src=img/clubs/4C.jpg>";   
    }
    elseif($number == 5)
    { 
        echo "<img src=img/clubs/5C.jpg>";   
    }
    elseif($number == 6)
    { 
        echo "<img src=img/clubs/6C.jpg>";   
    }
    elseif($number == 7)
    { 
        echo "<img src=img/clubs/7C.jpg>";   
    }
    elseif($number == 8)
    { 
        echo "<img src=img/clubs/8C.jpg>";   
    }
    elseif($number == 9)
    { 
        echo "<img src=img/clubs/9C.jpg>";   
    }
    elseif($number == 10)
    { 
        echo "<img src=img/clubs/10C.jpg>";   
    }
    elseif($number == 11)
    { 
        echo "<img src=img/clubs/JC.jpg>";   
    }
     elseif($number == 12)
    { 
        echo "<img src=img/clubs/QC.jpg>";   
    }

    else{
        echo "<img src=img/clubs/KC.jpg>";   

    }
}
}
    
// print all the cards of deck
else{
    echo "<img src=img/spades/AS.jpg>"; echo "<img src=img/spades/2S.jpg>";
    echo "<img src=img/spades/3S.jpg>"; echo "<img src=img/spades/4S.jpg>";
    echo "<img src=img/spades/5S.jpg>"; echo "<img src=img/spades/6S.jpg>";
    echo "<img src=img/spades/7S.jpg>"; echo "<img src=img/spades/8S.jpg>";
    echo "<img src=img/spades/9S.jpg>"; echo "<img src=img/spades/10S.jpg>";
    echo "<img src=img/spades/JS.jpg>"; echo "<img src=img/spades/QS.jpg>";
    echo "<img src=img/spades/KS.jpg><br>"; 

    echo "<img src=img/clubs/AC.jpg>"; echo "<img src=img/clubs/2C.jpg>";
    echo "<img src=img/clubs/3C.jpg>"; echo "<img src=img/clubs/4C.jpg>";
    echo "<img src=img/clubs/5C.jpg>"; echo "<img src=img/clubs/6C.jpg>";
    echo "<img src=img/clubs/7C.jpg>"; echo "<img src=img/clubs/8C.jpg>";
    echo "<img src=img/clubs/9C.jpg>"; echo "<img src=img/clubs/10C.jpg>";
    echo "<img src=img/clubs/JC.jpg>"; echo "<img src=img/clubs/QC.jpg>";
    echo "<img src=img/clubs/KC.jpg><br>";

    echo "<img src=img/hearts/AH.jpg>"; echo "<img src=img/hearts/2H.jpg>";
    echo "<img src=img/hearts/3H.jpg>"; echo "<img src=img/hearts/4H.jpg>";
    echo "<img src=img/hearts/5H.jpg>"; echo "<img src=img/hearts/6H.jpg>";
    echo "<img src=img/hearts/7H.jpg>"; echo "<img src=img/hearts/8H.jpg>";
    echo "<img src=img/hearts/9H.jpg>"; echo "<img src=img/hearts/10H.jpg>";
    echo "<img src=img/hearts/JH.jpg>"; echo "<img src=img/hearts/QH.jpg>";
    echo "<img src=img/hearts/KH.jpg><br>";
    

    echo "<img src=img/diamonds/AD.jpg>"; echo "<img src=img/diamonds/2D.jpg>";
    echo "<img src=img/diamonds/3D.jpg>"; echo "<img src=img/diamonds/4D.jpg>";
    echo "<img src=img/diamonds/5D.jpg>"; echo "<img src=img/diamonds/6D.jpg>";
    echo "<img src=img/diamonds/7D.jpg>"; echo "<img src=img/diamonds/8D.jpg>";
    echo "<img src=img/diamonds/9D.jpg>"; echo "<img src=img/diamonds/10D.jpg>";
    echo "<img src=img/diamonds/JD.jpg>"; echo "<img src=img/diamonds/QD.jpg>";
    echo "<img src=img/diamonds/KD.jpg><br>";
    
}

?>
</body>
</html>