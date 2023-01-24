
-- create database name join_plush

-- Table structure for table `customer`

CREATE TABLE customers(
  id int(11)  PRIMARY KEY AUTO_INCREMENT,
  name varchar(255) not null,
  password varchar(255) not null,
  address varchar(255) not null,
  date_of_birth date not null,
  email varchar(255) not null

);

CREATE table venues(
  id int(11) PRIMARY KEY AUTO_INCREMENT,
  name varchar(200) not null,
  address varchar(200) not null
);


CREATE table shows (
  id int(11)  PRIMARY KEY AUTO_INCREMENT,
  name varchar(255) NOT NULL,
  description varchar(255) NOT NULL,
  date_time datetime NOT NULL,
  img varchar(255) NOT NULL,
  show_type varchar(255) NOT NULL,
  venue_id int(11) NOT NULL,
  foreign key (venue_id) references venues(id)
);


CREATE table tickets(
  id int  PRIMARY KEY AUTO_INCREMENT,
  customer_id int not null,
  foreign key (customer_id) references customers(id),
  show_id int not null,
  foreign key (show_id) references shows(id)
);

--
-- Dumping data for table `posts`
--


INSERT INTO venues (name, address) values ('SoFi Stadium','Moha Mongkul Sen Sok Center'),
('Jakarta International Stadium','Moha Mongkul Sen Sok Center');

INSERT INTO shows (name, description,date_time,img,show_type,venue_id) VALUES
 ('All the Colors of the Dark (1972)', 'A woman recovering from a car accident in which she lost her unborn child finds herself pursued by a coven of devil worshipers.','2022/11/23 10:45:00',' https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcR-6gODhIdsA7Pm5AWF9sc12aNa2gA6wAJsKL2wgPiwSrhD9hb8','movie',1),
('The Place Beyond the Pines', 'The daring new movie from the director of Blue Valentine, The Place Beyond The Pines is a sweeping emotional drama powerfully exploring the unbreakable bond between fathers and sons.','2023/7/13 2:30:00','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTG7p-UwKM4z2kGxw6cjYpKH6tcdjbseDmmBj0ezrkMB3p2YLGt','movie',1),
('Bang the Drum Slowly', 'Bang the Drum Slowly is a 1973 American sports drama film directed by John D. Hancock, about a baseball player of limited intellect who has a terminal illness, and his brainier, more skilled teammate.','2023/5/14 7:50:00','https://upload.wikimedia.org/wikipedia/en/0/0e/Bang_the_Drum_Slowly_poster.jpg','movie',1),
('Good Will Hunting', 'A touching tale of a wayward young man who struggles to find his identity, living in a world where he can solve any problem, except the one brewing deep within himself, until one day he meets his soul mate who opens his mind and his heart.','2023/5/21 8:10:00','https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcRt8tkf3OTJjqpG0hBeJgtmQmtJgAAI7vOsn8BE9wlhxLuBuFI_','movie',2),
('In the Mood for Love (2000) Film', 'It portrays a man (Tony Leung) and a woman (Maggie Cheung) whose spouses have an affair together and who slowly develop feelings for each other.','2023/12/21 5:00:00','https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ2FJH21TV5VCtHdkNfbAWLz1eQJb3zFAqEOXCrqCIkCXw8JhUs','movie',2);

