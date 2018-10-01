<?php 
 
class m_helpdesk extends CI_Model{
	function simpan_helpdesk($nama,$instansi,$inti,$keterangan){
		$hsl=$this->db->query("INSERT INTO helpdesk (laporan_nama,laporan_instansi,laporan_inti,laporan_keterangan) VALUES ('$nama','$instansi','$inti','$keterangan')");
		return $hsl;
	}
}