use database master
go
create database db_inventario
go
create table tbl_unidad_medida
(
int(11) id_unidad_medida,
varchar(50) nombre,
varchar(10) abreviado
)