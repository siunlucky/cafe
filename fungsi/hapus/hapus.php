<?php

session_start();
if (!empty($_SESSION['admin'])) {
    require '../../config.php';
    if (!empty($_GET['kategori'])) {
        $id = $_GET['id'];
        $data[] = $id;
        $sql = 'DELETE FROM kategori WHERE id_kategori=?';
        $row = $config->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=kategori&&remove=hapus-data"</script>';
    }

    if (!empty($_GET['meja'])) {
        $id = $_GET['id'];
        $data[] = $id;
        $sql = 'DELETE FROM meja WHERE id_meja=?';
        $row = $config->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=meja&&remove=hapus-data"</script>';
    }

    if (!empty($_GET['barang'])) {
        $id = $_GET['id'];
        $data[] = $id;
        $sql = 'DELETE FROM barang WHERE id_barang=?';
        $row = $config->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=barang&&remove=hapus-data"</script>';
    }

    if (!empty($_GET['member'])) {
        $id = $_GET['id'];
        $data[] = $id;
        $sql = 'DELETE FROM member WHERE id_member=?';
        $row = $config->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=userList&&remove=hapus-data"</script>';
    }

    if (!empty($_GET['userList'])) {
        error_reporting(E_ALL);
        ini_set('display_errors', 1);
        $id = $_GET['id'];
        $data[] = $id;

        $sql1 = 'SELECT gambar FROM member WHERE id_member=?';
        $row1 = $config->prepare($sql1);
        $row1->execute([$id]);
        $currentImage = $row1->fetchColumn();

        if (!empty($currentImage)) {
            $imagePath = $_SERVER['DOCUMENT_ROOT'] . "/UKK-WEB/CafeCabs/assets/img/user/" . $currentImage;
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $sql = 'DELETE FROM member WHERE id_member=?';
        $row = $config->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=userList&&remove=hapus-data"</script>';
    }

    if (!empty($_GET['jual'])) {
        $dataI[] = $_GET['brg'];
        $sqlI = 'select*from barang where id_barang=?';
        $rowI = $config->prepare($sqlI);
        $rowI->execute($dataI);
        $hasil = $rowI->fetch();

        /*$jml = $_GET['jml'] + $hasil['stok'];

        $dataU[] = $jml;
        $dataU[] = $_GET['brg'];
        $sqlU = 'UPDATE barang SET stok =? where id_barang=?';
        $rowU = $config -> prepare($sqlU);
        $rowU -> execute($dataU);*/

        $id = $_GET['id'];
        $data[] = $id;
        $sql = 'DELETE FROM penjualan WHERE id_penjualan=?';
        $row = $config->prepare($sql);
        $row->execute($data);
        echo '<script>window.location="../../index.php?page=jual"</script>';
    }

    if (!empty($_GET['penjualan'])) {
        $sql = 'DELETE FROM penjualan';
        $row = $config->prepare($sql);
        $row->execute();
        echo '<script>window.location="../../index.php?page=jual"</script>';
    }

    if (!empty($_GET['laporan'])) {
        $sql = 'DELETE FROM nota';
        $row = $config->prepare($sql);
        $row->execute();
        echo '<script>window.location="../../index.php?page=laporan&remove=hapus"</script>';
    }
}
