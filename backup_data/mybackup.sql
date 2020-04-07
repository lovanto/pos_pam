#
# TABLE STRUCTURE FOR: checker
#

DROP TABLE IF EXISTS `checker`;

CREATE TABLE `checker` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_cek` date NOT NULL,
  `no_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `zona` varchar(25) NOT NULL,
  `tarif` int(11) NOT NULL,
  `pakai_meter` int(11) NOT NULL,
  `catat_meter` int(11) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (2, '2020-01-11', 29877367, 'Wulan Maria Ulfah ST', 'Z1', 50000, 30, 90, NULL, NULL, 'dani hamdani', '2020-02-07');
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (3, '2020-01-18', 29877367, 'Wulan Maria Ulfah ST', 'Z1', 50000, 30, 50, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (4, '2020-01-02', 8631255, 'tukang aambekan', 'Z2', 6000, 10, 12, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (5, '2020-01-15', 8631255, 'tukang aambekan', 'Z2', 6000, 10, 50, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (6, '2020-01-01', 912763271, 'tukang sewot', 'Z3', 6000, 45, 10, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (7, '2020-01-16', 912763271, 'tukang sewot', 'Z3', 6000, 45, 20, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (8, '2020-01-25', 29877367, 'Wulan Maria Ulfah ST', 'Z1', 50000, 30, 10, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (9, '2020-02-07', 29877367, 'Wulan Maria Ulfah ST', 'Z1', 50000, 30, 12, NULL, NULL, NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (10, '2020-02-08', 9277812, 'Dudi Hidayat', 'Z3', 7500, 120, 80, 'dani hamdani', '2020-02-07', NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (11, '2020-02-29', 9277812, 'Dudi Hidayat', 'Z3', 7500, 40, 12, 'dani hamdani', '2020-02-16', NULL, NULL);
INSERT INTO `checker` (`id`, `tgl_cek`, `no_pelanggan`, `nama`, `zona`, `tarif`, `pakai_meter`, `catat_meter`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (12, '2020-02-20', 8631255, 'tukang aambekan', 'Z2', 6000, 10, 2, 'dani hamdani', '2020-02-16', NULL, NULL);


#
# TABLE STRUCTURE FOR: level
#

DROP TABLE IF EXISTS `level`;

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL AUTO_INCREMENT,
  `nama_level` varchar(20) NOT NULL,
  PRIMARY KEY (`id_level`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO `level` (`id_level`, `nama_level`) VALUES (1, 'admin');
INSERT INTO `level` (`id_level`, `nama_level`) VALUES (2, 'checker');
INSERT INTO `level` (`id_level`, `nama_level`) VALUES (3, 'owner');
INSERT INTO `level` (`id_level`, `nama_level`) VALUES (4, 'pelanggan');


#
# TABLE STRUCTURE FOR: pegawai
#

DROP TABLE IF EXISTS `pegawai`;

CREATE TABLE `pegawai` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_ktp` int(11) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `nama_pegawai` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(35) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `kontrak` varchar(10) NOT NULL,
  `status_pegawai` varchar(30) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

INSERT INTO `pegawai` (`id`, `no_ktp`, `no_telp`, `nama_pegawai`, `jk`, `tgl_lahir`, `alamat`, `email`, `tgl_masuk`, `kontrak`, `status_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (1, 2147483647, '04930543745', 'dudu', 'laki-laki', '2020-02-07', 'jalan jalan wae', 'wulammariaulfah@gmail.com', '2020-02-08', '8', 'Kontrak', 'dani hamdani', '2020-02-07', 'dani hamdani', '2020-02-07');


#
# TABLE STRUCTURE FOR: pelanggan
#

DROP TABLE IF EXISTS `pelanggan`;

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` varchar(10) NOT NULL,
  `no_ktp` int(20) NOT NULL,
  `no_telp` varchar(13) NOT NULL,
  `telp_rumah` varchar(13) DEFAULT NULL,
  `zona` varchar(25) NOT NULL,
  `tarif` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `pakai_meter` int(11) NOT NULL,
  `tgl_reg` date NOT NULL,
  `status` varchar(15) NOT NULL,
  `biaya_instalasi` int(11) DEFAULT NULL,
  `nama_pegawai` varchar(50) DEFAULT NULL,
  `user_create` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `user_update` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (1, 29877367, 'Wulan Maria Ulfah ST', 'Ds.Sukawening', 'wulammariaulfah@gmail.com', '1994-09-13', 'perempuan', 2147483647, '0182762183', '12923849', 'Z1', 200000, 'golongan c', 30, '2020-01-17', 'Aktif', 0, '', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (2, 912763271, 'tukang sewot', 'dimana we', '', '1993-01-12', '-', 2147483647, '088713561236', '', 'Z3', 15000, '', 45, '0000-00-00', '', 0, '', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (3, 8631255, 'tukang aambekan', 'Ds.Sukawening', '', '2000-01-10', 'perempuan', 2147483647, '0182762183', '', 'Z2', 50000, '', 10, '0000-00-00', '', 0, '', '', '0000-00-00', '', '0000-00-00');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (4, 9277812, 'Dudi Hidayat', 'jalan jalan wae', 'dudi@gmail.com', '1992-01-12', 'laki-laki', 2147483647, '04930543745', '120392101238', 'Z3', 20000, 'golongan c', 120, '2020-01-24', 'Aktif', 0, '', '', '0000-00-00', 'dani hamdani', '2020-01-25');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (5, 290392190, 'heru', 'jalan jalan', 'danihmaiad', '1990-01-24', 'laki-laki', 2147483647, '12312312', '123123', 'Z3', 20000, 'golongan c', 120, '2020-01-24', 'Aktif', 0, '', 'dani hamdani', '2020-01-25', '', '0000-00-00');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (6, 92301008, 'dodo', 'jatiluhur', 'hahahahah@gmail', '2020-02-07', 'perempuan', 2147483647, '1231231', '778688', 'Z1', 4500, 'golongan b', 120, '2020-02-08', 'Aktif', 90000, 'dudu', 'dani hamdani', '2020-02-07', 'dani hamdani', '2020-02-07');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (7, 90213, 'ujian', 'jhadjh', 'dani@g', '2020-02-21', 'laki-laki', 12312321, '6564643', '23123213', 'Z5', 2000, 'golongan a', 120, '2020-02-07', 'Aktif', 60000, 'dudu', 'dani hamdani', '2020-02-07', '', '0000-00-00');
INSERT INTO `pelanggan` (`id`, `no_pelanggan`, `nama`, `alamat`, `email`, `tgl_lahir`, `jk`, `no_ktp`, `no_telp`, `telp_rumah`, `zona`, `tarif`, `kategori`, `pakai_meter`, `tgl_reg`, `status`, `biaya_instalasi`, `nama_pegawai`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (8, 322233, 'dani', 'jatinangor', 'dani@gmail.com', '0000-00-00', 'laki-laki', 2147483647, '1243342', '231312321', 'Z1', 5000, 'gol2', 45, '0000-00-00', 'aktif', 50000, 'wulan', '', '0000-00-00', '', '0000-00-00');


#
# TABLE STRUCTURE FOR: pembayaran
#

DROP TABLE IF EXISTS `pembayaran`;

CREATE TABLE `pembayaran` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_transaksi` int(11) NOT NULL,
  `tgl_bayar` date NOT NULL,
  `no_pelanggan` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `zona` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `catat_meter` int(11) NOT NULL,
  `total_bayar` int(11) NOT NULL,
  `biaya_admin` int(11) NOT NULL,
  `denda` int(11) NOT NULL,
  `grand_total` int(11) NOT NULL,
  `user_create` varchar(50) DEFAULT NULL,
  `create_date` date DEFAULT NULL,
  `user_update` varchar(50) DEFAULT NULL,
  `update_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

INSERT INTO `pembayaran` (`id`, `no_transaksi`, `tgl_bayar`, `no_pelanggan`, `nama`, `zona`, `kategori`, `tarif`, `catat_meter`, `total_bayar`, `biaya_admin`, `denda`, `grand_total`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (1, 1212, '2020-02-22', 8631255, 'tukang aambekan', 'Z2', '', 50000, 2, 100000, 9000, 900, 109900, NULL, NULL, 'dani hamdani', '2020-02-21');
INSERT INTO `pembayaran` (`id`, `no_transaksi`, `tgl_bayar`, `no_pelanggan`, `nama`, `zona`, `kategori`, `tarif`, `catat_meter`, `total_bayar`, `biaya_admin`, `denda`, `grand_total`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (2, 9090, '2020-02-23', 8631255, 'tukang aambekan', 'Z2', '', 50000, 2, 100000, 5000, 9000, 114000, NULL, NULL, NULL, NULL);
INSERT INTO `pembayaran` (`id`, `no_transaksi`, `tgl_bayar`, `no_pelanggan`, `nama`, `zona`, `kategori`, `tarif`, `catat_meter`, `total_bayar`, `biaya_admin`, `denda`, `grand_total`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (3, 909011, '2020-02-29', 8631255, 'tukang aambekan', 'Z2', '', 6000, 2, 12000, 5000, 900, 17900, NULL, NULL, NULL, NULL);


#
# TABLE STRUCTURE FOR: user
#

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `nama_user` varchar(20) NOT NULL,
  `id_level` int(20) NOT NULL,
  `user_create` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `user_update` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (1, 'dani', 'dani', 'dani hamdani', 1, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (7, 'wulan', 'eulan', 'wulan maria ulfah', 3, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (8, 'ouu', 'dani', 'juara', 4, '', '0000-00-00', 'dani hamdani', '2020-01-24');
INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (9, 'gila', 'dani', 'juara', 2, 'dani hamdani', '2020-01-24', 'dani hamdani', '2020-01-25');
INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (10, 'Wulantok', 'wulan', 'Wulantok', 1, 'dani hamdani', '2020-02-21', '', '0000-00-00');


#
# TABLE STRUCTURE FOR: zona
#

DROP TABLE IF EXISTS `zona`;

CREATE TABLE `zona` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `zona` varchar(25) NOT NULL,
  `wilayah` varchar(50) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `tarif` int(11) NOT NULL,
  `user_create` varchar(50) NOT NULL,
  `create_date` date NOT NULL,
  `user_update` varchar(50) NOT NULL,
  `update_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (1, 'Z1', 'Jatinangor2', 'golongan b', 4500, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (2, 'Z2', 'cileunyi', 'golongan b', 50000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (4, 'Z3', 'Jatinangor', 'golongan b', 20000, '', '0000-00-00', 'dani hamdani', '2020-02-07');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (5, 'Z4', 'Jatir', 'golongan a', 2000, '', '0000-00-00', 'dani hamdani', '2020-01-25');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (7, 'Z5', 'Cipacing', 'golongan a', 2000, 'dani hamdani', '2020-02-07', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (8, 'A1', 'Bandung 1', 'Juara 1', 5000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (9, 'A2', 'Bandung 2', 'Juara 2', 6000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (10, 'A3', 'Bandung 3', 'Juara 3', 7000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (11, 'A4', 'Bandung 4', 'Juara 4', 8000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (12, 'B1', 'Jakarta 1', 'Juara 1', 5000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (13, 'B2', 'Jakarta 2', 'Juara 2', 6000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (14, 'B3', 'Jakarta 3', 'Juara 3', 7000, '', '0000-00-00', '', '0000-00-00');
INSERT INTO `zona` (`id`, `zona`, `wilayah`, `kategori`, `tarif`, `user_create`, `create_date`, `user_update`, `update_date`) VALUES (15, 'B4', 'Jakarta 4', 'Juara 4', 8000, '', '0000-00-00', '', '0000-00-00');


