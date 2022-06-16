begin;

alter table user
modify column user_role varchar(30);

commit;
