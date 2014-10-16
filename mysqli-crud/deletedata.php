    <?php
    // Pemanggilan Class CRUD (koneksi sudah termasuk didalamnya)
    include "libraries/krud.php";
    // menginisiasi Class CRUD
    $CRUD = new CRUD();
    // Mengupdate data user
    // ==============================================
    // insert($table,$data);
    //
    // @return Array
    $table = 'users';
    $where = array(
    'username =' => 'testering'
    );
    $CRUD->delete($table,$where);
	?>