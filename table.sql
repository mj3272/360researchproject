

CREATE TABLE restaurants(
        ID INT AUTO_INCREMENT,
        Name VARCHAR(50),
        Location VARCHAR(50),
        Cuisine VARCHAR(50),
        Rating VARCHAR(5),
        Price VARCHAR(50),
        Dining VARCHAR(50),
        YelpReviews INT(100),
        PRIMARY KEY(ID)
);


INSERT INTO
        restaurants(Name, Location, Cuisine, Rating, Price, Dining, YelpReviews)
VALUES
        ('Pho Heaven', 'Moscow', 'Vietnamese', '*', 'Inexpensive', 'Carryout', 10),
        ('Hot Pot', 'Moscow', 'Korean', '****', 'VeryExpensive', 'Premise',92),
        ('Ao Dai', 'Pullman', 'Vietnamese', '*****', 'Moderate', 'Both', 8),
        ('Ravi Kabob', 'Arlington', 'Pakistani', '*****', 'Inexpensive', 'Both', 20),
        ('Little Tibet', 'Spokane', 'Tibetan', '*****', 'Expensive', 'Both', 10),
        ('Burger Time', 'Lewiston', 'American', '***', 'Moderate', 'Both', 41),
        ('Happy Nook', 'Hayden', 'French', '*', 'Inexpensive', 'Premise', 36),
        ('Pizza Planet', 'CoeurdAlene', 'American', '*****', 'Moderate', 'Both', 90),
        ('WcDonalds', 'Moscow', 'American','***', 'Inexpensive', 'Carryout', 53),
        ('Carbys', 'Pullman', 'American', '**', 'Inexpensive', 'Both', 68),
        ('Tomato Avenue', 'CoeurdAlene', 'Italian', '*****', 'Moderate', 'Both', 61),
        ('Texas Streethome', 'Lewiston', 'BBQ', '****', 'Moderate', 'Premise', 14),
        ('Freddy Fazbear Pizza', 'PostFalls', 'American', '*', 'Expenisive', 'Premise', 82),
        ('Bear Express', 'Hayden', 'Chinese', '***', 'VeryExpensive', 'Both', 75),
        ('Bluebird Cafe', 'PostFalls', 'French', '**', 'Inexpensive', 'Premise', 63),
        ('Spaghetti Bros', 'Spokane', 'Italian', '*****', 'VeryExpensive', 'Carryout', 80),
        ('Two Planets Cafe', 'Moscow', 'French', '*', 'Expensive', 'Premise', 53),
        ('Felipes Tacos', 'Spokane', 'Mexican', '***', 'Moderate', 'Carryout', 6),
        ('Jalapenos', 'Lewiston', 'Mexican', '****', 'VeryExpensive', 'Premise', 34),
        ('Noodle House', 'PostFalls', 'Korean', '*','Moderate', 'Both', 26),
        ('Jays BBQ', 'Hayden', 'BBQ', '*', 'Inexpensive', 'Premise', 73);
        