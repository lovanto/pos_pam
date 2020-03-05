SELECT pelanggan.no_pelanggan, pelanggan.nama, checker.zona,checker.tarif,SUM(checker.catat_meter) AS catat_meter FROM
(pelanggan LEFT JOIN checker ON pelanggan.no_pelanggan=checker.no_pelanggan)
WHERE (checker.tgl_cek>='2020-01-01' AND checker.tgl_cek <='2020-01-19')
GROUP BY no_pelanggan