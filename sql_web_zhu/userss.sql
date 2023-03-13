create table userss
(
    uid      int auto_increment
        primary key,
    uname    varchar(32) not null,
    password varchar(64) not null,
    email    varchar(32) not null,
    address  varchar(32) null,
    uphone   varchar(32) null,
    address2 varchar(50) null,
    address3 varchar(50) null
);

INSERT INTO web_shop.userss (uid, uname, password, email, address, uphone, address2, address3) VALUES (1, 'zhym0', 'e10adc3949ba59abbe56e057f20f883e', 'zhuyim@gmail.com', 'ivry sur seine', '13886616111', 'NOTSET', 'NOTSET');
INSERT INTO web_shop.userss (uid, uname, password, email, address, uphone, address2, address3) VALUES (2, 'zhym1', 'e10adc3949ba59abbe56e057f20f883e', '1909117762@qq.com', null, null, null, null);
INSERT INTO web_shop.userss (uid, uname, password, email, address, uphone, address2, address3) VALUES (7, 'YIMING ZHU', '02f6e5156e84fbb9c7e7f2737bd9ca6d', 'zhuyim99@gmail.com', null, '0765239967', null, null);
