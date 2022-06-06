begin;

create table item (
    item_id integer primary key auto_increment,
    item_name text,
    price DECIMAL(10, 2),
    item_type integer,
    description text,
    flag integer,
)

create table user (
    user_id integer auto_increment primary key,
    user_fullname text,
    user_name text,
    password text, -- hash menggunakan md5 atau sha256
    user_role integer
)

create table cart (
    cart_id integer primary key auto_increment,
    user_id integer foreign key references user(user_id),
)

create table cart_item (
    item_id integer foreign key references item(item_id),
    cart_id integer foreign key references cart(cart_id),
)

commit;
