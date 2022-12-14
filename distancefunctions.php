<?php

//rating

function rating($rating){
//starting with * ----------------------------------------
if($rating== "Rating=\"*\"")
{
   return $rating = "(Rating=\"*\" or Rating=\"**\")";
}

if($rating=="(Rating=\"*\"Rating=\"**\")")
{
   return $rating = "(Rating=\"*\" or Rating=\"**\" or Rating=\"***\")";
}

if($rating=="(Rating=\"*\"Rating=\"**\"Rating=\"***\")")
{
   return $rating="(Rating=\"*\" or Rating=\"**\" or Rating=\"***\" or Rating=\"****\")";
}

if($rating=="(Rating=\"*\"Rating=\"**\"Rating=\"***\"Rating=\"****\")")
{
   return $rating="(Rating=\"*\" or Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\")";
}

if($rating=="(Rating=\"*\"Rating=\"**\"Rating=\"***\"Rating=\"****\"Rating=\"*****\")")
{
   return $rating="(Rating=\"*\" or Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\")";
}

//starting with **---------------------------------------------------

if($rating=="Rating=\"**\"")
{
   return $rating="(Rating=\"**\" or Rating=\"***\")";
}

if($rating=="(Rating=\"**\"Rating=\"***\")")
{
   return $rating="(Rating=\"**\" or Rating=\"***\" or Rating=\"****\")";
}

if($rating=="(Rating=\"**\"Rating=\"***\"Rating=\"****\")")
{
   return $rating="(Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\")";
}

if($rating=="(Rating=\"**\"Rating=\"***\"Rating=\"****\"Rating=\"*****\")")
{
   return $rating="(Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"*\")";
}

if($rating=="(Rating=\"**\"Rating=\"***\"Rating=\"****\"Rating=\"*****\"Rating=\"*\")")
{
   return $rating="(Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"*\")";
}

//starting with *** ----------------------------------------

if($rating=="Rating=\"***\"")
{
   return $rating="(Rating=\"***\" or Rating=\"****\")";
}

if($rating=="(Rating=\"***\"Rating=\"****\")")
{
   return $rating="(Rating=\"***\" or Rating=\"****\" or Rating=\"*****\")";
}

if($rating=="(Rating=\"***\"Rating=\"****\"Rating=\"*****\")")
{
   return $rating="(Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"**\")";
}

if($rating=="(Rating=\"***\"Rating=\"****\"Rating=\"*****\"Rating=\"**\")")
{
   return $rating="(Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"**\" or Rating=\"*\")";
}

if($rating=="(Rating=\"***\"Rating=\"****\"Rating=\"*****\"Rating=\"**\"Rating=\"*\")")
{
   return $rating="(Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"**\" or Rating=\"*\")";
}

//starting with **** ------------------------------------

if($rating=="Rating=\"****\"")
{
   return $rating="(Rating=\"****\" or Rating=\"*****\")";
}

if($rating=="(Rating=\"****\"Rating=\"*****\")")
{
   return $rating="(Rating=\"****\" or Rating=\"*****\" or Rating=\"***\")";
}

if($rating=="(Rating=\"****\"Rating=\"*****\"Rating=\"***\")")
{
   return $rating="(Rating=\"****\" or Rating=\"*****\" or Rating=\"***\" or Rating=\"**\")";
}

if($rating=="(Rating=\"****\"Rating=\"*****\"Rating=\"***\"Rating=\"**\")")
{
   return $rating="(Rating=\"****\" or Rating=\"*****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\")";
}

if($rating=="(Rating=\"****\"Rating=\"*****\"Rating=\"***\"Rating=\"**\"Rating=\"*\")")
{
   return $rating="(Rating=\"****\" or Rating=\"*****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\")";
}

//starting with *****----------------------------------

if($rating=="Rating=\"*****\"")
{
   return $rating="(Rating=\"*****\" or Rating=\"****\")";
}

if($rating=="(Rating=\"*****\"Rating=\"****\")")
{
   return $rating="(Rating=\"*****\" or Rating=\"****\" or Rating=\"***\")";
}

if($rating=="(Rating=\"*****\"Rating=\"****\"Rating=\"***\")")
{
   return $rating="(Rating=\"*****\" or Rating=\"****\" or Rating=\"***\" or Rating=\"**\")";
}

if($rating=="(Rating=\"*****\"Rating=\"****\"Rating=\"***\"Rating=\"**\")")
{
   return $rating="(Rating=\"*****\" or Rating=\"****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\")";
}

if($rating=="(Rating=\"*****\"Rating=\"****\"Rating=\"***\"Rating=\"**\"Rating=\"*\")")
{
   return $rating="(Rating=\"*****\" or Rating=\"****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\")";
}

}

