    <?php
    // Pemanggilan Class CRUD (koneksi sudah termasuk didalamnya)
    include "libraries/krud.php";
    // menginisiasi Class CRUD
    $CRUD = new CRUD();
    // Mengambil data user
    // ==============================================
    // @method : Format
    // get_data($table,$orderBy,$orderType,$limit);
    // @return Array
    $existingtowers = $CRUD->get_data('users','id','ASC',6);
    // Menampilkan data user yang berhasil di ambil
    echo "<table border='1'>";
    foreach ($existingtowers as $value) {
		echo "<tr>";
		echo "<td>".$value['id']."</td>";
		echo "<td>".$value['username']."</td>";
		echo "<td>".$value['email']."</td>";
		echo "</tr>";
    }
    echo "</table>";
	?>