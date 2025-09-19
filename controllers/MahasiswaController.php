<?php
include_once "models/Mahasiswa.php";

class MahasiswaController {
    private $model;

    public function __construct($db) {
        $this->model = new Mahasiswa($db);
    }

    public function index() {
        $result = $this->model->getAll();
        include "views/mahasiswa_list.php";
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->create($_POST['nim'], $_POST['nama'], $_POST['jurusan']);
            header("Location: index.php");
        } else {
            include "views/mahasiswa_create.php";
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->model->update($id, $_POST['nim'], $_POST['nama'], $_POST['jurusan']);
            header("Location: index.php");
        } else {
            $data = $this->model->getById($id);
            include "views/mahasiswa_edit.php";
        }
    }

    public function delete($id) {
        $this->model->delete($id);
        header("Location: index.php");
    }
}
?>
