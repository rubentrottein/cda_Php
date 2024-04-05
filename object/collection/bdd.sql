#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------

/*!40101 SET NAMES utf8 */;

#------------------------------------------------------------
# Table: users
#------------------------------------------------------------

CREATE TABLE `cda_collections`.`users` 
    (`id_user` INT NOT NULL AUTO_INCREMENT, 
    `lastName` VARCHAR(30) NOT NULL , 
    `firstName` VARCHAR(30) NOT NULL , 
    `email` VARCHAR(40) NOT NULL , 
    `pseudo` VARCHAR(30) NULL , 
    `password` VARCHAR(30) NOT NULL , 
    PRIMARY KEY (`id_user`)) ENGINE = InnoDB;


#------------------------------------------------------------
# Table: commentaires
#------------------------------------------------------------

CREATE TABLE comments(
    id_comment   Author  Auto_increment  NOT NULL ,
    comment
    author
    commented_element
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: collection_elements
#------------------------------------------------------------

CREATE TABLE elements(
        id            Int  Auto_increment  NOT NULL ,
        title         Varchar (255) NOT NULL ,
        desc          Varchar (255) NOT NULL ,
        property_list Varchar (500) NOT NULL ,
        image         Varchar (255) NOT NULL ,
        categories    Varchar(255) NOT NULL ,
        author        Int NOT NULL ,
        id_categories Int NOT NULL
        ,CONSTRAINT posts_AK UNIQUE (slug)
	,CONSTRAINT posts_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: categories
#------------------------------------------------------------

CREATE TABLE categories(
        id            Int  Auto_increment  NOT NULL ,
        name          Varchar (50) NOT NULL ,
        slug          Varchar (50) NOT NULL ,
        id_categories Int
	,CONSTRAINT categories_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: likes
#------------------------------------------------------------

CREATE TABLE comments(
        id        Int  Auto_increment  NOT NULL ,
        linking_user_id   Text NOT NULL ,
        liked_element Datetime NOT NULL ,
        id_users  Int NOT NULL ,
        id_posts  Int NOT NULL
	,CONSTRAINT comments_PK PRIMARY KEY (id)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: define
#------------------------------------------------------------

CREATE TABLE define(
        id      Int NOT NULL ,
        id_tags Int NOT NULL
	,CONSTRAINT define_PK PRIMARY KEY (id,id_tags)
)ENGINE=InnoDB;




ALTER TABLE posts
	ADD CONSTRAINT posts_users0_FK
	FOREIGN KEY (id_users)
	REFERENCES users(id);

ALTER TABLE posts
	ADD CONSTRAINT posts_categories1_FK
	FOREIGN KEY (id_categories)
	REFERENCES categories(id);

ALTER TABLE categories
	ADD CONSTRAINT categories_categories0_FK
	FOREIGN KEY (id_categories)
	REFERENCES categories(id);

ALTER TABLE comments
	ADD CONSTRAINT comments_users0_FK
	FOREIGN KEY (id_users)
	REFERENCES users(id);

ALTER TABLE comments
	ADD CONSTRAINT comments_posts1_FK
	FOREIGN KEY (id_posts)
	REFERENCES posts(id);

ALTER TABLE define
	ADD CONSTRAINT define_posts0_FK
	FOREIGN KEY (id)
	REFERENCES posts(id);

ALTER TABLE define
	ADD CONSTRAINT define_tags1_FK
	FOREIGN KEY (id_tags)
	REFERENCES tags(id);
