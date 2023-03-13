create table admin
(
    aid       int         not null
        primary key,
    aname     varchar(20) not null,
    apassword varchar(20) not null,
    uphone    varchar(20) not null
);

INSERT INTO web_shop.admin (aid, aname, apassword, uphone) VALUES (1, 'zhuyiming', '123456', '716239967');
INSERT INTO web_shop.admin (aid, aname, apassword, uphone) VALUES (2, 'zhym', '123456', '13886616111');
