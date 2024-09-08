<?php
class Mahasiswa_model extends CI_Model
{

    private $table = "mahasiswa";
    public function getAllMhs()
    {
        return $this->db->get($this->table)->result_array(); // ini di baca nya, dapatkan database dan sertakan juga
        // return $query->result_array(); in yang asli nya
    }

    public function tambahDataMahasiswa()
    {

        $data = [
            "nama" => $this->input->post("nama", true),
            "nim" => $this->input->post("nim", true),
            "email" => $this->input->post("email", true),
            "jurusan" => $this->input->post("jurusan", true)
        ];

        $this->db->insert($this->table, $data);
    }

    public function hapusDataMahasiswa($id)
    {
        // $this->db->where('id', $id);
        $this->db->delete($this->table, ['id' => $id]);
    }

    public function getMhsById($id)
    {
        return $this->db->get_where($this->table, ["id" => $id])->row_array();
    }

    public function ubahDataMahasiswa()
    {

        $data = [
            "nama" => $this->input->post("nama", true),
            "nim" => $this->input->post("nim", true),
            "email" => $this->input->post("email", true),
            "jurusan" => $this->input->post("jurusan", true)
        ];

        $this->db->where("id", $this->input->post("id", true));
        $this->db->update($this->table, $data);
    }

    public function cariDataMahasiswa()
    {
        $keyword = $this->input->post("keyword", true);
        $this->db->like("nama", $keyword);
        $this->db->or_like("jurusan", $keyword);
        $this->db->or_like("nim", $keyword);
        $this->db->or_like("email", $keyword);
        return $this->db->get($this->table)->result_array();
    }
}
