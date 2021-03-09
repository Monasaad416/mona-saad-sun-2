

<?php
// 1 - write a function getNumMatches that searches for a word in an array of words and returns the number of matches (repetitions).

// function getNumMatches($arr)
// {
//     for ( $i=0 ; $i< count($arr) ; $i++ ) {
//         $repeatedItems=0;
//         if (in_array($i,$arr))
//             {
//                 $repeatedItems +=1;
//             }
//         else{
//             $repeatedItems;
//         }
//     }
// };




// getNumMatches(['mona','mona','sarah','sarah','sarah','alaa','alaa','alaa','alaa']);


/*2- write a function getPriceWithDiscount that takes the price and returns the price after discount.
discount is 10% for prices less than 1000
and 5% for prices greater than or equal 1000*/



function getPriceWithDiscount ($price) {
    if ($price >= 1000) {
        $newPrice = $price * 0.95;
    }elseif ($price < 1000) {
        $newPrice  = $price * 0.9 ;
    };
    return $newPrice;
};

// $largePrice = getPriceWithDiscount(5000);
// echo "$largePrice <br>";
// $smallPrice = getPriceWithDiscount(300);
// echo "$smallPrice <br>";



?> 

