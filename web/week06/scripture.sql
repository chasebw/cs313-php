CREATE TABLE topic 
(

    topic_id SERIAL NOT NULL PRIMARY KEY,
    topic_name VARCHAR(100) NOT NULL



);


CREATE TABLE scripture_topic
(

    scripture_topic_id SERIAL NOT NULL PRIMARY KEY,
    topic_id INT NOT NULL REFERENCES topic(topic_id),
    scripture_id INT NOT NULL REFERENCES scripture(scripture_id)



);


CREATE table scripture
(

    scripture_id SERIAL NOT NULL PRIMARY KEY,
    scripture_name VARCHAR(100) NOT NULL,
    scripture_content TEXT NOT NULL



);


INSERT INTO topic (topic_name)
VALUES ('Faith');

INSERT INTO topic (topic_name)
VALUES ('Sacrifice');

INSERT INTO topic (topic_name)
VALUES ('Charity');

