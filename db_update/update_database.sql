alter table tbl_user
    add nama Varchar(255) not null after password;

alter table tbl_mst_jns_alkon
    add satuan varchar(50) not null;

alter table tbl_data_alkon
    drop column satuan;

rename table tbl_supplier to tbl_mst_supplier;

INSERT INTO tbl_user (username, password, nama, role)
VALUES ('admin', MD5('admin123'), 'admin', 0),
VALUES ('petugas', MD5('petugas123'), 'petugas', 1),
VALUES ('pimpinan', MD5('pimpinan123'), 'pimpinan', 2);
