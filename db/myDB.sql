-- CREATE DATABASE workout;

CREATE TABLE public.user
(

        user_id SERIAL NOT NULL PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        user_pass VARCHAR(100) NOT NULL



);

Select u.user_id, u.username, c.first_name 
FROM public.user u 
LEFT JOIN public.contact c
ON u.user_id = c.user_id;


CREATE TABLE public.contact
(
    contact_id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.user(user_id),
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL


);


select * from public.user
OFFSET 1
LIMIT 2;




CREATE TABLE public.excercise_log
(

     excercise_id SERIAL NOT NULL PRIMARY KEY,
     user_id INT NOT NULL REFERENCES public.user(user_id),
     excercise_name VARCHAR(100) NOT NULL,
     excercise_explain TEXT NOT NULL,
     record_date DATE




);

CREATE TABLE public.personal_record
(

    personal_record_id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.user(user_id),
    contact_id INT NOT NULL REFERENCES public.contact(contact_id),
    record_name VARCHAR(100) NOT NULL,
    record_amount FLOAT NOT NULL,
    record_date DATE NOT NULL



);


