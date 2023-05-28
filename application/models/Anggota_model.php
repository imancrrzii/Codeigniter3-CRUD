<?php
class Anggota_model extends CI_Model
{
    public function get_all_anggota()
    {
        return $this->db->get('anggota')->result_array();

    }

    public function get_anggota($limit, $start)
    {
        return $this->db->get('anggota', $limit, $start)->result_array();
    }

    public function count_all_anggota()
    {
        return $this->db->get('anggota')->num_rows();
    }
    public function getAnggotaById($nim)
    {
        return $this->db->get_where('anggota', ['nim' => $nim])->row_array();
    }
    public function get_all_id_anggota()
    {
        $anggota = $this->get_all_anggota();
        $data = [];
        foreach ($anggota as $agg) {
            array_push($data, $agg['nim']);
        }

        return $data;
    }

    public function tambah_anggota()
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kelas' => $this->input->post('kelas'),
            'domisili' => $this->input->post('domisili'),
            'angkatan' => $this->input->post('angkatan'),
            'divisi' => $this->input->post('divisi'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon')

        ];
        $this->db->insert('anggota', $data);
    }
    public function edit_anggota($nim)
    {
        $data = [
            'nim' => $this->input->post('nim'),
            'nama_anggota' => $this->input->post('nama_anggota'),
            'jenis_kelamin' => $this->input->post('jenis_kelamin'),
            'kelas' => $this->input->post('kelas'),
            'domisili' => $this->input->post('domisili'),
            'angkatan' => $this->input->post('angkatan'),
            'divisi' => $this->input->post('divisi'),
            'alamat' => $this->input->post('alamat'),
            'telepon' => $this->input->post('telepon')

        ];
        $this->db->where('nim', $nim);
        $this->db->update('anggota', $data);

    }
    public function hapus_anggota($nim)
    {

        $this->db->where('nim', $nim);
        $this->db->delete('anggota');
    }

    public function search_anggota()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama_anggota', $keyword);
        $this->db->or_like('nim', $keyword);
        $this->db->or_like('kelas', $keyword);
        $this->db->or_like('domisili', $keyword);
        $this->db->or_like('divisi', $keyword);
        $this->db->or_like('alamat', $keyword);
        $this->db->or_like('telepon', $keyword);

        return $this->db->get('anggota')->result_array();
    }
}