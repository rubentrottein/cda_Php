#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

create database blog
use blog

#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE users(
        id        Int  Auto_increment  NOT NULL ,
        lastName  Varchar (90) NOT NULL ,
        firstName Varchar (90) NOT NULL ,
        email     Varchar (140) NOT NULL ,
        phone     Varchar (10) ,
        password  Varchar (10) NOT NULL
	,CONSTRAINT users_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (50) NOT NULL ,
        slug Varchar (50) NOT NULL
	,CONSTRAINT categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: posts
#------------------------------------------------------------

CREATE TABLE posts(
        id            Int  Auto_increment  NOT NULL ,
        title         Varchar (255) NOT NULL ,
        slug          Varchar (255) NOT NULL ,
        content       Text NOT NULL ,
        createdAt     Datetime NOT NULL ,
        updatedAt     Datetime NOT NULL ,
        image         Varchar (255) NOT NULL ,
        id_users      Int NOT NULL ,
        id_categories Int NOT NULL
	,CONSTRAINT posts_PK PRIMARY KEY (id)

	,CONSTRAINT posts_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
	,CONSTRAINT posts_categories0_FK FOREIGN KEY (id_categories) REFERENCES categories(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: comments
#------------------------------------------------------------

CREATE TABLE comments(
        id        Int  Auto_increment  NOT NULL ,
        content   Text NOT NULL ,
        createdAt Datetime NOT NULL ,
        id_users  Int NOT NULL ,
        id_posts  Int NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (id)

	,CONSTRAINT comments_users_FK FOREIGN KEY (id_users) REFERENCES users(id)
	,CONSTRAINT comments_posts0_FK FOREIGN KEY (id_posts) REFERENCES posts(id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: tags
#------------------------------------------------------------

CREATE TABLE tags(
        id   Int  Auto_increment  NOT NULL ,
        name Varchar (30) NOT NULL ,
        slug Varchar (30) NOT NULL
	,CONSTRAINT tags_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: define
#------------------------------------------------------------

CREATE TABLE define(
        id      Int NOT NULL ,
        id_tags Int NOT NULL
	,CONSTRAINT define_PK PRIMARY KEY (id,id_tags)

	,CONSTRAINT define_posts_FK FOREIGN KEY (id) REFERENCES posts(id)
	,CONSTRAINT define_tags0_FK FOREIGN KEY (id_tags) REFERENCES tags(id)
)ENGINE=InnoDB;

