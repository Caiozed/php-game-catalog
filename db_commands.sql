-- CREATE TABLE users(
--                 id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
--                 username VARCHAR(50) NOT NULL,
--                 password VARCHAR(50) NOT NULL,
--                 UNIQUE KEY user (username)
--             );

-- CREATE TABLE games(
--                  id int AUTO_INCREMENT PRIMARY KEY NOT NULL,
--                  name VARCHAR(50) NOT NULL,
--                  status VARCHAR(50) NOT NULL,
--                  image VARCHAR(500),
--                  user_id int,
--                  FOREIGN KEY (user_id) REFERENCES users(id),
--                  UNIQUE KEY user_game (name, user_id)
--              ); 
-- DROP TABLE games;
-- DROP TABLE users;
 select * from users;
 select * from games;
-- delete from users where id > 0;

