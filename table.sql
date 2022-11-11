
CREATE TABLE querydb(
        ID INT AUTO_INCREMENT,
        Name VARCHAR(500),
        Disjunctive boolean,
        PRIMARY KEY(ID)
);

CREATE TABLE restaurants(
        ID INT AUTO_INCREMENT,
        Name VARCHAR(50),
        Location VARCHAR(50),
        Cuisine VARCHAR(50),
        Rating VARCHAR(5),
        Price VARCHAR(50),
        Dining VARCHAR(50),
        PRIMARY KEY(ID)
);


INSERT INTO
        restaurants(Name, Location, Cuisine, Rating, Price, Dining)
VALUES
        ('Pho Heaven', 'Moscow', 'Vietnamese', '*', 'Inexpensive', 'Carryout'),
        ('Hot Pot', 'Moscow', 'Korean', '****', 'VeryExpensive', 'Premise'),
        ('Ao Dai', 'Pullman', 'Vietnamese', '*****', 'Moderate', 'Both'),
        ('Ravi Kabob', 'Arlington', 'Pakistani', '*****', 'Inexpensive', 'Both'),
        ('Little Tibet', 'Spokane', 'Tibetan', '*****', 'Expensive', 'Both'),
        ('Burger Time', 'Lewiston', 'American', '***', 'Moderate', 'Both'),
        ('Happy Nook', 'Hayden', 'French', '*', 'Inexpensive', 'Premise'),
        ('Pizza Planet', 'CoeurdAlene', 'American', '*****', 'Moderate', 'Both'),
        ('WcDonalds', 'Moscow', 'American','***', 'Inexpensive', 'Carryout'),
        ('Carbys', 'Pullman', 'American', '**', 'Inexpensive', 'Both'),
        ('Tomato Avenue', 'CoeurdAlene', 'Italian', '*****', 'Moderate', 'Both'),
        ('Texas Streethome', 'Lewiston', 'BBQ', '****', 'Moderate', 'Premise'),
        ('Freddy Fazbear Pizza', 'PostFalls', 'American', '*', 'Expenisive', 'Premise'),
        ('Bear Express', 'Hayden', 'Chinese', '***', 'VeryExpensive', 'Both'),
        ('Bluebird Cafe', 'PostFalls', 'French', '**', 'Inexpensive', 'Premise'),
        ('Spaghetti Bros', 'Spokane', 'Italian', '*****', 'VeryExpensive', 'Carryout'),
        ('Two Planets Cafe', 'Mosocw', 'French', '*', 'Expensive', 'Premise'),
        ('Felipes Tacos', 'Spokane', 'Mexican', '***', 'Moderate', 'Carryout'),
        ('Jalapenos', 'Lewiston', 'Mexican', '****', 'VeryExpensive', 'Premise'),
        ('Noodle House', 'PostFalls', 'Korean', '*','Moderate', 'Both'),
        ('Jays BBQ', 'Hayden', 'BBQ', '*', 'Inexpensive', 'Premise');
        