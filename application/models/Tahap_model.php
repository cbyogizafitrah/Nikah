<?php 
/**
 * 
 */
class Tahap_model extends CI_Model
{
		
		public function insert($data)	
		{
			$this->db->insert('tahap',$data);
		}

		public function select()
		{
			return $this->db->get('tahap')->result();
		}
		public function delete($id)
		{
			$this->db->where('id_tahap',$id);
			$this->db->delete('tahap');
		}
		public function update($data,$id)
		{
			$this->db->where('id_tahap',$id);
			$this->db->update('tahap',$data);
		}
}
 ?>
