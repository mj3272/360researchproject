<?php
enum QueryWhere
{
    const LocationMoscow = "Location = \"Moscow\"";
    const LocationPullman = "Location = \"Pullman\"";
    const LocationArlington = "Location = \"Arlington\"";
    const LocationSpokane = "Location = \"Spokane\"";
    
    const CuisineVietnamese = "Cuisine = \"Vietnamese\"";
    const CuisineKorean = "Cuisine = \"Korean\"";
    const CuisinePakistani = "Cuisine = \"Pakistani\"";
    const CuisineTibetan = "Cuisine = \"Tibetan\"";

    const Rating1 = "Rating = \"*\"";
    const Rating2 = "Rating = \"**\"";
    const Rating3 = "Rating = \"***\"";
    const Rating4 = "Rating = \"****\"";
    const Rating5 = "Rating = \"*****\"";

    const PriceInexpensive = "Price = \"Inexpensive\"";
    const PriceModerate = "Price = \"Moderate\"";
    const PriceExpensive = "Price = \"Expensive\"";
    const PriceVeryExpensive = "Price = \"VeryExpensive\"";


    const DiningCarryout = "Dining = \"Carryout\"";
    const DiningPremise = "Dining = \"Premise\"";
    const DiningBoth = "Dining = \"Both\"";
    
}
?>