<?php

		namespace App\Controllers;
		use App\Models\HistoriModel;

		class HistoriController extends BaseController
		{
			protected $histori;

			function __construct()
			{
				helper('form');
				helper('number');
				$this->validation = \Config\Services::validation();
				$this->histori = new HistoriModel();
			}

            public function index()
			{
				$data['items'] = $this->histori->findAll();
				return view('v_historibelanja', $data);
			}

			public function delete($id)
			{
				$this->histori->delete($id);

				return redirect('historibelanja')->with('success','Data Berhasil Dihapus');
			}

			public function update($id)
			{
				$sql = "UPDATE transaksi SET status = 1 WHERE id = ?";

				$this->histori->query($sql, [$id]);

				return redirect('historibelanja')->with('success','Data Berhasil Diubah');
			}
		}