

INSERT INTO public.user (username,user_pass) VALUES ('username47','coolpassword');

INSERT INTO public.contact (first_name,last_name,user_id) VALUES
 ('John','Doe', (SELECT user_id FROM public.user WHERE username = 'username47'));


INSERT INTO public.excercise_log (excercise_name,excercise_explain,record_date,user_id)
 VALUES('Pullups','3 sets of 15','02-06-2020', (SELECT user_id FROM public.user WHERE username = 'username47'));


INSERT INTO public.excercise_log (excercise_name,excercise_explain,record_date,user_id)
 VALUES('Pushups','5 sets of 50','02-06-2020', (SELECT user_id FROM public.user WHERE username = 'username47'));