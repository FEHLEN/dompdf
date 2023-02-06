<?php
  use Dompdf\Dompdf;
  use Dompdf\Options;
  //Connexion à la base de données
  require_once "services/connect.php";
  //requete sql
  $sql = "SELECT * FROM clients ORDER BY id DESC";
  $req = $db->query($sql);
  $clients = $req->fetchAll(PDO::FETCH_OBJ);



  require_once "services/dompdf/autoload.inc.php";
  $date = date('d-m-y h:i:s' );
  $options = new Options();
  //Pour gérer la font
  $options->set('defaultFont', 'Courier');
   //Pour gérer les images
  $options->set('isRemoteEnabled', true); 
  
  ob_start();//On ouvre la fonction de stockage
  //On a besoin du document html contenant les informations et les balises.
  require_once "dompdf-clients-html.php";
  $html = ob_get_contents(); //Cette fonction stocke dans une variable le contenu html
  ob_end_clean();//On stop

  $pdf = new Dompdf($options);
  $pdf->loadHtml($html);
  //$pdf->loadHtml($html);
  $pdf->setPaper('A4', 'landscape');
  //donne un nom au fichier téléchargé
  $fichier = 'Liste-clients.pdf';
  $pdf->render();
  $pdf->stream($fichier);


?>