-- CREATE DATABASE workout;



CREATE TABLE public.user
(

        user_id SERIAL NOT NULL PRIMARY KEY,
        username VARCHAR(100) NOT NULL UNIQUE,
        user_pass VARCHAR(100) NOT NULL



);


CREATE TABLE public.contact
(
    contact_id SERIAL NOT NULL PRIMARY KEY,
    user_id INT NOT NULL REFERENCES public.user(user_id),
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL



);


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