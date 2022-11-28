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





?>