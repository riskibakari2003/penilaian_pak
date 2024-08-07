alter table tbl_biodata
    modify nama varchar(255) not null;

alter table tbl_berkas
    add id_berkas_upload int null;
