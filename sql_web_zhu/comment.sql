create table comment
(
    comment_id int          not null
        primary key,
    goodsid    int          not null,
    userid     int          not null,
    value      varchar(500) null,
    level      int          null
);

INSERT INTO web_shop.comment (comment_id, goodsid, userid, value, level) VALUES (1, 2, 2, 'Bon smartphone. Très satisfait
Commenté en France le 2 février 2023Achat vérifié
Produits correspondant aux attentes 
Ce téléphone étant assez compliqué à trouver en 256go je suis satisfait', 9);