//price-------------------------------------------

function price($price){
//starting with inexpensive

if($price=="Price=\"Inexpensive\"")
{
    return $price="(Price=\"Inexpensive\" or Price=\"Moderate\")";
}

if($price=="(Price=\"Inexpensive\"Price=\"Moderate\")")
{
    return $price="(Price=\"Inexpensive\" or Price=\"Moderate\" or Price=\"Expensive\")";
}

if($price=="(Price=\"Inexpensive\"Price=\"Moderate\"Price=\"Expensive\")")
{
    return $price="(Price=\"Inexpensive\" or Price=\"Moderate\" or Price=\"Expensive\" or Price=\"VeryExpensive\")";
}

if($price=="(Price=\"Inexpensive\"Price=\"Moderate\"Price=\"Expensive\"Price=\"VeryExpensive\")")
{
    return $price="(Price=\"Inexpensive\" or Price=\"Moderate\" or Price=\"Expensive\" or Price=\"VeryExpensive\")";
}

//starting with moderate------------------------------------
if($price=="Price=\"Moderate\"")
{
    return $price="(Price=\"Moderate\" or Price=\"Inexpensive\")";
}

if($price=="(Price=\"Moderate\"Price=\"Inexpensive\")")
{
    return $price="(Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"Expensive\")";
}

if($price=="(Price=\"Moderate\"Price=\"Inexpensive\"Price=\"Expensive\")")
{
    return $price="(Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"Expensive\" or Price=\"VeryExpensive\")";
}

if($price=="(Price=\"Moderate\"Price=\"Inexpensive\"Price=\"Expensive\"Price=\"VeryExpensive\")")
{
    return $price="(Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"Expensive\" or Price=\"VeryExpensive\")";
}

//starting with expenisve

if($price=="Price=\"Expensive\"")
{
    return $price="(Price=\"Expensive\" or Price=\"Moderate\")";
}

if($price=="(Price=\"Expensive\"Price=\"Moderate\")")
{
    return $price="(Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\")";
}

if($price=="(Price=\"Expensive\"Price=\"Moderate\"Price=\"Inexpensive\")")
{
    return $price="(Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"VeryExpensive\")";
}

if($price=="(Price=\"Expensive\"Price=\"Moderate\"Price=\"Inexpensive\"Price=\"VeryExpensive\")")
{
    return $price="(Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"VeryExpensive\")";
}

//starting with veryexpensive-------------------------

if($price=="Price=\"VeryExpensive\"")
{
    return $price="(Price=\"VeryExpensive\" or Price=\"Expensive\")";
}

if($price=="(Price=\"VeryExpensive\"Price=\"Expensive\")")
{
    return $price="(Price=\"VeryExpensive\" or Price=\"Expensive\" or Price=\"Moderate\")";
}

if($price=="(Price=\"VeryExpensive\"Price=\"Expensive\"Price=\"Moderate\")")
{
    return $price="(Price=\"VeryExpensive\" or Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\")";
}

if($price=="(Price=\"VeryExpensive\"Price=\"Expensive\"Price=\"Moderate\"Price=\"Inexpensive\")")
{
    return $price="(Price=\"VeryExpensive\" or Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\")";
}

}

//dining--------------------------------------------------

