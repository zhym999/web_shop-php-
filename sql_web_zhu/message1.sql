create table message1
(
    Mid       int auto_increment
        primary key,
    mge       varchar(100) not null,
    sendid    int          not null,
    receiveid int          not null,
    date      timestamp    null
);

INSERT INTO web_shop.message1 (Mid, mge, sendid, receiveid, date) VALUES (1, 'afasdadasfafafa asdas a a dasdasda4542fasfasf  as dasdasdas  as a', 2, 1, '2023-03-12 12:10:53');
