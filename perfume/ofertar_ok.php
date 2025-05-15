<?php
    //echo "<pre>";
   //print_r($_POST);

   include_once "../class/perfume.class.php";
   include_once "../class/perfumeDAO.class.php";

   $obj = new perfume();
   $obj->setIdperfume($_POST["idperfume"]);
   $obj->setOfertar($_POST["oferta"]);

   $objDAO = new perfumeDAO();
   $retorno = $objDAO->Ofertar($obj);
   if($retorno)
        header("location:listar.php?ofertarOk");
    else
        header("location:listar.php?ofertarErro");
?>