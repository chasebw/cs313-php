

CREATE TABLE ta_user
(

        user_id SERIAL NOT NULL PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        user_pass VARCHAR(100) NOT NULL



);



INSERT INTO ta_user
 (username,user_pass) VALUES ('testusername','testpass');




SELECT username,user_pass FROM ta_user WHERE username = 'testusername';
