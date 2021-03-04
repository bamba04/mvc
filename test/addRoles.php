<?php
    require_once '../bootstrap.php';
    
    $roles = new Roles();
    //$roles->setId();
    $roles->setNom("ROLES_USER");

    $entity->persist($roles);
    $entity->flush();

    echo $roles->getId();

?>