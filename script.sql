create table client
(
    id         int auto_increment
        primary key,
    first_name varchar(20)  null,
    last_name  varchar(20)  null,
    email      varchar(50)  null,
    gender     varchar(15)  null,
    ip_address varchar(15)  null,
    company    varchar(20)  null,
    city       varchar(20)  null,
    title      varchar(20)  null,
    website    varchar(120) null
);


