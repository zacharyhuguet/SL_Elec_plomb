<?php 
    $auth = 0;
    

    include 'lib/includes.php';
    include 'partials/header.php'; 





function	CMD_RESET ()	{
  //
  //  Détruire la session (= déconnecter l'utilisateur) 
  //  
  //  
  //- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
    session_destroy (); //la session est déjà ouverte
  }//--------------------------------------------------------

function	CMD_DIR ()	{
//
//  Afficher le répertoire courant : session(home+pwd)
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -

  $curdir = $_SESSION['home'].$_SESSION['pwd'] ;

  echo "<center>DIR = $curdir</center><br>";
  $files1 = scandir($curdir);

  echo "<table cellspacing=0 cellpadding=0 border=1 align='center' style='border-color:green'>\n";
  echo "<tbody valign=center>\n";
  echo "<tr><th><a href='?CMD=CD&name=..'><img title='Remonter' height=15 src='admin/flechehaut.png'></a></th><th> Nom </th><th><a href='?CMD=CD&name=/'><img title='Racine' height=30 src='admin/maison.png'></a>Racine</th><th><a href='?CMD=MKDIR'><img title ='Nouveau Répertoire' height=20 src='admin/dossier.png'></a><a href='?CMD=MKFILE'><img title ='Nouveau Fichier' height=20 src='admin/fichier.png'></a></th>
  </tr>\n";

  foreach ($files1 as $key => $value)	// scanner répertoire
  { if( ! is_dir($curdir.$value) )  continue;  // SEULEMENT DIR
    if( $value == '.'  )			continue;  // suivant
	if( $value == '..' )			continue;  // suivant

	echo "<tr>" ;		// traitement normal pour un répertoire 
	echo "<td><a href='?curdir=$curdir&newdir=$value' title='Descendre'><img height=15 src='dossier.jpg'></a> </td>";
	echo "<td>". $value . "</td>" ;
	echo "<td> <a href='?CMD=CD&name=$value'> DIR </a> </td>";
  echo "<td> <a href='?CMD=RMDIR'> DELL </a> </td>";
    echo "</tr>\n";
  }
  foreach ($files1 as $key => $value)	// scanner répertoire
  { if( is_dir($curdir.$value) )	continue; // SEULEMENT FILE
    if ($value == '.')continue;
    if ($value == '..')continue;


	echo "<tr>" ;		// traitement normal pour un fichier
	echo "<td align=center><a href='?CMD=SHOW&name=$value'><img height=15 src='fichier.jpg'></td>" ;
	echo "<td>". $value . "</td>" ;
  //echo "<td> <button> <a href='Supprimer.php?fich=".$value."'>Supprimer</a> </button> </td>";
    echo "<td> &nbsp; FILE &nbsp; </td>";
    echo "<td> &nbsp; <a href='?CMD=DEL&name=value'> DELL</a> &nbsp; </td>";
    echo "</tr>\n";
  }
  echo "</table>\n";
}//--------------------------------------------------------
function	CMD_CD ()	 {
//
//  Changer le répertoire courant : session(pwd)
//  le nom du sous-répertoire est dans le param url:name
//  si le nom = '..', il faut remonter d'un niveau...
//- - - - - - - - - - - - - - - - - - - - - - - - - - - - -
	error_reporting(0);
$cible = $_GET['name'];
error_reporting(all);
if ($cible == "..")
{
  $pwd = $_SESSION['pwd'];// ancien  répertoire
  // $_SESSION['pwd'] = dirname ($pwd) ;
  $pwd = dirname ($pwd) ; // ancien  répertoire
  $pwd[0] = '/' ; // forcer / à la racine
  if ($pwd !='/') $pwd = $pwd.'/'; // +/ à la fin 
  $_SESSION['pwd'] = $pwd; // nouveau répertoire 

}
  else if ($cible =='/') //==Retour à la racine 
  {$_SESSION['pwd']='/';

  }


  


// Descendre dans un sous-répertoire 
 else $_SESSION['pwd'] = $_SESSION['pwd'].$cible.'/' ;
}//--------------------------------------------------------

function CMD_RMDIR(){
  $cible = $_GET['name'];
  $path= $_SESSION['home'].$_SESSION['pwd'].$cible;
  rmdir($path);
}

