<?php  
session_start(); 
$cle = $_POST['cle'];
require_once 'Autoload.php';
Autoload::loadClass();
$bdd = Database::connect();
// ou en ligne $bdd = database::connectOnline();
$manager = new Managers($bdd);
$config= new AllConfig();
$gestion= new GestionMaisonManager($bdd);

switch ($cle) {
  case 'deconnexion':
    session_destroy();
    header('Location: /GestionMaison');
    break;
  case 'login':
  			if ($manager->ifEntiterExist('users', 'email', trim(htmlentities($_POST['email'])), 'psw', trim(htmlentities($_POST['psw'])))) {
          $_SESSION['user']=$manager->getEntiterUnique('users','email',trim(htmlentities($_POST['email'])), 'psw',trim(htmlentities($_POST['psw'])));
          $_SESSION['parametreUser']=$manager->getEntiterUnique('parametre_user','id_user',$_SESSION['user']['user_id_unique']);
          $_SESSION['connect']='ok';
  				header('Location: /GestionMaison/Acceuil');
  			} else{
          header('Location: /GestionMaison');
        }
    break; 
  
  case $config->get('Frontend','ajout_valeur'):
          $From=$_POST['from'];unset($_POST['from']);
          $table=$_POST['tb'];unset($_POST['tb']);
          $LocationGo=$_POST['locationGo'];unset($_POST['locationGo']);
          $LocationFrom=$_POST['locationFrom'];unset($_POST['locationFrom']);
          unset($_POST['cle']);
          unset($_POST['Di']);
          $idunique=$_POST['ique'];unset($_POST['ique']);
          
          $infocomplementaire=[
                  'creat_date'=>$manager->getCurentimeAs('dateTime'),
                  'edit_date'=>$manager->getCurentimeAs('dateTime'),
                  'id_user'=>$_SESSION['user']['user_id_unique'],
                  $idunique=>$manager->getCurentimeAs('string')
                ];
          $arrayInfos=array_merge($infocomplementaire,$_POST);

          if ($manager->AddUserInfos($table, $arrayInfos)) {
            if ($table=='locataire_has_chambre') {


              $LocationGo="/GestionMaison/Form/Payement/".$config->get('Frontend','payement_loyer')."/".$_POST['id_locataire'];
            }

            if ($From=='js') {
                    echo  json_encode(['save'=>"save",'goto'=>$LocationGo])  ;
                    die();
                }else{
                  header('Location: '.$LocationGo);
                }
          }else{

             if ($From=='js') {
                echo  json_encode(['save'=>"error",'goto'=>$LocationFrom])  ;
                die();
              }else{
                header('Location: '.$LocationFrom);
              }
          }

  	break;
    case $config->get('Frontend','payement_loyer'):

            $chambre=$manager->getEntiterUnique('chambre','chambre_id_unique',$_POST['id_chambre']);
            $montantChambre=(int)$chambre['prix_chbr'];
            $montant=(int) trim(htmlentities($_POST['montant']));
            $id_locataire=trim(htmlentities($_POST['id_locataire']));
            $id_typeloyer=trim(htmlentities($_POST['id_type']));
            setlocale (LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
            $moiAnnee=utf8_encode(strftime("%B/%g",strtotime(trim(htmlentities($_POST['date_payement'])))));


          $From=$_POST['from'];unset($_POST['from']);
          $table=$_POST['tb'];unset($_POST['tb']);
          $LocationGo=$_POST['locationGo'];unset($_POST['locationGo']);
          $LocationFrom=$_POST['locationFrom'];unset($_POST['locationFrom']);
          unset($_POST['cle']);
          unset($_POST['Di']);
          
          $idunique=$_POST['ique'];unset($_POST['ique']);
          
          

          
            // VERIFICATION DE L'EXISTANCE DE PAYEMENT 


            $array=[
                  'id_chambre'=>$chambre['chambre_id_unique'],
                  'id_locataire'=>$id_locataire,
                  'id_typeloyer'=>$id_typeloyer,
                  'moiAnnee'=>$moiAnnee
                  ];
              $verificationPayement=$gestion->PayementExiste($array);

            if ($verificationPayement==false) {

                 if ( $montantChambre > $montant) {
                    $totaliter=0;
                  }else{
                    $totaliter=1;
                  }


                      // AJOUT DE NOUVEAU PAYEMENT EN CAS D'INEXISTANCE
                  $infocomplementaire=[
                          'creat_date'=>$manager->getCurentimeAs('dateTime'),
                          'edit_date'=>$manager->getCurentimeAs('dateTime'),
                          'id_user'=>$_SESSION['user']['user_id_unique'],
                          'totaliter'=>$totaliter,
                          'moi_de_payement'=>$moiAnnee,
                          $idunique=>$manager->getCurentimeAs('string')
                        ];

                        $arrayInfos=array_merge($infocomplementaire,$_POST);

                        if ($manager->AddUserInfos($table, $arrayInfos)!=false) {
                               if ($From=='js') {
                                      
                                        echo  json_encode(['save'=>"save",'goto'=>$LocationGo])  ;
                                        die();
                                    }else{
                                      header('Location: '.$LocationGo);
                                    }
                         
                        }else{
                           if ($From=='js') {
                                       
                                        echo  json_encode(['save'=>"error",'goto'=>$LocationFrom])  ;
                                        die();
                              }else{
                                header('Location: '.$LocationFrom);
                              }
                        }

                
            }else{

                // MODIFICATION DE L'EXISTANT ET AJOUT DU MONTANT
                $NewMontant=(int)$verificationPayement['montant']+$montant;
                  if ( $montantChambre > $NewMontant) {
                    $totaliter=0;
                  }else{
                    $totaliter=1;
                  }
                 $infocomplementaire=[
                  
                  'edit_date'=>$manager->getCurentimeAs('dateTime'),
                  'montant'=>$NewMontant,
                  'totaliter'=>$totaliter,
                  'moi_de_payement'=>$moiAnnee,
                ];

                // $gestion->CorrectOldPayement($array);

                 if ($manager->EditUserInfos('payement', $infocomplementaire , 'payement_id_unique', $verificationPayement['payement_id_unique'])) {
                       if ($From=='js') {
                                    echo  json_encode(['save'=>"save",'goto'=>$LocationGo])  ;
                                    die();
                                }else{
                                  header('Location: '.$LocationGo);
                                }
                   
                  }else{
                    if ($From=='js') {
                                        echo  json_encode(['save'=>"error",'goto'=>$LocationFrom])  ;
                                        die();
                              }else{
                                header('Location: '.$LocationFrom);
                              }
                    

                  }
            }







    break;
    case $config->get('Frontend','edit_payement'):
                $table=$_POST['tb'];unset($_POST['tb']);
                $cle=$_POST['cle'];unset($_POST['cle']);
                $From=$_POST['from'];unset($_POST['from']);
                $LocationGo=$_POST['locationGo'];unset($_POST['locationGo']);
                $LocationFrom=$_POST['locationFrom'];unset($_POST['locationFrom']);
                $ique=$_POST['ique'];unset($_POST['ique']);
                $Di=$_POST['Di'];unset($_POST['Di']);
                setlocale (LC_TIME, 'fr','fr_FR','fr_FR@euro','fr_FR.utf8','fr-FR','fra');
                $moiAnnee=utf8_encode(strftime("%B/%g",strtotime(trim(htmlentities($_POST['date_payement'])))));

                $infocomplementaire=[
                  'moi_de_payement'=> $moiAnnee,
                  'edit_date'=>$manager->getCurentimeAs('dateTime')

                ];

                $arrayInfos=array_merge($infocomplementaire,$_POST);
               
              

                if ($manager->EditUserInfos($table, $arrayInfos , $ique, $Di)) {
                  if ($From=='js') {
                    echo  json_encode(['save'=>"save",'goto'=>$LocationGo])  ;
                    die();
                      }else{
                        header('Location: '.$LocationGo);
                      }
                  
                  }else{
                      if ($From=='js') {
                            echo  json_encode(['save'=>"error",'goto'=>$LocationFrom])  ;
                              die();
                        }else{
                          header('Location: '.$LocationFrom);
                        }
                  }
           
    break;
  case $config->get('Frontend','edit_valeur'):
                $table=$_POST['tb'];unset($_POST['tb']);
                $cle=$_POST['cle'];unset($_POST['cle']);
                $From=$_POST['from'];unset($_POST['from']);
                $LocationGo=$_POST['locationGo'];unset($_POST['locationGo']);
                $LocationFrom=$_POST['locationFrom'];unset($_POST['locationFrom']);
                $ique=$_POST['ique'];unset($_POST['ique']);
                $Di=$_POST['Di'];unset($_POST['Di']);

                $infocomplementaire=[
                  'edit_date'=>$manager->getCurentimeAs('dateTime')
                ];
                $arrayInfos=array_merge($infocomplementaire,$_POST);
               

                if ($manager->EditUserInfos($table, $arrayInfos , $ique, $Di)) {

                   
                    if ($From=='js') {
                    echo  json_encode(['save'=>"save",'goto'=>$LocationGo])  ;
                    die();
                      }else{
                        header('Location: '.$LocationGo);
                      }
                  }else{
                      if ($From=='js') {
                          echo  json_encode(['save'=>"error",'goto'=>$LocationFrom])  ;
                            die();
                      }else{
                        header('Location: '.$LocationFrom);
                      }

                  }
           
    break;
  
     case 'getChambre':
     $htmlselect="";
     $idmaison=$_POST['id_Maison'];

      $INFOS=$gestion->GetChambreLibrePour('UneMaison', $idmaison);
        if (empty($INFOS)) {
          $htmlselect='<option value=""  selected>Aucune chambre disponibe ou libre</option>';
        }else{
           foreach ($INFOS as $infos ) {
                          $htmlselect=$htmlselect.'<option value="'.$infos['chambre_id_unique'].'" >'.$infos['chambre'].'</option>';
                        }
        }
                       
        echo($htmlselect) ;
              
      break; 

      case 'getChambreAndMaison':
               $chambreselect="";
               $maison="";
               $idmaison="";
               $idlocataire=$_POST['id_locataire'];

               $INFOSCHAMBRE=$manager->getEntiterM('locataire_has_chambre','id_locataire', $idlocataire);
              
                     foreach ($INFOSCHAMBRE as $infos ) {
                          $chambre=$manager->getEntiterUnique('chambre', 'chambre_id_unique',$infos['id_chambre'] );
                                    $chambreselect=$chambreselect.'<option value="'.$chambre['chambre_id_unique'].'" >'.$chambre['chambre'].'</option>';
                                    $idmaison=$chambre['maison_id_maison'];
                                  }

                  
                $infos=$manager->getEntiterUnique('maison', 'maison_id_unique',$idmaison );

                          $maison=$maison.'<option selected value="'.$infos['maison_id_unique'].'" >'.$infos['nom'].'</option>';
            echo json_encode(['maison'=>$maison,'chambre'=>$chambreselect]);

        break;
      case 'GetdetailDette':
              $idchambre=$_POST['idchambre'];
              $idlocataire=$_POST['idlocataire'];
              $typepayement=$_POST['typepayement'];
              $detailMoiNonpayéEntotalité=$gestion->GetMontantRegulariserDetail([
                                                              'id_chambre'=>$idchambre,
                                                              'id_locataire'=>$idlocataire,
                                                              'id_typeloyer'=>$typepayement
                                                            ]);

              
              $ul='<h5>Mois non payé en totalité</h5> <ul>';
              $ulfermer='</ul>';
              $li='';
              foreach ($detailMoiNonpayéEntotalité as $Ondetail) {

                $li=$li.'<li> <code>'.$Ondetail['moi'].'</code> : a payé  '.$Ondetail['payer'].'  il reste '.$Ondetail['prixRestant'].' FCFA</li>';   
              }

              $moisNonpayéEntotalité=$ul.$li.$ulfermer;

              $detailMoiNonpayé=$gestion->GetMoiNonPayer($idlocataire,
                                                          $typepayement,
                                                          $idchambre
                                                            );

              $ul2='<h5>Mois non payé : '.$detailMoiNonpayé['chambreprix'].' FCFA</h5> <ul>';
              unset($detailMoiNonpayé['chambreprix']);
              $ulfermer2='</ul>';
              $li2='';
              foreach ($detailMoiNonpayé as $Ondetail) {

                $li2=$li2.'<li> <code>'.$Ondetail.'</code> </li>';   
              }
              $moisNonpayé=$ul2.$li2.$ulfermer2;


              $detailHtml=$moisNonpayéEntotalité.$moisNonpayé;

              echo json_encode($detailHtml);
        break;
        case 'del':
            $checkby= trim(htmlentities($_POST['valeur']));
            $valueckeck= trim(htmlentities($_POST['id']));
            $table= trim(htmlentities($_POST['tb']));
            $manager->DelUserInfos($table, $checkby, $valueckeck);
            header('Location: '.$_POST['goto']);
          break;
        case $config->get('Frontend','parametre'):
            $table='parametre_user';
            $cle=$_POST['cle'];unset($_POST['cle']);
            $From=$_POST['from'];unset($_POST['from']);
            $ique='id_user';
            $Di=$_SESSION['user']['user_id_unique'];
            $type_parametre=$_POST['type'];unset($_POST['type']);
                
                switch ($type_parametre) {
                  case 'TypeLoyer':
                    $arrayInfos1=$_POST;
                    break;
                }




                $infocomplementaire=[
                  'edit_date'=>$manager->getCurentimeAs('dateTime')
                ];
                
                $arrayInfos=array_merge($infocomplementaire,$arrayInfos1);


                if ($manager->EditUserInfos($table, $arrayInfos , $ique, $Di)) {
                  unset($_SESSION['parametreUser']);
                   $_SESSION['parametreUser']=$manager->getEntiterUnique('parametre_user','id_user',$_SESSION['user']['user_id_unique']);
                    if ($From=='js') {
                    echo  json_encode(['save'=>"save",'goto'=>$LocationGo])  ;
                    die();
                      }else{
                        header('Location: /GestionMaison/Parametre/Application');
                      }
                  }else{
                      if ($From=='js') {
                          echo  json_encode(['save'=>"error",'goto'=>$LocationFrom])  ;
                            die();
                      }else{
                        header('Location: '.$LocationFrom);
                      }
                  }
            header('Location: /GestionMaison/Parametre/Application');
          break;
  default:
    # code...
    break;
}