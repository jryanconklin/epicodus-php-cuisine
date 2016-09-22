
#Command Line for Database Construction

CREATE DATABASE restaurant_guide;
USE restaurant_guide;

CREATE TABLE cuisines (
    id serial PRIMARY KEY,
    style VARCHAR(50)
    );

CREATE TABLE restaurants (
    id serial PRIMARY KEY,
    name VARCHAR(50),
    description VARCHAR(100),
    cuisine_id INT
    );

CREATE TABLE reviews (
    id serial PRIMARY KEY,
    review TEXT(500),
    score INT(5),
    restaurant_id Int
    );
