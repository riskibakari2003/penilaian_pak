alter table tbl_user
    add nama Varchar(255) not null after password;

alter table tbl_mst_jns_alkon
    add satuan varchar(50) not null;

alter table tbl_data_alkon
    drop column satuan;

