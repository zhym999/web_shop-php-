create table carts
(
    orderid   int auto_increment
        primary key,
    buyerid   int         not null,
    buyername varchar(30) not null,
    salerid   int         not null,
    cost      float       null,
    goodsid   int         not null,
    state     varchar(20) null,
    date      timestamp   null
);

INSERT INTO web_shop.carts (orderid, buyerid, buyername, salerid, cost, goodsid, state, date) VALUES (13, 1, 'zhym0', 1, 400, 2, null, '2023-03-13 18:02:34');
INSERT INTO web_shop.carts (orderid, buyerid, buyername, salerid, cost, goodsid, state, date) VALUES (10, 1, 'zhym0', 1, 1.5, 7, '1', '2023-03-04 18:11:22');
INSERT INTO web_shop.carts (orderid, buyerid, buyername, salerid, cost, goodsid, state, date) VALUES (11, 1, 'zhym0', 1, 2399, 3, null, '2023-03-07 15:00:45');
