<?php
$konek = new mysqli('localhost', 'root', '', 'nwind');
if ($konek->connect_error) {
  die("Maaf koneksi error");
}
// Cara 1 -- FETCH ASSOC / FETCH ARRAY
$suplier = mysqli_query($konek,  "SELECT * FROM customers WHERE City = 'Solo'");
while ($data = mysqli_fetch_assoc($suplier)) {
  echo "Nama CustomerID = $data[CustomerID] " . "<br>";
  echo "Nama CompanyName = $data[CompanyName] " . "<br>";
  echo "Nama ContactName = $data[ContactName] " . "<br>";
  echo "Nama ContactTitle = $data[ContactTitle] " . "<br>";
  echo "Nama Address = $data[Address] " . "<br>";
  echo "Nama City = $data[City] " . "<br>";
  echo "Nama Region = $data[Region] " . "<br>";
  echo "Nama PostalCode = $data[PostalCode] " . "<br>";
  echo "Nama Country = $data[Country] " . "<br>";
  echo "Nama Phone = $data[Phone] " . "<br>";
  echo "Nama Fax = $data[Fax] " . "<br>";
  echo "<br>";
}

// Cara 2 -- FETCH OBJECT
// $suplier = $konek->query("SELECT * FROM customers WHERE City = 'Solo'");
// while ($data = $suplier->fetch_object()) {
//   echo "Nama CustomerID = " . $data->CustomerID . "<br>";
//   echo "Nama CompanyName = " . $data->CompanyName . "<br>";
//   echo "Nama ContactName = " . $data->ContactName . "<br>";
//   echo "Nama ContactTitle = " . $data->ContactTitle . "<br>";
//   echo "Nama Address = " . $data->Address . "<br>";
//   echo "Nama City = " . $data->City . "<br>";
//   echo "Nama Region = " . $data->Region . "<br>";
//   echo "Nama PostalCode = " . $data->PostalCode . "<br>";
//   echo "Nama Country = " . $data->Country . "<br>";
//   echo "Nama Phone = " . $data->Phone . "<br>";
//   echo "Nama Fax = " . $data->Fax . "<br>";
//   echo "<br>";
// }
