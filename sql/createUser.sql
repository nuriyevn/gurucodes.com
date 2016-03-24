/*
> su - postgres
> psql template1
*/

CREATE USER username WITH PASSWORD 'test_password';
SELECT datname FROM pg_database;
CREATE DATABASE database_name;
GRANT ALL PRIVILEGES ON DATABASE "database_name" to username;
ALTER ROLE username WITH Superuser;

DO
$do$
BEGIN

  IF EXISTS (SELECT 1 FROM pg_database WHERE datname = 'mydb') THEN
    RAISE NOTICE 'Database already exists';
  ELSE
    PERFORM dblink_exec('dbname=' || current_database()  -- current db
    , 'CREATE DATABASE mydb');
  END IF;

END
$do$