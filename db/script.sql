drop database crud_php_mysql;
create database crud_php_mysql;
use crud_php_mysql;

create table klub_bola(
    nomor_punggung integer(2) not null primary key,
    nama_pemain char(50),
    jk_pemain char(1),
    dob_pemain date,
    alamat text,
    posisi char(30)
);

insert into klub_bola values
('7','Ronaldo','L','1987-02-05','Madeira,Portugal','Striker'),
('1','De gea','L','1990-11-18','Madrid,Spanyol','Goalkeeper');

select*from klub_bola;
