<?php

return [

	'users' => [
        'admin' => 'Admin',
        'user' => 'User',
        'id' => 'ID',
        'name' => 'Name',
        'username' => 'Username',
		'email' => 'Email',
        'emal_verified' => 'Verified At',
		'password' => 'Password',
	],

    'transactions' => [
        'transaction' => 'Transaction',
        'stuff' => 'Stuff',
        'id' => 'ID',
        'client' => 'Client',
		'tanggal' => 'Date',
        'keterangan' => 'Information',
	],

    'suppliers' => [
        'supplier' => 'Supplier',
        'nama_supplier' => 'Supplier Name',
        'no_telp' => 'Phone',
        'alamat' => 'Address',
	],

    'stuffs' => [
        'id' => 'ID',
        'stuff' => 'Stuff',
        'nama_barang' => 'Stuff Name',
        'harga' => 'Price',
        'stok' => 'Stock',
        'supplier' => 'Supplier',
    ],

    'payments' => [
        'tgl_bayar' => 'Payment Date',
        'total_bayar' => 'Payment Total',
        'transaction' => 'Transaction',
        'id' => 'ID'
    ],

    'clients' => [
        'id' => 'ID',
        'client' => 'Client',
        'nama_pembeli' => 'Client Name',
        'jk' => 'Gender',
        'no_telp' => 'Phone',
        'alamat' => 'Address',
    ],

	'buttons' => [
        'dashboard' => 'Dashboard',
        'register' => 'Register',
        'data' => 'Data',
        'update' => 'Update',
		'create' => 'Create',
		'edit' => 'Edit',
		'show' => 'Detail',
		'delete' => 'Delete',
		'save' => 'Save',
		'cancel' => 'Reject',
		'back' => 'Back',
        'next' => 'Next',
        'search' => 'Search',
        'logout' => 'Logout',
        'login' => 'Login',
        'setting' => 'Setting',
    ],

    'errors' => [
        'index' => 'Get data failed!',
        'create' => 'Add data failed!',
        'edit' => 'Edit data failed!',
        'delete' => 'Delete data failed!',
        'search' => 'Search data failed!',
        'login' => 'Login failed!',
        'logout' => 'Logout failed!',
        'register' => 'Register failed!',
    ],

    'success' => [
        'index' => 'Get data successfully!',
        'create' => 'Add data successfully!',
        'edit' => 'Edit data successfully!',
        'delete' => 'Delete data successfully!',
        'search' => 'Search data successfully!',
        'login' => 'Login successfully!',
        'logout' => 'Logout successfully!',
        'register' => 'Register successfully!',
    ]
];
