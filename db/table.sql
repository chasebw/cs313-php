DROP TABLE table1;
DROP TABLE table2;


CREATE TABLE table1
(
    id SERIAL PRIMARY KEY,
    textvalue VARCHAR(1) NOT NULL
);

CREATE TABLE table2(
    id SERIAL PRIMARY KEY,
    textvalue VARCHAR(1) NOT NULL

);

INSERT INTO table1 (id,textvalue) VALUES (1,'A');
INSERT INTO table1 (id,textvalue) VALUES (2,'B');
INSERT INTO table1 (id,textvalue) VALUES (3,'C');

INSERT INTO table2 (id,textvalue) VALUES (1,'X');
INSERT INTO table2 (id,textvalue) VALUES (4,'Y');
INSERT INTO table2 (id,textvalue) VALUES (5,'Z');
INSERT INTO table2 (id,textvalue) VALUES (6,'A');


SELECT count(*) as RecordCount
FROM table2;



SELECT t1.textvalue as Column1, t2.textvalue as Column2
from table1 t1
JOIN table2 t2
ON t1.id = t2.id;



SELECT t1.textvalue as Column1, t2.textvalue as Column2
FROM table1 t1 
LEFT JOIN table2 t2
ON t1.id = t2.id;



SELECT t1.textvalue as ValueList
FROM table1 t1
UNION ALL
SELECT t2.textvalue as ValueList
FROM table2 t2
ORDER BY ValueList;

SELECT textvalue 
FROM table2
OFFSET 1  
LIMIT 2;


















--Number 1
SELECT count(*) as RecordCount from table2;

--Number 2
Select t1.textvalue as Column1, t2.textvalue as Column2  
from table1 t1
JOIN table2 t2
ON t1.id = t2.id;


--Number 3
SELECT t1.textvalue as Column1, t2.textvalue as Column2
from table1 t1
LEFT JOIN table2 t2
ON t1.id = t2.id;

--Number 4
(SELECT t1.textvalue as ValueList
FROM table1 t1)
UNION ALL
(SELECT t2.textvalue as ValueList
FROM table2 t2
)ORDER BY ValueList;

--Number 4 _other way
(SELECT t1.textvalue as ValueList
From table1 t1 
LIMIT 1)
UNION ALL
(SELECT t1.textvalue as ValueList
From table1 t1)
UNION ALL
(SELECT t2.textvalue as ValueList
FROM table2 t2
LIMIT 3);


--Number 5
SELECT textvalue
FROM table2 t2
OFFSET 1
LIMIT 2;




