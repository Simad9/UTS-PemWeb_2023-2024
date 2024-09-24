<?php
$konek = new mysqli('localhost', 'root', '', 'nwind');
if ($konek->connect_error) {
  die("Maaf koneksi error");
}
// Cara 1 -- FETCH ASSOC / FETCH ARRAY
$suplier = mysqli_query(
  $konek,
  "SELECT p.ProductName, c.CategoryName, s.CompanyName  FROM products as p
  INNER JOIN suppliers as s ON p.SupplierID = s.SupplierID
  INNER JOIN categories as c ON p.CategoryID = c.CategoryID
  "
);
while ($data = mysqli_fetch_assoc($suplier)) {
  echo "Nama Produk = $data[ProductName]" . "<br>";
  echo "Nama Kategori = $data[CategoryName]" . "<br>";
  echo "Nama Suplier = $data[CompanyName]" . "<br>";
  echo "<br>";
}

// Cara 2 -- FETCH OBJECT
// $suplier = $konek->query(
//   "SELECT p.ProductName, c.CategoryName, s.CompanyName  FROM products as p
//   INNER JOIN suppliers as s ON p.SupplierID = s.SupplierID
//   INNER JOIN categories as c ON p.CategoryID = c.CategoryID
//   "
// );
// while ($data = $suplier->fetch_object()) {
//   echo "Nama Produk =" . $data->ProductName . "<br>";
//   echo "Nama Kategori =" . $data->CategoryName . "<br>";
//   echo "Nama Suplier =" . $data->CompanyName . "<br>";
//   echo "<br>";
// }
