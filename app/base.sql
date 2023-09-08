



CREATE TABLE Profiles (
  id SERIAL NOT NULL, 
  name      varchar(255), 
  PRIMARY KEY (id));

INSERT INTO Profiles(id, name) VALUES (DEFAULT, 'developpeur');
INSERT INTO Profiles(id, name) VALUES (DEFAULT, 'graphiste');


CREATE TABLE Users (
  id         SERIAL NOT NULL, 
  identification varchar(255), 
  name           varchar(255), 
  firstName      varchar(255), 
  email          varchar(255), 
  password       varchar(255), 
  photo          text, 
  idProfile      int4 NOT NULL, 
  status         int4 DEFAULT 0, 
  PRIMARY KEY (id));


CREATE TABLE LeaderProjects (
  id     SERIAL NOT NULL, 
  idUser int4 NOT NULL, 
  status int4 DEFAULT 0, 
  PRIMARY KEY (id));

INSERT INTO Users (id, name, firstName, email, password, idProfile)
VALUES
  (DEFAULT, 'Doe', 'John', 'john@example.com', 'root', 2),
  (DEFAULT, 'Smith', 'Jane', 'jane@example.com', 'root', 1),
  (DEFAULT, 'Williams', 'Michael', 'michael@example.com', 'root', 2);


INSERT INTO Users (id, name, firstName, email, password, idProfile)
VALUES(DEFAULT, 'be', 'be', 'be@example.com', 'root', 2);

CREATE OR REPLACE VIEW v_LeaderProjects AS
SELECT
U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status user_status,
L.id idLeaderprojects,L.status leader_status 
FROM users as U RIGHT JOIN leaderProjects as L on U.id = L.iduser ORDER BY idleaderprojects ASC;


-- INSERT INTO LeaderProjects(id, idUser, status) VALUES (DEFAULT, '11', '2');


CREATE VIEW v_simpleusers AS
SELECT
   U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status
FROM
    Users U
LEFT JOIN
    LeaderProjects LP ON U.id = LP.idUser
WHERE
    LP.id IS NULL ORDER BY U.id ASC;



CREATE TABLE Projects (
  id              SERIAL NOT NULL, 
  name            varchar(255), 
  idLeaderProject int4 NOT NULL, 
  "date"          date, 
  descriptions    text, 
  status          int4 DEFAULT 1, 
  PRIMARY KEY (id));


INSERT INTO Projects(id, name, idLeaderProject, "date", descriptions, status) VALUES (DEFAULT, 'Project erico', 1, '2023-08-01', 'Description for Project A', 1);

INSERT INTO Projects(id, name, idLeaderProject, "date", descriptions, status)
VALUES
  (DEFAULT, 'Project A', 1, '2023-08-01', 'Description for Project A', 1),
  (DEFAULT, 'Project B', 2, '2023-08-02', 'Description for Project B', 1),
  (DEFAULT, 'Project C', 3, '2023-08-03', 'Description for Project C', 0);


CREATE TABLE TeamProjects (
  id        SERIAL NOT NULL, 
  idProject int4 NOT NULL, 
  idUser    int4 NOT NULL, 
  status    int4, 
  PRIMARY KEY (id));

  INSERT INTO TeamProjects(idProject, idUser, status) VALUES ('4', '2', '0');
  INSERT INTO TeamProjects(idProject, idUser, status) VALUES ('4', '4', '0');
  INSERT INTO TeamProjects(idProject, idUser, status) VALUES ('5', '4', '0');

CREATE VIEW v_teamprojects AS
SELECT
   TP.id,U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status,
   TP.idproject
FROM
    Users U
 JOIN
    TeamProjects TP ON U.id = TP.idUser
 ORDER BY U.id ASC;


CREATE TABLE TimeSetup (
  id     SERIAL NOT NULL, 
  number int4, 
  PRIMARY KEY (id));

-- en jour
 INSERT INTO TimeSetup( number) VALUES (1);
 INSERT INTO TimeSetup( number) VALUES (2);
 INSERT INTO TimeSetup( number) VALUES (7);
 INSERT INTO TimeSetup( number) VALUES (14);
 INSERT INTO TimeSetup( number) VALUES (30);


-- CREATE VIEW v_teamprojects AS
-- SELECT
--    U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status,
--    P.id idproject,P.name project_name,P.idleaderproject,P.date,P.descriptions,P.status project_status
-- FROM
--     Users U
--  JOIN
--     TeamProjects TP ON U.id = TP.idUser
--   JOIN
--     Projects P ON TP.idproject = P.id
--  ORDER BY P.id,U.id ASC;


-- SELECT
--    U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status,
--    TM.idUser,TM.idproject 
-- FROM
--     Users U
-- RIGHT JOIN
--     V_teamprojects TM ON U.id = TM.idUser 
-- WHERE
--      TM.idproject = '4' ORDER BY U.id ASC ;

-- SELECT
--    U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status,
--    TM.idUser,TM.idproject
-- FROM
--     Users U
-- LEFT JOIN
--     V_teamprojects TM ON U.id = TM.idUser 
-- WHERE
--     TM.idUser IS NULL and TM.idproject = '4' ORDER BY U.id ASC ;


-- SELECT
--    U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status,
--    TM.idUser,TM.idproject
-- FROM
--     Users U
-- LEFT JOIN
--     V_teamprojects TM ON U.id = TM.idUser 
-- WHERE 
--     TM.idUser IS NULL ORDER BY U.id ASC ;

-- SELECT
--    U.id iduser,U.identification ,U.name ,U.firstname ,U.email ,U.photo ,U.idprofile ,U.status,
--    TM.idUser,TM.idproject
-- FROM
--     Users U
-- LEFT JOIN
--     V_teamprojects TM ON U.id = TM.idUser
-- WHERE 
--     TM.idUser IS NULL ORDER BY U.id ASC ;


