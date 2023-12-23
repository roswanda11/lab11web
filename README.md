<table>
  <tr>
    <th colspan="2">DATA MAHASISWA</th>
  </tr>
  <tr>
    <td>Nama</td>
    <td>Roswanda Nuraini</td>
  </tr>
  <tr>
    <td>NIM</td>
    <td>312210328</td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td>TI.22.A3</td>
  </tr>
</table>

# <p align="center">Praktikum11 : PHP OOP Lanjutan</p>

1. Buat project baru dengan struktur sebagai berikut:
   
![image](https://github.com/roswanda11/lab11web/assets/115516632/0d1ed3b9-c2d2-4c67-8a46-36b759f167fc)

2. Copy file library (class) dari praktikum 10 dan letakkan pada folder class.

![image](https://github.com/roswanda11/lab11web/assets/115516632/4b08ed4f-9375-4259-a73a-882ac2e71511)

3. Buat file template yang berisi template dan css untuk header, footer dan menu sidebar.

![image](https://github.com/roswanda11/lab11web/assets/115516632/6283c2b3-f30d-4ad3-9dbe-2ba4baaa79a4)

4. Buat modul artikel yang berisi CRUD dengan memanfaatkan library database dan form tersebut.

![image](https://github.com/roswanda11/lab11web/assets/115516632/8b832ba3-b1a0-46aa-b694-b09d2c442bed)

![image](https://github.com/roswanda11/lab11web/assets/115516632/7f3dce12-8d68-4860-92d1-f21187b8c34d)

5. File index.php berisi proses routing aplikasi dan dikombinasikan dengan penggunaan mod_rewrite pada file .htaccess
		
		<?php
		require_once("class/database.php");
		require_once("class/form.php");
		require_once("template/header.php");
		
		$mod = $_REQUEST['mod'];
		switch ($mod) {
		  case "mobil":
		    require("module/mobil.php");
		    break;
		  case "data":
		    require("data.php");
		    break;
		  case "about":
		    require("about.php");
		    break;
		  case "contact":
		    require("contact.php");
		    break;
		  case "form_input":
		    require("form_input.php");
		    break;
		  case "data":
		    require("data.php");
		    break;
		  case "update":
		    require("update.php");
		    break;
		  default;
		    require("module/mobil.php");
		
		    require_once("template/footer.php");
		}

![image](https://github.com/roswanda11/lab11web/assets/115516632/017d5d98-e0d7-4255-81e6-5f8a62bd7768)

## OUTPUT

1. Tampilan Home Sidebar
   
![image](https://github.com/roswanda11/lab11web/assets/115516632/cf99ecab-b471-4caa-ab72-49be48dc16a5)

2. Tampilan About Sidebar

![image](https://github.com/roswanda11/lab11web/assets/115516632/4232b885-b289-45af-ab11-67567d6bd6b5)

3. Tampilan Form Sidebar

![image](https://github.com/roswanda11/lab11web/assets/115516632/ea2f5ef4-d822-4376-a17d-5aa2f5d7b97e)

4. Tampilan Contact Sidebar

![image](https://github.com/roswanda11/lab11web/assets/115516632/80cac2b6-c741-4331-b577-2e57c419135d)

6. Tampilan Data Form Sidebar

![image](https://github.com/roswanda11/lab11web/assets/115516632/8988c6a4-1866-4968-8063-0b992088feed)

8. Tampilan Update Sidebar

![image](https://github.com/roswanda11/lab11web/assets/115516632/3037d112-e7cd-4517-87f9-fafa915b02b2)
