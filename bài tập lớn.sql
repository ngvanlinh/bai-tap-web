create database QLQCF

create table NHANVIEN
(
	MaNV char(6) primary key,
	TenNV nvarchar(30),
	NgaySinh date,
	ChucVu nvarchar(30),
	DiaChi nvarchar(50),
	SDT char(10),
	Luong int,
)
create table MENU
(
	MaDU char(5) primary key,
	TenDU nvarchar(20),
	GiaTien int,
)
create table KHACHHANG
(
	MaKH char(6)primary key,
	TenKH nvarchar(30),
	DiaChi nvarchar(30),
)
create table DONGIA
(
	NgayTT date,
	MaDU char(5) references MENU(MaDU),
	MaKH char(6) references KHACHHANG(MaKH),
	MaNV char(6)references NHANVIEN(MaNV),
)
create table NHAPHANG
(
	MaDoiTac char(6),
	TenDoiTac nvarchar(30),
	MaDu char(5) references MENU(MaDU),
	Soluong int,
	NgayNhap date,
)

insert into NHANVIEN values ('NV001',N'Nguyễn Văn A','19970820',N'Nhân viên chạy bàn',N'Hà Nội','021019873',3000);
insert into NHANVIEN values ('NV002',N'Giang A Sung','19971023',N'Nhân viên chạy bàn',N'Lào Cai','022305503',3000);
insert into NHANVIEN values ('NV003',N'Phùng Thị Lí','2000802',N'Nhân viên thu ngân',N'Bắc Giang','024520545',3000);
insert into NHANVIEN values ('NV003',N'Trần Ngọc Nga','2000802',N'Nhân viên thu ngân',N'Bắc Giang','024520545',3000);