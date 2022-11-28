<?php

//rating

function rating($rating){
//starting with * ----------------------------------------
if($rating== "Rating=\"*\"")
{
   return $rating = "Rating=\"*\" or Rating=\"**\"";
}

if($rating=="Rating=\"*\"Rating=\"**\"")
{
   return $rating = "Rating=\"*\" or Rating=\"**\" or Rating=\"***\"";
}

if($rating=="Rating=\"*\"Rating=\"**\"Rating=\"***\"")
{
   return $rating="Rating=\"*\" or Rating=\"**\" or Rating=\"***\" or Rating=\"****\"";
}

if($rating=="Rating=\"*\"Rating=\"**\"Rating=\"***\"Rating=\"****\"")
{
   return $rating="Rating=\"*\" or Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\"";
}

if($rating=="Rating=\"*\"Rating=\"**\"Rating=\"***\"Rating=\"****\"Rating=\"*****\"")
{
   return $rating="Rating=\"*\" or Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\"";
}

//starting with **---------------------------------------------------

if($rating=="Rating=\"**\"")
{
   return $rating="Rating=\"**\" or Rating=\"***\"";
}

if($rating=="Rating=\"**\"Rating=\"***\"")
{
   return $rating="Rating=\"**\" or Rating=\"***\" or Rating=\"****\"";
}

if($rating=="Rating=\"**\"Rating=\"***\"Rating=\"****\"")
{
   return $rating="Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\"";
}

if($rating=="Rating=\"**\"Rating=\"***\"Rating=\"****\"Rating=\"*****\"")
{
   return $rating="Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"*\"";
}

if($rating=="Rating=\"**\"Rating=\"***\"Rating=\"****\"Rating=\"*****\"Rating=\"*\"")
{
   return $rating="Rating=\"**\" or Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"*\"";
}

//starting with *** ----------------------------------------

if($rating=="Rating=\"***\"")
{
   return $rating="Rating=\"***\" or Rating=\"****\"";
}

if($rating=="Rating=\"***\"Rating=\"****\"")
{
   return $rating="Rating=\"***\" or Rating=\"****\" or Rating=\"*****\"";
}

if($rating=="Rating=\"***\"Rating=\"****\"Rating=\"*****\"")
{
   return $rating="Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"**\"";
}

if($rating=="Rating=\"***\"Rating=\"****\"Rating=\"*****\"Rating=\"**\"")
{
   return $rating="Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"**\" or Rating=\"*\"";
}

if($rating=="Rating=\"***\"Rating=\"****\"Rating=\"*****\"Rating=\"**\"Rating=\"*\"")
{
   return $rating="Rating=\"***\" or Rating=\"****\" or Rating=\"*****\" or Rating=\"**\" or Rating=\"*\"";
}

//starting with **** ------------------------------------

if($rating=="Rating=\"****\"")
{
   return $rating="Rating=\"****\" or Rating=\"*****\"";
}

if($rating=="Rating=\"****\"Rating=\"*****\"")
{
   return $rating="Rating=\"****\" or Rating=\"*****\" or Rating=\"***\"";
}

if($rating=="Rating=\"****\"Rating=\"*****\"Rating=\"***\"")
{
   return $rating="Rating=\"****\" or Rating=\"*****\" or Rating=\"***\" or Rating=\"**\"";
}

if($rating=="Rating=\"****\"Rating=\"*****\"Rating=\"***\"Rating=\"**\"")
{
   return $rating="Rating=\"****\" or Rating=\"*****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\"";
}

if($rating=="Rating=\"****\"Rating=\"*****\"Rating=\"***\"Rating=\"**\"Rating=\"*\"")
{
   return $rating="Rating=\"****\" or Rating=\"*****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\"";
}

//starting with *****----------------------------------

if($rating=="Rating=\"*****\"")
{
   return $rating="Rating=\"*****\" or Rating=\"****\"";
}

if($rating=="Rating=\"*****\"Rating=\"****\"")
{
   return $rating="Rating=\"*****\" or Rating=\"****\" or Rating=\"***\"";
}

if($rating=="Rating=\"*****\"Rating=\"****\"Rating=\"***\"")
{
   return $rating="Rating=\"*****\" or Rating=\"****\" or Rating=\"***\" or Rating=\"**\"";
}

if($rating=="Rating=\"*****\"Rating=\"****\"Rating=\"***\"Rating=\"**\"")
{
   return $rating="Rating=\"*****\" or Rating=\"****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\"";
}

if($rating=="Rating=\"*****\"Rating=\"****\"Rating=\"***\"Rating=\"**\"Rating=\"*\"")
{
   return $rating="Rating=\"*****\" or Rating=\"****\" or Rating=\"***\" or Rating=\"**\" or Rating=\"*\"";
}

}

//price-------------------------------------------

