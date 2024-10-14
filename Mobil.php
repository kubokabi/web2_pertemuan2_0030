<?php
class Mobil_0030
{
    public $nama_0030;
    public $merk_0030;

    public function __construct($nama_0030, $merk_0030)
    {
        $this->nama_0030 = $nama_0030;
        $this->merk_0030 = $merk_0030;
    }

    public function tampilkanInfo_0030()
    {
        echo "Nama Mobil: <strong>$this->nama_0030</strong><br>";
        echo "Merk: <strong>$this->merk_0030</strong><br>";
    }
}

class MobilSport_0030 extends Mobil_0030
{
    public $kecepatan_0030;
    public $turbo_0030;

    public function __construct($nama_0030, $merk_0030, $kecepatan_0030, $turbo_0030)
    {
        parent::__construct($nama_0030, $merk_0030);
        $this->kecepatan_0030 = $kecepatan_0030;
        $this->turbo_0030 = $turbo_0030;
    }

    public function tampilkanInfo_0030()
    {
        parent::tampilkanInfo_0030();
        echo "Kecepatan: <strong>$this->kecepatan_0030 km/h</strong><br>";
        echo "Turbo: <strong>$this->turbo_0030</strong><br>";
    }
}

class CityCar_0030 extends Mobil_0030
{
    public $model_0030;
    public $irit_0030;
    public $sensor_0030;

    public function __construct($nama_0030, $merk_0030, $model_0030, $irit_0030, $sensor_0030)
    {
        parent::__construct($nama_0030, $merk_0030);
        $this->model_0030 = $model_0030;
        $this->irit_0030 = $irit_0030;
        $this->sensor_0030 = $sensor_0030;
    }

    public function tampilkanInfo_0030()
    {
        parent::tampilkanInfo_0030();
        echo "Model: <strong>$this->model_0030</strong><br>";
        echo "Irit Bahan Bakar: <strong>$this->irit_0030</strong><br>";
        echo "Sensor: <strong>$this->sensor_0030</strong><br>";
    }
}

$mobilSport_0030 = new MobilSport_0030("Ferrari", "488", 350, "Yes");
$mobilSport_0030->tampilkanInfo_0030();

echo "<br>";

$cityCar_0030 = new CityCar_0030("Honda", "Brio", "2023", "Sangat Irit", "Teratur");
$cityCar_0030->tampilkanInfo_0030();
