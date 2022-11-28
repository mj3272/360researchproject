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
}

//price-------------------------------------------

function price($price){
//starting with inexpensive

if($price=="Price=\"Inexpensive\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"=Moderate\"";
}

if($price=="Price=\"Inexpensive\"Price=\"=Moderate\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"=Moderate\" or Price=\"=Expensive\"";
}

if($price=="Price=\"Inexpensive\"Price=\"=Moderate\"Price=\"=Expensive\"")
{
    return $price="Price=\"Inexpensive\" or Price=\"=Moderate\" or Price=\"=Expensive\" or Price=\"=VeryExpensive\"";
}


//starting with moderate------------------------------------
if($price=="Price=\"=Moderate\"")
{
    return $price="Price=\"=Moderate\" or Price=\"Inexpensive\"";
}

if($price=="Price=\"=Moderate\"Price=\"Inexpensive\"")
{
    return $price="Price=\"=Moderate\" or Price=\"Inexpensive\" or Price=\"=Expensive\"";
}

if($price=="Price=\"=Moderate\"Price=\"Inexpensive\"Price=\"=Expensive\"")
{
    return $price="Price=\"=Moderate\" or Price=\"Inexpensive\" or Price=\"=Expensive\" or Price=\"=VeryExpensive\"";
}

//starting with expenisve

if($price=="Price=\"=Expensive\"")
{
    return $price="Price=\"=Expensive\" or Price=\"=Moderate\"";
}

if($price=="Price=\"=Expensive\"Price=\"=Moderate\"")
{
    return $price="Price=\"=Expensive\" or Price=\"=Moderate\" or Price=\"Inexpensive\"";
}

if($price=="Price=\"=Expensive\"Price=\"=Moderate\"Price=\"Inexpensive\"")
{
    return $price="Price=\"=Expensive\" or Price=\"=Moderate\" or Price=\"Inexpensive\" or Price=\"=VeryExpensive\"";
}

//starting with veryexpensive-------------------------

if($price=="Price=\"=VeryExpensive\"")
{
    return $price="Price=\"=VeryExpensive\" or Price=\"=Expensive\"";
}

if($price=="Price=\"=VeryExpensive\"Price=\"=Expensive\"")
{
    return $price="Price=\"=VeryExpensive\" or Price=\"=Expensive\" or Price=\"=Moderate\"";
}

if($price=="Price=\"=VeryExpensive\"Price=\"=Expensive\"Price=\"=Moderate\"")
{
    return $price="Price=\"=VeryExpensive\" or Price=\"=Expensive\" or Price=\"=Moderate\" or Price=\"Inexpensive\"";
}
}
/*
//dining--------------------------------------------------

//start with premise-------------------
if(dining=="dining=Premise")
{
    dining="dining=Premise or dining=Both";
}

if(dining=="dining=Premise or dining=Both")
{
    dining="dining=Premise or dining=Both or dining=Carryout";
}

//start with carryout

if(dining=="dining=Carryout")
{
    dining="dining=Carryout or dining=Both";
}

if(dining=="dining=Carryout or dining=Both")
{
    dining="dining=Carryout or dining=Both or dining=Premise";
}

//start with both

if(dining=="dining=Both")
{
    dining="dining=Both or dining=Carryout";
}

if(dining=="dining=Both or dining=Carryout")
{
    dining="dining=Both or dining=Carryout or dining=Premise";
}

//location----------------------------------------------


*/


?>