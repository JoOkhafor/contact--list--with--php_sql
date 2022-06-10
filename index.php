<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css"  rel="stylesheet" type="text/css" >
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <title>SQL Pratice</title>
</head>
<body>
    <div class="form_intro">
        <div class="grid-unit-6 center">
            <h2>Formulaire de contact</h2>
            <span class="subtitle">Lorem ipsum dolor sit amet.</span>
        </div>

        <div class="grid-unit-6 text-right search-box">
           <a href="contacts-table.php" class="btn btn-danger">
              Voir la liste des contacts
              </a>
        </div>
    </div>
    <div class="wrap">
        <div class="form-wrapper">
            <form action="insert_process.php" method="post">
               <div class="input-wrap">
                   <label for="">Nom</label>
                   <input type="text" name="nom" id="">
               </div> 

               <div class="input-wrap">
                    <label for="">Message</label>
                    <textarea name="message_post" id="" cols="30" rows="10"></textarea>
               </div>
            <div class="custom-select">
                <label for="">Priorité</label>
                <select name="priorite">
                  <option>Sélectionnez:</option>
                  <option>Faible</option>
                  <option>Moyen</option>
                  <option>Élevé</option>
                </select>
            </div>
              
               <div class="input-wrap ">
                    <label for="">Type</label>
                    <fieldset>
                       <label class="select_label"><input type="radio" name="type" value="Plainte"><span> Plainte</span></label>
                       <label class="select_label"><input type="radio" name="type" value="Suggestion"><span>Suggestion</span></label>
                    </fieldset>
               </div> 

               <div class="input-wrap checkbox-wrap d-flex">
                <input type="checkbox" name="termes" class="switch" id="switch-1"/>Jacceepte les termes conditions
               </div>

               <button class="btn" type="submit">Valider</button>


            </form>
        </div>
    </div>


    <script src="ssets/js/script.js"></script>
</body>
</html>