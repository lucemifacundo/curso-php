<div class="titulo">Interação CSS</div>

<h1 center>
    
    <?php
    echo 'ola';
    echo '<small>';
    echo 'Mundo';
    echo '</small> <br>';
    ?>
</h1>
 
<?= "<div> Outra forma de me 'expressar' ! <div>" ?>
<?= "<div azul center> Outra forma de me 'expressar' ! <div>" ?>

 
<br>
<!-- 
<div ><button><?= "Legal" ?></button></div>-->
<div center><button><?= "Legal" ?></button></div>


<style>
    button {
        padding: 5px 20px;
      /* padding: 5px <?php 2 * 10 ?>px;*/
       background-color:#4286f4;
       color: #eee;
       font-weight:bold;
       border-radius: 10px;
    }
      
       /* qual que elemento que tenha essa propriedade center re
       cebe seu estilo */
       [center]{
        display: flex;
        justify-content:center;

       }
       [azul]{
        color:#4286f4;

       }
       [dobro]{
        /*font-size:2rem;*/
        font-size: <?= 10 - 5?>rem;
       }
</style>