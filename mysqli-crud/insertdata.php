    <?php
    // Pemanggilan Class CRUD (koneksi sudah termasuk didalamnya)
    include "libraries/krud.php";
    // menginisiasi Class CRUD
    $CRUD = new CRUD();
    // Menginsert data user
    // ==============================================
    // insert($table,$data);
    //
    // @return Array
    $table = 'users';
    $data = array(
    'username' => 'tester',
    'email' => 'tester@test.com'
    );
    $CRUD->insert($table,$data);
	
	?>