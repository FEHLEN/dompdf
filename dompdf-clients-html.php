<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste Clients en PDF</title>
    <style>
      table{border-bottom: 1px solid black; margin:0; width: 100%}
      thead{height: 2cm;} tr{height: 1cm; text-align: center;} th, td{padding: 5px; border: 1px solid grey;}
      /*tr:nth-child(1){background-color: #dddddd;} permet de griser une ligne sur deux*/
    </style>
   
</head>
<body>
  <div class="listeClients-pdf">
    <img src="http://videosphpaaz/assets/images/logo-renove.PNG" width="80" height="80"/>
    <h1> RENOVE TOUT</h1>
    <div class="liste-clients-pdf">
    <h2>Liste des clients</h2>
        <table class="mytable">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>N° Client</th>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Entreprise</th>
                    <th>Siret</th>
                   
                </tr>
                 <tr>
                    <th>Adresse</th>
                    <th>Postal</th>
                    <th>Ville</th>
                    <th>Téléphone</th>
                    <th>Mail</th>
                    <th>Date</th>
                </tr>
                
            </thead>
            <tbody>
                <?php foreach ($clients as $client): ?>
                
                  <tr>
                    <td><?= $client->id?></td>
                    <td><?= $client->numeroclient ?></td>
                    <td><?= $client->nomdirigeant ?></td>                   
                    <td><?= $client->prenom ?></td>                  
                    <td><?= $client->nomentreprise ?></td>
                    <td><?= $client->siret ?></td>
                  </tr>
                 
                  <tr>
                    <td><?= $client->adresse ?></td>
                    <td><?= $client->postal ?></td>
                    <td><?= $client->ville ?></td>
                    <td><?= $client->telephone?></td>
                    <td><?= $client->mail?></td>
                    <td><?= $client->date ?></td>
                  </tr>
                  <tr></tr>
                <?php endforeach; ?>  
               
            </tbody>
        </table>
        <h4>Imprimé le <?php echo $date ?></h4>

    </div>
  </div>
</body>
</html>