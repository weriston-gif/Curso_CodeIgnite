<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Web Site</title>
        <link href="<?php echo base_url(); ?>Public/css/styles.css" rel="stylesheet"/>
        <?php if(isset($styles)){
            foreach ($styles as $valor){
                $shef = base_url(). "Public/css/".$valor ?>
                <link href="<?=$shef?>" rel="stylesheet"/>

            <?php }
            }?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class=" nav-header-weriston navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
            <div class="container">
                <div class="navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Projects</a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>">Contact</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="<?php echo base_url() ?>index.php/restrict">Login</a></li>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        
     