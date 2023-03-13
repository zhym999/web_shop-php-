create table notification
(
    nid          int auto_increment
        primary key,
    notification varchar(100) not null,
    uid          int          not null
);

INSERT INTO web_shop.notification (nid, notification, uid) VALUES (1, 'fafa asd a asd asd a  as dad111  1 111 1 1111 1 1 11 1 1 1  1  11 ', 1);
