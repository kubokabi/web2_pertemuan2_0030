<?php
class Mahasiswa_0030
{
    protected $nama_0030;
    protected $nim_0030;
    protected $jurusan_0030;
    protected $ipk_0030;
    protected $semester_0030;
    protected $jenjang_0030;

    public function __construct($nama_0030, $nim_0030, $jurusan_0030, $ipk_0030, $semester_0030, $jenjang_0030)
    {
        $this->nama_0030 = $nama_0030;
        $this->nim_0030 = $nim_0030;
        $this->jurusan_0030 = $jurusan_0030;
        $this->ipk_0030 = $ipk_0030;
        $this->semester_0030 = $semester_0030;
        $this->jenjang_0030 = $jenjang_0030;
    }

    public function tampilkanInfo_0030()
    {
        echo "Nama: <strong>" . $this->nama_0030 . "</strong><br>";
        echo "NIM: <strong>" . $this->nim_0030 . "</strong><br>";
        echo "Jurusan: <strong>" . $this->jurusan_0030 . "</strong><br>";
        echo "IPK: <strong>" . $this->ipk_0030 . "</strong><br>";
        echo "Semester: <strong>" . $this->semester_0030 . "</strong><br>";
        echo "Jenjang Pendidikan: <strong>" . $this->jenjang_0030 . "</strong><br>";
    }

    public function cekKelulusan_0030()
    {
        if ($this->ipk_0030 >= 2.75 && $this->cekSyaratKelulusan_0030()) {
            echo "<strong>" . $this->nama_0030 . "</strong> dinyatakan lulus.<br>";
        } else {
            echo "<strong>" . $this->nama_0030 . "</strong> belum lulus.<br>";
        }
    }

    public function cekSyaratKelulusan_0030()
    {
        return false;
    }

    public function hitungSks_0030($sksPerSemester_0030)
    {
        $totalSks_0030 = $sksPerSemester_0030 * $this->semester_0030;
        echo "<strong>" . $this->nama_0030 . "</strong> telah menempuh total <strong>" . $totalSks_0030 . " SKS</strong>.<br>";
    }
}

class MahasiswaD3_0030 extends Mahasiswa_0030
{
    public function __construct($nama_0030, $nim_0030, $jurusan_0030, $ipk_0030, $semester_0030)
    {
        parent::__construct($nama_0030, $nim_0030, $jurusan_0030, $ipk_0030, $semester_0030, "D3");
    }

    public function cekSyaratKelulusan_0030()
    {
        return $this->semester_0030 >= 6;
    }

    public function menyelesaikanProyekAkhir_0030()
    {
        echo "<strong>" . $this->nama_0030 . "</strong> (Mahasiswa D3) sedang menyelesaikan Proyek Akhir.<br>";
    }
}

class MahasiswaS1_0030 extends Mahasiswa_0030
{
    public function __construct($nama_0030, $nim_0030, $jurusan_0030, $ipk_0030, $semester_0030)
    {
        parent::__construct($nama_0030, $nim_0030, $jurusan_0030, $ipk_0030, $semester_0030, "S1");
    }

    public function cekSyaratKelulusan_0030()
    {
        return $this->semester_0030 >= 8;
    }

    public function menyelesaikanSkripsi_0030()
    {
        echo "<strong>" . $this->nama_0030 . "</strong> (Mahasiswa S1) sedang menyelesaikan Skripsi.<br>";
    }
}

$mahasiswaD3_0030 = new MahasiswaD3_0030("Budi", "12345678", "Manajemen Informatika", 3.1, 6);
$mahasiswaS1_0030 = new MahasiswaS1_0030("Ani", "87654321", "Teknik Informatika", 2.9, 8);

$mahasiswaD3_0030->tampilkanInfo_0030();
$mahasiswaD3_0030->cekKelulusan_0030();
$mahasiswaD3_0030->hitungSks_0030(22);
$mahasiswaD3_0030->menyelesaikanProyekAkhir_0030();

echo "<br>";

$mahasiswaS1_0030->tampilkanInfo_0030();
$mahasiswaS1_0030->cekKelulusan_0030();
$mahasiswaS1_0030->hitungSks_0030(24);
$mahasiswaS1_0030->menyelesaikanSkripsi_0030();