function dining($dining){
//start with Premise-------------------
if($dining=="Dining=\"Premise\"")
{
    return $dining="(Dining=\"Premise\" or Dining=\"Both\")";
}

if($dining=="(Dining=\"Premise\"Dining=\"Both\")")
{
    return $dining="(Dining=\"Premise\" or Dining=\"Both\" or Dining=\"Carryout\")";
}

if($dining=="(Dining=\"Premise\"Dining=\"Both\"Dining=\"Carryout\")")
{
    return $dining="(Dining=\"Premise\" or Dining=\"Both\" or Dining=\"Carryout\")";
}

//start with Carryout

if($dining=="Dining=\"Carryout\"")
{
    return $dining="(Dining=\"Carryout\" or Dining=\"Both\")";
}

if($dining=="(Dining=\"Carryout\"Dining=\"Both\")")
{
    return $dining="(Dining=\"Carryout\" or Dining=\"Both\" or Dining=\"Premise\")";
}

if($dining=="(Dining=\"Carryout\"Dining=\"Both\"Dining=\"Premise\")")
{
    return $dining="(Dining=\"Carryout\" or Dining=\"Both\" or Dining=\"Premise\")";
}

//start with Both

if($dining=="Dining=\"Both\"")
{
    return $dining="(Dining=\"Both\" or Dining=\"Carryout\")";
}

if($dining=="(Dining=\"Both\"Dining=\"Carryout\")")
{
    return $dining="(Dining=\"Both\" or Dining=\"Carryout\" or Dining=\"Premise\")";
}

if($dining=="(Dining=\"Both\"Dining=\"Carryout\"Dining=\"Premise\")")
{
    return $dining="(Dining=\"Both\" or Dining=\"Carryout\" or Dining=\"Premise\")";
}
}
//location----------------------------------------------

function location($location){
//start with Arlington

if($location=="Location=\"Arlington\"")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\"Location=\"Pullman\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\"Location=\"Pullman\"Location=\"Moscow\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\"Location=\"Pullman\"Location=\"Moscow\"Location=\"PostFalls\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\"Location=\"Pullman\"Location=\"Moscow\"Location=\"PostFalls\"Location=\"Hayden\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\"Location=\"Pullman\"Location=\"Moscow\"Location=\"PostFalls\"Location=\"Hayden\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"Arlington\"Location=\"Spokane\"Location=\"Pullman\"Location=\"Moscow\"Location=\"PostFalls\"Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"Lewiston\")")
{
    return $location="(Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"Lewiston\")";
}

//start with CDA

if($location=="Location=\"CoeurdAlene\"")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Spokane\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

if($location=="(Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Arlington\")")
{
    return $location="(Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

//start with Hayden

if($location=="Location=\"Hayden\"")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"PostFalls\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"PostFalls\"Location=\"Spokane\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

if($location=="(Location=\"Hayden\"Location=\"CoeurdAlene\"Location=\"PostFalls\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Arlington\")")
{
    return $location="(Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

//start with PostFalls

if($location=="Location=\"PostFalls\"")
{
    return $location="(Location=\"Post Falls\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Spokane\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Spokane\"Location=\"Moscow\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

if($location=="(Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Spokane\"Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Arlington\")")
{
    return $location="(Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

//start with Lewiston

if($location=="Location=\"Lewiston\"")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\"Location=\"Moscow\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Spokane\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Spokane\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\")";
}

if($location=="(Location=\"Lewiston\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Arlington\")")
{
    return $location="(Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\")";
}


//start with Moscow

if($location=="Location=\"Moscow\"")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Spokane\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Spokane\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\")";
}

if($location=="(Location=\"Moscow\"Location=\"Pullman\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Arlington\")")
{
    return $location="(Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\")";
}


//start with Pullman

if($location=="Location=\"Pullman\"")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Spokane\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\"Location=\"Spokane\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\")";
}

if($location=="(Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\"Location=\"Spokane\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"PostFalls\"Location=\"Arlington\")")
{
    return $location="(Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\")";
}


//start with Spokane

if($location=="Location=\"Spokane\"")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\"Location=\"CoeurdAlene\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Pullman\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Pullman\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Pullman\" or Location=\"Moscow\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Pullman\"Location=\"Moscow\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

if($location=="(Location=\"Spokane\"Location=\"PostFalls\"Location=\"CoeurdAlene\"Location=\"Hayden\"Location=\"Pullman\"Location=\"Moscow\"Location=\"Lewiston\"Location=\"Arlington\")")
{
    return $location="(Location=\"Spokane\" or Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Lewiston\" or Location=\"Arlington\")";
}

}


