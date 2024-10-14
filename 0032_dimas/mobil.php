<?php
class Mobil {
    public $nama;
    public $merk;

    public function __construct($nama, $merk) {
        $this->nama = $nama;
        $this->merk = $merk;
    }

    public function cetakInfo() {
        echo "Nama: " . $this->nama . ", Merk: " . $this->merk . "</br>";
    }
}

class MobilSport extends Mobil {
    public $speed;

    public function __construct($nama, $merk, $speed) {
        parent::__construct($nama, $merk);
        $this->speed = $speed;
    }

    public function turbo() {
        echo "Turbo mode diaktifkan! </br> Kecepatan: " . $this->speed . " km/h.</br>";
    }
}

class CityCar extends Mobil {
    public $model;

    public function __construct($nama, $merk, $model) {
        parent::__construct($nama, $merk);
        $this->model = $model;
    }

    public function irit() {
        echo "CityCar ini irit bahan bakar.</br>";
    }

    public function sensor() {
        echo "Sensor deteksi objek aktif.</br>";
    }
}

// MobilSport
$mobilSport = new MobilSport("Aventador", "Lamborgini", 350);
$mobilSport->cetakInfo();
$mobilSport->turbo();

echo "</br>";

// CityCar
$cityCar = new CityCar("Avansa", "Honda", "Model1");
$cityCar->cetakInfo();
$cityCar->irit();
$cityCar->sensor();

?>