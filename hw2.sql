USE hw2;

CREATE TABLE users(
    id int primary key auto_increment,
    username varchar(16) not null unique,
    password varchar(255) not null,
    email varchar(255) not null unique,
    name varchar(255) not null,
    surname varchar(255) not null,
    created_at timestamp not null default 0,
    updated_at timestamp not null default 0
);

CREATE TABLE favorites (
    id int primary key auto_increment,
    name varchar(255) not null,
    user int not null,
    vision varchar(255),
    nation varchar(255),
    birthday varchar(255),
    affiliation varchar(255),
    description varchar(500),
    weapon varchar(255),
    created_at timestamp not null default 0,
    updated_at timestamp not null default 0,
    foreign key(user) references users(id)
);

CREATE TABLE profiles (
id int primary key auto_increment,
user int not null,
propic varchar(255),
created_at timestamp not null default 0,
updated_at timestamp not null default 0,
foreign key(user) references users(id)
);
 
CREATE TABLE streams(
id int primary key auto_increment,
user int not null,
thumbnail_url varchar(900),
user_login varchar(255),
user_name varchar(255),
title varchar(500),
language varchar(4),
created_at timestamp not null default 0,
updated_at timestamp not null default 0,
foreign key(user) references users(id)
    );

select * from users
    
    