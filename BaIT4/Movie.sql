Create Database MyMovieList
Go

Create Table MovieProfile (
MovieID INT Primary Key,
Name Varchar(30) Not Null Default 'No name yet',
Synopsis text Not Null Default 'No description yet',
Rating Varchar(10) Not Null Default 'No rating yet',
Length Int Not Null Default 0,
Production_Year Int Not Null Default 0
)

Insert Into MovieProfile Values
(1, 'Eye for an eye', DEFAULT, 'R', 90, 1990),
(2, 'James Bond and the magic eye', Default, 'PG-13', 120, 1995)

--a person can be both actor, staff/author/director and so on, so person or people seems fitting
Create Table People ( 
P_ID INT Primary Key,
P_Firstname Varchar(30) not null,
P_Lastname varchar(30) no null,
P_Age Int not null,
P_Information Text Not Null Default 'No info on the actor yet',
P_Carreerstart Int not null
)

Create Table Characters (
C_ID int primary key,
C_Name varchar(30) not null,
C_Type varchar(30) not null, -- main or supporting?
C_Description Text not null,
)