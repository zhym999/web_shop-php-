create table goods
(
    goodsid          int auto_increment
        primary key,
    goodsname        varchar(50)  not null,
    typeid           int          null,
    category         varchar(32)  not null,
    intro            varchar(200) not null,
    picture          varchar(50)  not null,
    detail           varchar(50)  not null,
    price            float        not null,
    userid           int          not null,
    hot              int          null,
    address          varchar(50)  not null,
    status           varchar(20)  not null,
    `original price` int          null
);

INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (1, 'PUMA Mixte Chaussettes-7312', 3, 'sock', 'Chaussettes, Mélange de Marron Clair., Taille unique EUPUMA Mixte Chaussettes-7312', 'puma_sock.png', '111111111111111', 7.99, 1, 1, 'Paris', 'new', null);
INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (2, 'XIAOMI 12', 1, 'phone', 'Tous les prix incluent la TVA.
Payez cet article en 4 fois  Voir détails et conditions
Marque Générique 
Nom de modèle Xiaomi 12 Lite 
Opérateur sans fil Tous les transporteurs ', 'Xiaomi12.png', '12 LITE 8+256 BLACK', 400, 1, 1, 'Paris', 'new', null);
INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (3, 'Apple 2023 MacBook Pro ', 2, 'pc', 'Puce M2 Pro avec CPU 10 cœurs et GPU 16 cœurs : Écran Liquid Retina XDR 14 Pouces, 16 Go de Mémoire unifiée, SSD de 512 Go', 'Macbook.png', '111111111111111', 2399, 1, 1, 'Paris', 'new', null);
INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (5, 'Ben Archer and the Moon Paradox', 5, 'book', 'The Alien Skill Series, Book 3)
Édition en Anglais
de Rae Knightly', 'Ben .png', '111111111111111', 12, 1, 1, 'Paris', 'new', null);
INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (7, 'Cémoi - Case Quadro', 4, 'biscuit', 'Fourrées, Chocolat Praliné, 9 Gaufrettes Emballées Individuellement - Fabriqué en France (187 g)', 'Cémoi .png', '111111111111111', 1.5, 1, 1, 'Paris', 'new', null);
INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (9, 'RELAXANT ET ÉNERGISANT', 6, 'cosmetic', 'Ensemble cadeau pour le bain Nurture By Nature pour femmes | Sels de bain, huiles essentielles, lavande, aromathérapie, savon, bombes de bain, bougie', 'RELAXANT.png', '111111111111111', 36, 1, 1, 'Paris', 'new', null);
INSERT INTO web_shop.goods (goodsid, goodsname, typeid, category, intro, picture, detail, price, userid, hot, address, status, `original price`) VALUES (10, '2017 Volvo Xc90 2.0 D5 ', 7, 'auto', 'Volvo ModelXc90
Trim
2.0 D5 AWD
Mi 104,776 km
Year 2017
Fuel type
DieselBody type Suv
Color Black
Power 175 kW (238 HP)
Transmission Automatic', 'volvo.png', '11111111111', 39000, 1, null, 'Paris', 'user', 59000);
