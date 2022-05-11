<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/*
Strategy
Consider the following simple feature called couponGenerator which generates different coupons for different types of cars.
 For those who are interested in buying a BMW offers a different coupon than those who are interested in buying a Mercedes.

The coupon takes into account the following factors to weight the discount rate:

We may want to offer a discount during a recession when buying cars. In our code this attribute is called isHighSeason.
We may wish to offer a discount when the stock of cars for sale is too large. In our code this attribute is called bigStock.
function cupounGenerator ($ car) {

       $ discount = 0;
       $ isHighSeason = false;
       $ bigStock = true;

       if ($ car == "bmw") {
           if (! $ isHighSeason) {$ discount + = 5;}
          if ($ bigStock) {$ discount + = 7;}
       } else if ($ car == "mercedes") {
          if (! $ isHighSeason) {$ discount + = 4;}
          if ($ bigStock) {$ discount + = 10;}
       
       }
       return $ cupoun = "Get {$ discount}% off the price of your new car.";
}
echo cupounGenerator ("bmw");
Based on the above considerations we need to use the strategy pattern so that given the brand of a car,
 our program calculates the discount.

Be sure to note the following:

You need to create a feature called addSeasonDiscount that adds a discount when sales go down.
You need to create a feature called addStockDiscount that adds a discount when the inventory is too large.
Since the coupons vary according to each type of car, it would be ideal to convene these functions in separate classes. 
So it will be necessary to implement the bmwCuoponGenerator and mercedesCuoponGenerator classes.

In fact, as the previous methods for each coupon have the same name; it is necessary to create the carCouponGenerator 
interface that forces all the classes that implement it to use them, including the ones we just wrote and the ones we 
would like to add in the future.

Print on screen the result of the coupon for the two car brands (BMW and Mercedes).


*/





?>

</body>
</html>