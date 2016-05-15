--Supppression contraintes ALTER TABLE DROP Contraints 
--Supppression table Drop table 
-- Creation table  CREATE TABLE
--Creation ALTER TABLE name ADD CONTRAINTS nc foreignkey champs (table , champ)
DROP TABLE OWNER;
DROP TABLE DONE;
DROP TABLE SUPERVISE;
DROP TABLE ACTIVITY;
DROP TABLE TEACHER;
DROP TABLE STUDENT;
DROP TABLE SCHOOL;

create table SCHOOL (
SCHOOL_ID bigserial, 
NAME varchar(30) constraint nameschool not null,
SCHOOL_PASSWORD varchar(50),
SCHOOL_STREET varchar(30),
SCHOOL_TOWN varchar(30),
SCHOOL_POSTCODE varchar(30),
SCHOOL_CONTINENT varchar(30) check ( school_continent in 
('EUROPE','NORTH-AMERICA','SOUTH_AMERICA','ASIA','OCEANIA','AFRICA')),
SCHOOL_PHONE_NUM varchar(13),
SCHOOL_MAIL varchar(30) constraint mailschool not null, 
DIRECTOR varchar(20),
CONSTRAINT school_pk primary key (SCHOOL_ID)
);

create table ACTIVITY (
ACTIVITY_ID bigserial, 
TITLE varchar(30) constraint titleactivity not null,
ACTIVITY_DESCRIPTION varchar(30),
ACTIVITY_TOOLS varchar(30),
ACTIVITY_INTELLIGENCE varchar(30) check (activity_intelligence in 
('VERBAL-LINGUISTIC','LOGICAL-MATHEMATICAL','VISUAL-SPATIAL','BODILY-KYNESTHETIC','MUSICAL-RHYTHMIC','NATURALISTIC','INTERPERSONAL','INTRAPERSONAL')),
CONSTRAINT activity_pk primary key (ACTIVITY_ID)
);

create table TEACHER (
TEACHER_ID bigserial, 
T_FIRST_NAME varchar(30),
T_LAST_NAME varchar(30)constraint teachername not null,
TEACHER_PASSWORD varchar(50),
TEACHER_MAIL varchar(30) constraint teachermail not null, 
T_SCHOOL_NUM bigint,
T_BIRTHDATE varchar(30),
T_PHONE_NUM varchar(13),
CONSTRAINT teacher_pk primary key (TEACHER_ID),
CONSTRAINT teacher_fk FOREIGN KEY (T_SCHOOL_NUM)  REFERENCES SCHOOL(SCHOOL_ID)
);


create table STUDENT (
STUDENT_ID bigserial, 
S_FIRST_NAME varchar(30),
S_LAST_NAME varchar(30) constraint studentname not null,
STUDENT_PASSWORD varchar(50),
STUDENT_MAIL varchar(30), 
S_SCHOOL_NUM bigint,
S_BIRTHDATE varchar(30),
S_PHONE_NUM varchar(13),
S_RESULT_VerL bigint,
S_RESULT_LM bigint,
S_RESULT_VS bigint,
S_RESULT_MR bigint,
S_RESULT_BK bigint,
S_RESULT_INTRA bigint,
S_RESULT_N bigint,
S_RESULT_INTER bigint,
STRONG_INTELLIGENCE varchar(30) check (strong_intelligence in 
('VERBAL-LINGUISTIC','LOGICAL-MATHEMATICAL','VISUAL-SPATIAL','BODILY-KYNESTHETIC','MUSICAL-RHYTHMIC','NATURALISTIC','INTERPERSONAL','INTRAPERSONAL')),
WEAK_INTELLIGENCE varchar(30) check (weak_intelligence in 
('VERBAL-LINGUISTIC','LOGICAL-MATHEMATICAL','VISUAL-SPATIAL','BODILY-KYNESTHETIC','MUSICAL-RHYTHMIC','NATURALISTIC','INTERPERSONAL','INTRAPERSONAL')),
CONSTRAINT student_pk primary key (STUDENT_ID),
CONSTRAINT student_fk FOREIGN KEY (S_SCHOOL_NUM)  REFERENCES SCHOOL(SCHOOL_ID)
);

create table OWNER (
SCHOOL_ID bigserial, ACTIVITY_ID bigserial ,
constraint owner_pk primary key (SCHOOL_ID,ACTIVITY_ID),
CONSTRAINT owner_fk1 FOREIGN KEY (SCHOOL_ID) REFERENCES 
SCHOOL(SCHOOL_ID),
CONSTRAINT owner_fk2 FOREIGN KEY (ACTIVITY_ID) REFERENCES ACTIVITY(ACTIVITY_ID)
);

create table DONE (
STUDENT_ID bigserial, ACTIVITY_ID bigserial , ACTIVITY_DATE date,
constraint done_pk primary key (STUDENT_ID,ACTIVITY_ID),
CONSTRAINT done_fk1 FOREIGN KEY (STUDENT_ID) REFERENCES STUDENT(STUDENT_ID),
CONSTRAINT done_fk2 FOREIGN KEY (ACTIVITY_ID) REFERENCES ACTIVITY(ACTIVITY_ID)
);
create table SUPERVISE (
STUDENT_ID bigserial, TEACHER_ID bigserial , GRADE varchar(20),
constraint supervise_pk primary key (STUDENT_ID,TEACHER_ID),
CONSTRAINT supervise_fk1 FOREIGN KEY (STUDENT_ID) REFERENCES STUDENT(STUDENT_ID),
CONSTRAINT supervise_fk2 FOREIGN KEY (TEACHER_ID) REFERENCES TEACHER(TEACHER_ID)
);

create table LOGIN (
LOGKEY varchar(255), CRYPTED_PASSWORD varchar(255) ,
constraint loginKey primary key (logkey)
);



CREATE OR REPLACE FUNCTION check_value_result_verl()
  RETURNS trigger AS
$$
BEGIN
 IF NEW.s_result_verl > 10 THEN
 INSERT INTO student (s_result_verl)
 VALUES(OLD.s_result_verl);
 END IF;
 
 RETURN NEW;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER before_student_result_verl
  BEFORE UPDATE
  ON student
  FOR EACH ROW
  EXECUTE PROCEDURE check_value_result_verl();

  
CREATE TRIGGER check_update
    BEFORE UPDATE ON accounts
    FOR EACH ROW
    EXECUTE PROCEDURE check_account_update();
    
 CREATE OR REPLACE FUNCTION check_student_grade()
  RETURNS trigger AS
$$
BEGIN
 IF NEW.grade <> OLD.grade THEN
 INSERT INTO supervise (student_id,teacher_id)
 VALUES(NEW.student_id,NEW.teacher_id);
 END IF;
 
 RETURN NEW;
END;
$$ LANGUAGE plpgsql;

CREATE TRIGGER before_student_grade
  BEFORE UPDATE ON supervise
  FOR EACH ROW
  EXECUTE PROCEDURE check_student_grade();