//YelpReviews----------------------------------------------
// >= <= > < =

function yelpReviews($yelpReviews){

    if(str_contains($yelpReviews, ">=")){
        $yelpArr = explode(">=", $yelpReviews);
        $num = $yelpArr[1];
        $num = $num -10;
        if($num < 0){
            $num = 0;
        }
        
        $yelpReviews = "YelpReviews>=" . $num;

        
        return $yelpReviews;

    }

    if(str_contains($yelpReviews, "<=")){
        $yelpArr = explode("<=", $yelpReviews);
        $num = $yelpArr[1];
        $num = $num +10;
        if($num > 100){
            $num = 100;
        }
        
        $yelpReviews = "YelpReviews<=" . $num;

       
        return $yelpReviews;

    }

    if(str_contains($yelpReviews, ">")){
        $yelpArr = explode(">", $yelpReviews);
        $num = $yelpArr[1];
        $num = $num -10;
        if($num < 0){
            $num = 0;
        }
        
        $yelpReviews = "YelpReviews>" . $num;

        
        return $yelpReviews;

    }

    if(str_contains($yelpReviews, "<")){
        $yelpArr = explode("<", $yelpReviews);
        $num = $yelpArr[1];
        $num = $num +10;
        if($num > 100){
            $num = 100;
        }
        
        $yelpReviews = "YelpReviews<" . $num;

        
        return $yelpReviews;

    }

    if(str_contains($yelpReviews, "=")){
        $yelpArr = explode("=", $yelpReviews);
        $num = $yelpArr[1];

        
        if($num >= 50){
            $num = $num -10;
            $yelpReviews = "YelpReviews>=" . $num;
        }
        else {
            $num = $num +10;
            $yelpReviews = "YelpReviews<=" . $num;
        }
        
        

        
        return $yelpReviews;

    }


}

//Cuisine----------------------------------------------
// Vietnamese Korean Chinese | Pakistan Tibetan  | Italian French | American BBQ  Mexican

