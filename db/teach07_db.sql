create table userLogin (
    userLogin_pk    serial not null primary key,    -- user ID
    userLogin_name  varchar(80) not null unique,    -- user NAME
    userLogin_pass  varchar(255) not null           -- user PASSWORD
);