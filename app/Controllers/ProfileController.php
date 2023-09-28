<?php

		namespace App\Controllers;
		use App\Models\ProfileModel;
        use App\Models\UserModel;

		class ProfileController extends BaseController
		{
			protected $profile;

			function __construct()
			{
				helper('form');
				$this->validation = \Config\Services::validation();
				$this->profile = new ProfileModel();
                $this->user = new UserModel();
			}

            public function view($username)
			{
                $data['profile'] = $this -> profile -> where('username', $username) -> findAll();
				return view('v_profile', $data);
			}

            public function edit_view($username)
            {
                $data['profile'] = $this -> profile -> where('username', $username) -> findAll();
                return view('v_editprofile', $data);
            }

            public function edit($id)
            {
                $password = md5($_POST['tpassword']);
                $alamat = $_POST['talamat'];
                $tgllahir = $_POST['ttgllahir'];
                $notelp = $_POST['tnotelp'];
                $email = $_POST['temail'];

                $sql = "UPDATE profile set password = '$password', alamat = '$alamat', tgllahir = '$tgllahir', notelp = '$notelp', email = '$email' WHERE id = '$id'";
                $sql2 = "UPDATE user set password = '$password' WHERE id = '$id'";

                $this -> profile -> query($sql);
                $this -> user -> query($sql2);

                $data['profile'] = $this -> profile -> where('id', $id) -> findAll();
                return view ('v_profile', $data);
            }

            public function displayManajemenUser()
            {
                $data['manajemenuser'] = $this -> profile -> findAll();
                return view ('v_manajemenuser', $data);
            }

            public function editPage($id)
            {
                $data['manajemenuser'] = $this -> profile -> where('id', $id) -> findAll();
                return view ('v_edituser', $data);
            }

            public function editUser($id)
            {
                $password = md5($_POST['tpassword']);

                $sql = "UPDATE profile set password = '$password' WHERE id = '$id'";
                $sql2 = "UPDATE user set password = '$password' WHERE id = '$id'";

                $this -> profile -> query ($sql);
                $this -> user -> query ($sql2);

                return redirect('manajemenuser')->with('success','Data Berhasil Diubah');
            }

            public function deleteUser($id)
            {
                $this->profile->delete($id);
                $this->user->delete($id);

				return redirect('manajemenuser')->with('success','Data Berhasil Dihapus');
            }

            public function tambahPage()
            {
                return view ('v_tambahuser');
            }

            public function tambahUser()
            {
                $username = $_POST['tusername'];
                $password = md5($_POST['tpassword']);
                $role = $_POST['trole'];

                $sql = "INSERT INTO user (username,password,role) values ('$username','$password','$role')";
                $sql2 = "INSERT INTO profile (username,password) values ('$username','$password')";

                $this -> user -> query($sql);
                $this -> profile -> query($sql2);

                return redirect('manajemenuser')->with('success','Data Berhasil Dibuat');
            }
		}