function cuisine($cuisine){
    $cuisine = explode("\"", $cuisine);
    $cuisine = implode(" ", $cuisine);
    $cuisine = explode("Cuisine=", $cuisine);
    $cuisine = implode($cuisine);
    $cuisine = explode("(", $cuisine);
    $cuisine = implode($cuisine);
    $cuisine = explode(")", $cuisine);
    $cuisine = implode($cuisine);
    

    function Add($cuisine, $add){
        $cuisineExplode = explode(" ", $cuisine);
        
        $cuisineArr = [];
        foreach($cuisineExplode as $token){
            if($token != ""){
                array_push($cuisineArr, $token);
            }
            
        }
        
        //print_r($cuisineArr);

        $w = "(";

        foreach($cuisineArr as $token){
            if(($token == $cuisineArr[0] ) && $token!= ""){
                $w = $w . "Cuisine=\"" . $token . "\"";
            }
            elseif($token!= ""){
                $w = $w . " or Cuisine=\"" . $token . "\"";
            }
            
        }

        $w = $w . " or Cuisine=\"" . $add . "\"";
        $w = $w . ")";
        return $w;
    }


        function asian($cuisine){
            if(str_contains($cuisine, "Vietnamese") && str_contains($cuisine, "Korean") && str_contains($cuisine, "Chinese")){
                return true;
            }
        }

        function east($cuisine){
            if(str_contains($cuisine, "Pakistan") && str_contains($cuisine, "Tibetan")){
            return true;
            }
         }

    function european($cuisine){
        if(str_contains($cuisine, "French") && str_contains($cuisine, "Italian")){
            return true;
        }
    }

    function northAmerican($cuisine){
        if(str_contains($cuisine, "American") && str_contains($cuisine, "BBQ") && str_contains($cuisine, "Mexican")){
            return true;
        }
    }



    
    //base asain 2 

    //Korean & Vietnamese
    if(!asian($cuisine) && str_contains($cuisine, "Vietnamese") && str_contains($cuisine, "Korean")){
        return Add($cuisine, "Chinese");
    }

    //Korean & Chinese
    if(!asian($cuisine) && str_contains($cuisine, "Chinese") && str_contains($cuisine, "Korean")){
        return Add($cuisine, "Vietnamese");
    }

    //Vietnamese & Chinese
    if(!asian($cuisine) && str_contains($cuisine, "Chinese") && str_contains($cuisine, "Vietnamese")){
        return Add($cuisine, "Korean");
    }

    //base asain 1

    //Korean
    if(!asian($cuisine) &&  str_contains($cuisine, "Korean")){
        return Add($cuisine, "Chinese");
    }

    //Chinese
    if(!asian($cuisine) &&  str_contains($cuisine, "Chinese")){
        return Add($cuisine, "Vietnamese");
    }

    //Vietnamese
    if(!asian($cuisine) &&  str_contains($cuisine, "Vietnamese")){
        return Add($cuisine, "Chinese");
    }



    //base east 1

    //Pakistan
    if(!east($cuisine) &&  str_contains($cuisine, "Pakistan")){
        return Add($cuisine, "Tibetan");
    }

    //Tibetan
    if(!east($cuisine) &&  str_contains($cuisine, "Tibetan")){
        return Add($cuisine, "Pakistan");
    }



    //base european 1

    //Italian
    if(!european($cuisine) &&  str_contains($cuisine, "Italian")){
        return Add($cuisine, "French");
    }

    //French
    if(!european($cuisine) &&  str_contains($cuisine, "French")){
        return Add($cuisine, "Italian");
    }


    //base northamerican 2

    //American BBQ
    if(!northAmerican($cuisine) &&  str_contains($cuisine, "American") &&  str_contains($cuisine, "BBQ")){
        return Add($cuisine, "Mexican");
    }

    //American Mexican
    if(!northAmerican($cuisine) &&  str_contains($cuisine, "American") &&  str_contains($cuisine, "Mexican")){
        return Add($cuisine, "BBQ");
    }

    //BBQ Mexican
    if(!northAmerican($cuisine) &&  str_contains($cuisine, "BBQ") &&  str_contains($cuisine, "Mexican")){
        return Add($cuisine, "American");
    }

    //base northamerican 1

    //American
    if(!northAmerican($cuisine) &&  str_contains($cuisine, "American") ){
        return Add($cuisine, "BBQ");
    }

    //BBQ 
    if(!northAmerican($cuisine) &&  str_contains($cuisine, "BBQ") ){
        return Add($cuisine, "American");
    }

    //Mexican
    if(!northAmerican($cuisine) &&  str_contains($cuisine, "Mexican") ){
        return Add($cuisine, "American");
    }


    //Adding east to asian
    if(asian($cuisine) &&  !east($cuisine) ){
        return Add($cuisine, "Pakistan");
    }

    //Adding asian to east
    if(!asian($cuisine) &&  east($cuisine) ){
        return Add($cuisine, "Chinese");
    }

    //Adding european to all asian
    if(asian($cuisine) &&  east($cuisine)  && !european($cuisine)){
        return Add($cuisine, "Italian");
    }

    //Adding north american to european
    if(european($cuisine) && !northAmerican($cuisine)){
        return Add($cuisine, "American");
    }

    //Adding european to north american
    if(!european($cuisine) && northAmerican($cuisine)){
        return Add($cuisine, "Italian");
    }

    //Adding start of asian to european and north american
    if(european($cuisine) && northAmerican($cuisine) && !asian($cuisine) &&  !east($cuisine)){
        return Add($cuisine, "Chinese");
    }


   return $cuisine;
    
}

    
?>