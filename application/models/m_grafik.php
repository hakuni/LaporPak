<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_grafik extends CI_Model{
   function statistik_pengunjung()
 {

  $sql= $this->db->query("

  select
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=1)AND (YEAR(date)=2017))),0) AS `Januari`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=2)AND (YEAR(date)=2017))),0) AS `Februari`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=3)AND (YEAR(date)=2017))),0) AS `Maret`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=4)AND (YEAR(date)=2017))),0) AS `April`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=5)AND (YEAR(date)=2017))),0) AS `Mei`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=6)AND (YEAR(date)=2017))),0) AS `Juni`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=7)AND (YEAR(date)=2017))),0) AS `Juli`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=8)AND (YEAR(date)=2017))),0) AS `Agustus`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=9)AND (YEAR(date)=2017))),0) AS `September`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=10)AND (YEAR(date)=2017))),0) AS `Oktober`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=11)AND (YEAR(date)=2017))),0) AS `November`,
  ifnull((SELECT count(id_laporan) FROM (laporan)WHERE((Month(date)=12)AND (YEAR(date)=2017))),0) AS `Desember`
 from laporan GROUP BY YEAR(date)

  ");

  return $sql;

 }
}