function CMD_MKDIR(){
  //
  // Créer un bouveau répertoire
  //- - - - - -  - - -  - - -  - - - -  - - - - -  - - - -
  $cpt = 1 ;
  $ok = false ;
  do
  {

  
    $home = $_SESSION['home'];
    $pwd = $_SESSION['pwd'];
    $current = $home.$pwd ; // Repertoir ecourant
    $name ='dir'.$cpt ; // Nouveau nom
    $path = $current.$name ; // Chemin Chemin du nouveau dir
    if( ! file_exists ($path) ) // S'il n'existe pas déjà
      {
      $ok = mkdir ($current.'dir'.$cpt); // le créer

      }
      
      $cpt++;
  }
  while ( ! $ok) ;
}
function CMD_MKFILE(){
  //
  // Créer un bouveau Fichier
  //- - - - - -  - - -  - - -  - - - -  - - - - -  - - - -
 $cpt = 1 ;
  $ok = false ;
  do
  {
    $home = $_SESSION['home'];
    $pwd = $_SESSION['pwd'];
    $current = $home.$pwd ; // Repertoir ecourant
    $name ='file'.$cpt.".txt" ; // Nouveau nom
    $path = $current.$name ; // Chemin Chemin du nouveau dir
    if( ! file_exists ($path) ) // S'il n'existe pas déjà
      {
      $handle = fopen($path,"w");
      fclose($handle);
      $ok = true; // le créer

      }
      
      $cpt++;
  }
  while ( ! $ok) ;
}
function CMD_SHOW(){
  //
  //Voir
  //===================================
	$cible = $_GET['name'];
echo "Contenu du fichier $cible :<br>";
echo "<hr>";


$lines = file($cible);

// display file line by line
echo '<center><textarea cols=150 rows=20>';
foreach($lines as $line_num => $line) {
    echo "# {$line_num} : ".htmlspecialchars($line);
}
echo '</textarea></center><hr>';



}
function CMD_DEL(){
  //
  //Supprilmer
  //===================================
  $ci;
echo 'COMMANDE DEL - A PROGRAMMER!<hr>';



}

{//======PROGRAMME PRINCIPAL===============
// Session :
// - user   : username
// - status : droit de l'utilisateur (user, admin, root)
//
// - home   : racine du répertoire explorable
//	C:/wamp64/www/test ...
//	C:/wamp64/www/users/dupont	racine de l'utilisateur DUPONT
//	C:/wamp64/www/users/durand	racine de l'utilisateur DURAND
//
// - pwd  : répertoire courant sous la racine
//		/				à la racine
//		/Test/			dans un sous répertoire
//		/Test/Machin/	dans un sous-sous répertoire
//
 
  if( ! isset($_SESSION['home']) )	// session n'existait pas
  {	$_SESSION['home'] = 'C:\wamp64/www/SL elec plomb';
	$_SESSION['pwd' ] = '/' ;
  }
  //--- ici, la session existe : Affichage pour débug !
  echo '<hr><pre>SESSION :<br>' ;
  echo 'home = '.$_SESSION['home'].'<br>' ;
  echo 'pwd  = '.$_SESSION['pwd' ].'<br>' ;
  echo '</pre><hr>' ;

  //--- Vérifier les paramètres ...
$CMD = 'RIEN'; // Valeur bidon
  if( count($_GET) != 0 )	// s'il y a des params
  { if( ! isset($_GET['CMD']) )
	  echo 'ERREUR CMD non définie' ;
	else
	{ $CMD = $_GET['CMD'] ;
	  switch( $CMD ) 
	  { case 'CD' :	CMD_CD();	break;
      case 'DEL' :	CMD_DEL();	break;
      case 'RMDIR' :	CMD_RMDIR();	break;
      case 'RESET' :	CMD_RESET();	break;
      case 'MKDIR' :	CMD_MKDIR();	break;
      case 'MKFILE' :	CMD_MKFILE();	break;
      case 'SHOW' 	:	CMD_SHOW();	break;
		default : echo 'ERREUR CMD inconnue '.$CMD ;
  } } }
if ($CMD != 'RESET')
  CMD_DIR();	// Afficher le contenu à chaque fois !
}
?>
<center><a href='?CMD=CD'>Racine</a> -
        <a href='?CMD=RESET'>Reset</a>
</center>

</b></tt>

<?php 
    include 'partials/footer.php'; 
?>