function price($price){
//starting with inexpensive

if($price=="Price=\"Inexpensive\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"Moderate\"";
}

if($price=="Price=\"Inexpensive\"Price=\"Moderate\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"Moderate\" or Price=\"Expensive\"";
}

if($price=="Price=\"Inexpensive\"Price=\"Moderate\"Price=\"Expensive\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"Moderate\" or Price=\"Expensive\" or Price=\"VeryExpensive\"";
}

if($price=="Price=\"Inexpensive\"Price=\"Moderate\"Price=\"Expensive\"Price=\"VeryExpensive\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"Moderate\" or Price=\"Expensive\" or Price=\"VeryExpensive\"";
}

//starting with moderate------------------------------------
if($price=="Price=\"Moderate\"")
{
    return $price="Price=\"Moderate\" or Price=\"Inexpensive\"";
}

if($price=="Price=\"Moderate\"Price=\"Inexpensive\"")
{
    return $price="Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"Expensive\"";
}

if($price=="Price=\"Moderate\"Price=\"Inexpensive\"Price=\"Expensive\"")
{
    return $price="Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"Expensive\" or Price=\"VeryExpensive\"";
}

if($price=="Price=\"Moderate\"Price=\"Inexpensive\"Price=\"Expensive\"Price=\"VeryExpensive\"")
{
    return $price="Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"Expensive\" or Price=\"VeryExpensive\"";
}

//starting with expenisve

if($price=="Price=\"Expensive\"")
{
    return $price="Price=\"Expensive\" or Price=\"Moderate\"";
}

if($price=="Price=\"Expensive\"Price=\"Moderate\"")
{
    return $price="Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\"";
}

if($price=="Price=\"Expensive\"Price=\"Moderate\"Price=\"Inexpensive\"")
{
    return $price="Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"VeryExpensive\"";
}

if($price=="Price=\"Expensive\"Price=\"Moderate\"Price=\"Inexpensive\"Price=\"VeryExpensive\"")
{
    return $price="Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\" or Price=\"VeryExpensive\"";
}

//starting with veryexpensive-------------------------

if($price=="Price=\"VeryExpensive\"")
{
    return $price="Price=\"VeryExpensive\" or Price=\"Expensive\"";
}

if($price=="Price=\"VeryExpensive\"Price=\"Expensive\"")
{
    return $price="Price=\"VeryExpensive\" or Price=\"Expensive\" or Price=\"Moderate\"";
}

if($price=="Price=\"VeryExpensive\"Price=\"Expensive\"Price=\"Moderate\"")
{
    return $price="Price=\"VeryExpensive\" or Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\"";
}

if($price=="Price=\"VeryExpensive\"Price=\"Expensive\"Price=\"Moderate\"Price=\"Inexpensive\"")
{
    return $price="Price=\"VeryExpensive\" or Price=\"Expensive\" or Price=\"Moderate\" or Price=\"Inexpensive\"";
}

}

//dining--------------------------------------------------

function dining($dining){
//start with Premise-------------------
if($dining=="Dining=\"Premise\"")
{
    return $dining="Dining=\"Premise\" or Dining=\"Both\"";
}

if($dining=="Dining=\"Premise\"Dining=\"Both\"")
{
    return $dining="Dining=\"Premise\" or Dining=\"Both\" or Dining=\"Carryout\"";
}

if($dining=="Dining=\"Premise\"Dining=\"Both\"Dining=\"Carryout\"")
{
    return $dining="Dining=\"Premise\" or Dining=\"Both\" or Dining=\"Carryout\"";
}

//start with Carryout

if($dining=="Dining=\"Carryout\"")
{
    return $dining="Dining=\"Carryout\" or Dining=\"Both\"";
}

if($dining=="Dining=\"Carryout\"Dining=\"Both\"")
{
    return $dining="Dining=\"Carryout\" or Dining=\"Both\" or Dining=\"Premise\"";
}

if($dining=="Dining=\"Carryout\"Dining=\"Both\"Dining=\"Premise\"")
{
    return $dining="Dining=\"Carryout\" or Dining=\"Both\" or Dining=\"Premise\"";
}

//start with Both

if($dining=="Dining=\"Both\"")
{
    return $dining="Dining=\"Both\" or Dining=\"Carryout\"";
}

if($dining=="Dining=\"Both\"Dining=\"Carryout\"")
{
    return $dining="Dining=\"Both\" or Dining=\"Carryout\" or Dining=\"Premise\"";
}

if($dining=="Dining=\"Both\"Dining=\"Carryout\"Dining=\"Premise\"")
{
    return $dining="Dining=\"Both\" or Dining=\"Carryout\" or Dining=\"Premise\"";
}
}
//location----------------------------------------------

function location($location){
//start with Arlington

if($location=="Location=\"Arlington\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"Lewiston\"";
}

if($location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"Lewiston\"")
{
    return $location=="Location=\"Arlington\" or Location=\"Spokane\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"PostFalls\" or Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"Lewiston\"";
}

//start with CDA

if($location=="Location=\"CoeurdAlene\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"";
}

if($location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"")
{
    return $location=="Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"";
}

//start with Hayden

if($location=="Location=\"Hayden\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"";
}

if($location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"")
{
    return $location=="Location=\"Hayden\" or Location=\"CoeurdAlene\" or Location=\"PostFalls\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"";
}

//start with PostFalls

if($location=="Location=\"PostFalls\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"";
}

if($location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"")
{
    return $location=="Location=\"PostFalls\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"Spokane\" or Location=\"Moscow\" or Location=\"Pullman\" or Location=\"Lewiston\" or Location=\"Arlington\"";
}

//start with Lewiston

if($location=="Location=\"Lewiston\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\"";
}

if($location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\"")
{
    return $location=="Location=\"Lewiston\" or Location=\"Pullman\" or Location=\"Moscow\" or Location=\"Spokane\" or Location=\"CoeurdAlene\" or Location=\"Hayden\" or Location=\"PostFalls\" or Location=\"Arlington\"";
}


//start with Moscow



//start with Pullman



//start with Spokane

}

?>