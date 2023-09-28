<?php

		namespace App\Controllers;
		use App\Models\MenuTransaksiModel;

		class MenuTransaksiController extends BaseController
		{
			protected $transaction;

			function __construct()
			{
				helper('form');
				helper('number');
				$this->validation = \Config\Services::validation();
				$this->transaction = new MenuTransaksiModel();
			}

            public function index()
			{
				$data['items'] = $this->transaction->findAll();
				return view('v_transaksi', $data);
			}

			public function delete($id)
			{
				$this->transaction->delete($id);

				return redirect('transaksi')->with('success','Data Berhasil Dihapus');
			}

			public function update($id)
			{
				$sql = "UPDATE transaksi SET status = 1 WHERE id = ?";

				$this->transaction->query($sql, [$id]);

				return redirect('transaksi')->with('success','Data Berhasil Diubah');
			}
		}