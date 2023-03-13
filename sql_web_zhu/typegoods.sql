create table typegoods
(
    typeid   int auto_increment
        primary key,
    typename varchar(32) not null
);

INSERT INTO web_shop.typegoods (typeid, typename) VALUES (1, 'phone');
INSERT INTO web_shop.typegoods (typeid, typename) VALUES (2, 'pc');
INSERT INTO web_shop.typegoods (typeid, typename) VALUES (3, 'clothing');
INSERT INTO web_shop.typegoods (typeid, typename) VALUES (4, 'food');
INSERT INTO web_shop.typegoods (typeid, typename) VALUES (5, 'book');
INSERT INTO web_shop.typegoods (typeid, typename) VALUES (6, 'cosmetic');
INSERT INTO web_shop.typegoods (typeid, typename) VALUES (7, 'auto');
