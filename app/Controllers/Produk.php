<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;

class Produk extends ResourceController
{
    public function __construct()
    {
        $this->produk = new \App\Models\ProdukModel();
        $this->kategori = new \App\Models\KategoriModel();
        $this->status = new \App\Models\StatusModel();
    }
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $dataproduk = $this->produk->getproduk();

        return view('produk/index', ['produk' => $dataproduk]);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        $dataKategori = $this->kategori->findAll();
        $dataStatus = $this->status->findAll();

        return view('produk/new', ['kategori' => $dataKategori, 'status' => $dataStatus]);
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        
        $dataProduk = $this->request->getPost();
        $this->produk->insert($dataProduk);

        return redirect()->to('/produk');
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        $dataProduk = $this->produk->where('id_produk', $id)->first();
        $dataKategori = $this->kategori->findAll();
        $dataStatus = $this->status->findAll();

        return view('/produk/edit', ['produk' => $dataProduk, 'kategori' => $dataKategori, 'status' => $dataStatus]);
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $dataProduk = $this->request->getPost();
        $this->produk->where('id_produk', $id)->set($dataProduk)->update();

        return redirect()->to('/produk');
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $this->produk->delete($id);

        return redirect()->to('/produk');
    }
}
