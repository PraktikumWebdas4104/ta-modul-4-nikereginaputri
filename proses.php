<?php
<h1> <th><CENTER>QUALITY TIME </CENTER> </th></h1>
<H2> <TH> PILIH </TH></H2>

<form action="" method="post">
<input type="checkbox" name="genrefilm[]" value="horor">HOROR<br/>
<input type="checkbox" name="genrefilm[]" value="action">ACTION<br/>
<input type="checkbox" name="genrefilm[]" value="anime">ANIME<br/>
<input type="checkbox" name="genrefilm[]" value="thriller">THRILLER<br/>
<input type="checkbox" name="genrefilm[]" value="animasi">ANIMASI<br/>
 <input type="reset" value="Delete Hobi" name="Delete"> <br> <br>
<hr style="border-color: yellow">
<input type="checkbox" name="wisata[]" value="padang">PADANG<br/>
<input type="checkbox" name="wisata[]" value="pasumpahan">PULAU PASUMPAHAN<br/>
<input type="checkbox" name="wisata[]" value="kalimantan">KALIMANTAN<br/>
<input type="checkbox" name="wisata[]" value="sulawesi">SULAWESI<br/>
<input type="checkbox" name="wisata[]" value="medan">MEDAN<br/>
 <input type="reset" value="Delete wisata" name="Delete"> <br> <br>
<hr style="border-color: yellow">

    Select untuk upload image:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit"> <br><br>
    <hr style="border-color: yellow"><hr style="border-color: yellow">
    <input type="submit" name="kirim" value="kirim">
</form>

<?php 
if (isset($_POST['kirim'])){
	$data=$_POST["genrefilm"];

		foreach ($data as $nilai) {
			echo $nilai."<br/>"; 
		}	
}

if (isset($_POST['kirim'])){
	$data=$_POST["wisata"];

		foreach ($data as $nilai) {
			echo $nilai."<br/>";
		}	
}
?>
?>
