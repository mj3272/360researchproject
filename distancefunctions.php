<?php

//rating

function rating($rating){
//starting with * ----------------------------------------
if(rating=="rating=\"*\"")
{
    rating="rating=\"*\" or rating=\"**\"";
}

if(rating=="rating=\"*\"rating=\"**\"")
{
    rating="rating=\"*\" or rating=\"**\" or rating=\"***\"";
}

if(rating=="rating=\"*\"rating=\"**\"rating=\"***\"")
{
    rating="rating=\"*\" or rating=\"**\" or rating=\"***\" or rating=\"****\"";
}

if(rating=="rating=\"*\"rating=\"**\"rating=\"***\"rating=\"****\"")
{
    rating="rating=\"*\" or rating=\"**\" or rating=\"***\" or rating=\"****\" or rating=\"*****\"";
}

//starting with **---------------------------------------------------

if(rating=="rating=\"**\"")
{
    rating="rating=\"**\" or rating=\"***\"";
}

if(rating=="rating=\"**\"rating=\"***\"")
{
    rating="rating=\"**\" or rating=\"***\" or rating=\"****\"";
}

if(rating=="rating=\"**\"rating=\"***\"rating=\"****\"")
{
    rating="rating=\"**\" or rating=\"***\" or rating=\"****\" or rating=\"*****\"";
}

if(rating=="rating=\"**\"rating=\"***\"rating=\"****\"rating=\"*****\"")
{
    rating="rating=\"**\" or rating=\"***\" or rating=\"****\" or rating=\"*****\" or rating=\"*\"";
}

//starting with *** ----------------------------------------

if(rating=="rating=\"***\"")
{
    rating="rating=\"***\" or rating=\"****\"";
}

if(rating=="rating=\"***\"rating=\"****\"")
{
    rating="rating=\"***\" or rating=\"****\" or rating=\"*****\"";
}

if(rating=="rating=\"***\"rating=\"****\"rating=\"*****\"")
{
    rating="rating=\"***\" or rating=\"****\" or rating=\"*****\" or rating=\"**\"";
}

if(rating=="rating=\"***\"rating=\"****\"rating=\"*****\"rating=\"**\"")
{
    rating="rating=\"***\" or rating=\"****\" or rating=\"*****\" or rating=\"**\" or rating=\"*\"";
}

//starting with **** ------------------------------------

if(rating=="rating=\"****\"")
{
    rating="rating=\"****\" or rating=\"*****\"";
}

if(rating=="rating=\"****\"rating=\"*****\"")
{
    rating="rating=\"****\" or rating=\"*****\" or rating=\"***\"";
}

if(rating=="rating=\"****\"rating=\"*****\"rating=\"***\"")
{
    rating="rating=\"****\" or rating=\"*****\" or rating=\"***\" or rating=\"**\"";
}

if(rating=="rating=\"****\"rating=\"*****\"rating=\"***\"rating=\"**\"")
{
    rating="rating=\"****\" or rating=\"*****\" or rating=\"***\" or rating=\"**\" or rating=\"*\"";
}
}
/*
//price-------------------------------------------

//starting with inexpensive

if(price=="price=Inexpensive")
{
    price="price=Inexpensive or price=Moderate";
}

if(price=="price=Inexpensive or price=Moderate")
{
    price="price=Inexpensive or price=Moderate or price=Expensive";
}

if(price=="price=Inexpensive or price=Moderate or price=Expensive")
{
    price="price=Inexpensive or price=Moderate or price=Expensive or price=VeryExpensive";
}


//starting with moderate------------------------------------
if(price=="price=Moderate")
{
    price="price=Moderate or price=Inexpensive";
}

if(price=="price=Moderate or price=Inexpensive")
{
    price="price=Moderate or price=Inexpensive or price=Expensive";
}

if(price=="price=Moderate or price=Inexpensive or price=Expensive")
{
    price="price=Moderate or price=Inexpensive or price=Expensive or Price=VeryExpensive";
}

//starting with expenisve

if(price=="price=Expensive")
{
    price="price=Expensive or price=Moderate";
}

if(price=="price=Expensive or price=Moderate")
{
    price="price=Expensive or price=Moderate or price=Inexpensive";
}

if(price=="price=Expensive or price=Moderate or price=Inexpensive")
{
    price="price=Expensive or price=Moderate or price=Inexpensive or price=VeryExpensive";
}

//starting with veryexpensive-------------------------

if(price=="price=VeryExpensive")
{
    price="price=VeryExpensive or price=Expensive";
}

if(price=="price=VeryExpensive or price=Expensive")
{
    price="price=VeryExpensive or price=Expensive or price=Moderate";
}

if(price=="price=VeryExpensive or price=Expensive or price=Moderate")
{
    price="price=VeryExpensive or price=Expensive or price=Moderate or price=Inexpensive";
}

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