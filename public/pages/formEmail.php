<?php
    if(isset($_GET["err"])){
?>
        <div class="container-fluid bg-danger my-3">
<?php
            switch($_GET["err"]){
                case "champ":
                    echo "<h3 class='txtBlack'><strong>Remplisez tous les champs</strong></h3>";
                break;
            }
            if(isset($_GET["mail"])){
                switch($_GET["mail"]){
                    case "ok":
                        echo "
                                <p><strong>votre e-mail a bien etait envoyer</strong></p>
                                <hr>
                                <p>l'équipe met tous en oeuvre pour vous repondrent dans les plus brefs délais.</p>
                            ";
                    break;
                }
            }
?>
        </div>
<?php        
    }            
?>

<div class="container-fluid bg-dark my-3 text-light w-75">
    <div class="row">
        <h2 class='col-12 text-center '>Formulaire de contact</h2>
    </div>

    <form action="public/functions/sendmail.php" method="post" class="row">
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="name">Nom</label>
            <input id="name" name="name" type="text" class="form-control" value="">
        </div>
        <div class="col-sm-12 col-md-6 my-2">
            <label class="form-label" for="surname">Prénom</label>
            <input id="surname" name="surname" type="text" class="form-control" value="">
        </div>
        <div class="col-sm-12 my-2">
            <label for="mail">Votre e-mail</label>
            <input id="mail" name="mail" type="mail" class="form-control" value="">
        </div>
        <div class="col-sm-12 my-2">
            <label class="form-label" for="subject">Sujet</label>
            <input type="text" name="subject"  class="form-control">
        </div>
        <div class="col-sm-12 my-2">
            <label class="form-label" for="msg">Message a envoyer</label>
            <textarea id="msg" name="msg" rows="10" cols="50" class="form-control"></textarea>
        </div>

        <div class="col-sm-12 my-2">
            <button class="btn btn-success" type="submit" name="submit">Envoyer</button>
        </div>
    </form>
</div>