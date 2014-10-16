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
    $data = array(
		'username' => 'testering',
		'email' => 'testering@test.com'
    );
    $where = array(
    'username =' => 'tester'
    );
    $CRUD->update($table,$data,$where);
	
	?>