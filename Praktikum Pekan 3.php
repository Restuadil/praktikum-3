<?php

# membuat class Animal
class Animal
{
    # property animals
    private $animals;

    # method constructor - mengisi data awal
    # parameter: data hewan (array)
    public function __construct($data)
    {
        $this->animals = $data;
    }

    # method index - menampilkan data animals
    public function index()
    {
        # gunakan foreach untuk menampilkan data animals (array)
        $no = 1;
        foreach ($this->animals as $hewan) {
            echo $no++ . ' . ' . $hewan . '<br>';
        };
    }

    # method store - menambahkan hewan baru
    # parameter: hewan baru
    public function store($data)
    {
        # gunakan method array_push untuk menambahkan data baru
        array_push($this->animals, $data);
    }

    # method update - mengupdate hewan
    # parameter: index dan hewan baru
    public function update($index, $data)
    {
        $this->animals[$index] = $data;
    }

    # method delete - menghapus hewan
    # parameter: index
    public function destroy($index)
    {
        # gunakan method unset atau array_splice untuk menghapus data array
        unset($this->animals[$index]);
    }
}

# membuat object
# kirimkan data hewan (array) ke constructor
$hewan = new Animal(['Kambing', 'Sapi', 'Unta']);

echo "Index - Menampilkan seluruh hewan <br>";
$hewan->index();
echo "<br>";

echo "Store - Menambahkan hewan baru <br>";
$hewan->store('burung');
$hewan->index();
echo "<br>";

echo "Update - Mengupdate hewan <br>";
$hewan->update(0, 'Kucing Anggora');
$hewan->index();
echo "<br>";

echo "Destroy - Menghapus hewan <br>";
$hewan->destroy(1);
$hewan->index();
echo "<br>";