begin;

create table item
(
    item_id     integer AUTO_INCREMENT primary key,
    item_name   text,
    price       DECIMAL(10, 2),
    item_type   integer,
    description text,
    flag        integer
);

create table user
(
    user_id       integer AUTO_INCREMENT primary key,
    user_fullname text,
    user_name     text,
    password      text, -- hash menggunakan md5 atau sha256
    user_role     integer
);

create table cart
(
    cart_id integer AUTO_INCREMENT primary key,
    user_id integer,
    foreign key (user_id) references user(user_id)
);

create table cart_item
(
    item_id integer,
    cart_id integer,
    foreign key (item_id) references item(item_id),
    foreign key (cart_id) references cart(cart_id)
);

commit;
