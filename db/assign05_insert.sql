

INSERT INTO public.user (username,user_pass) VALUES ('username47','coolpassword');

INSERT INTO public.contact (first_name,last_name,user_id) VALUES
 ('John','Doe', (SELECT user_id FROM public.user WHERE username = 'username47'));


INSERT INTO public.excercise_log (excercise_name,excercise_explain,record_date,user_id)
 VALUES('General Workout','3 sets of 15 situps, 4 sets of 16 pushups, 3 sets of 8 benchpress 215lbs','02-06-2020', (SELECT user_id FROM public.user WHERE username = 'username47'));


INSERT INTO public.excercise_log (excercise_name,excercise_explain,record_date,user_id)
 VALUES('Pushups','5 sets of 50','02-06-2020', (SELECT user_id FROM public.user WHERE username = 'username47'));


INSERT INTO public.personal_record(user_id,contact_id,record_name,record_amount,record_date)
VALUES ((SELECT user_id FROM public.user WHERE username='username47'),
	(SELECT contact_id FROM public.contact WHERE first_name ='John'),
        'Max Flat Benchpress', '315lbs', '02-15-2020');


INSERT INTO public.personal_record(user_id,contact_id,record_name,record_amount,record_date)
VALUES ((SELECT user_id FROM public.user WHERE username='username47'),
	(SELECT contact_id FROM public.contact WHERE first_name ='John'),
        'Max Pullups', '25 Pullups', '02-15-2020');


INSERT INTO public.personal_record(user_id,contact_id,record_name,record_amount,record_date)
    VALUES ((SELECT user_id FROM public.user WHERE username ='username47'),
        (SELECT contact_id FROM public.contact WHERE user_id= (SELECT user_id FROM public.user WHERE username = 'username47')),
            'Max Pushups', '55 Pushups', '02-16-2020');

INSERT INTO public.personal_record(user_id,contact_id,record_name,record_amount,record_date)
    VALUES ((SELECT user_id FROM public.user WHERE username ='username47'),
        (SELECT contact_id FROM public.contact WHERE user_id= (SELECT user_id FROM public.user WHERE username = 'username47')),
            'Max Pushups', '65 Pushups', '02-18-2020');

SELECT record_name, record_amount, record_date FROM personal_record 
WHERE user_id = 1 ORDER BY record_date DESC;







ALTER TABLE personal_record
ALTER COLUMN record_amount VARCHAR(70);
