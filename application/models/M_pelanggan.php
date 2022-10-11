<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_pelanggan extends CI_Model
{
	public function register($data)
	{
		$this->db->insert('pelanggan', $data);
	}

	public function detail($id_pelanggan)
	{
		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_pelanggan', $id_pelanggan);
		return $this->db->get()->row();
	}

	public function edit($data)
	{
		$this->db->where('id_pelanggan', $data['id_pelanggan']);
		$this->db->update('pelanggan', $data);
	}

	public function all_pelanggan()
	{
		return $this->db->query("SELECT *, SUM(`rinci_transaksi`.`qty`) AS `qty`, SUM(transaksi.total_bayar) AS total_bayar FROM `pelanggan` LEFT JOIN `transaksi` ON `pelanggan`.`id_pelanggan` = `transaksi`.`id_pelanggan` LEFT JOIN `rinci_transaksi` ON `transaksi`.`no_order` = `rinci_transaksi`.`no_order` GROUP BY rinci_transaksi.no_order ORDER BY `pelanggan`.`id_pelanggan` DESC;")->result();
		// $this->db->select('*');
		// $this->db->from('pelanggan');
		// $this->db->join('transaksi', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		// $this->db->join('rinci_transaksi', 'transaksi.no_order = rinci_transaksi.no_order', 'left');
		// $this->db->order_by('pelanggan.id_pelanggan', 'desc');
		// // $this->db->group_by('transaksi.id_pelanggan');

		// return $this->db->get()->result();
	}
}

/* End of file M_pelanggan.php */
