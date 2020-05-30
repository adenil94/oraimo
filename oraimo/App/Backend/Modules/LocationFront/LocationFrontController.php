 <?php
 

class LocationFrontController extends BackController
{
    /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison
 * @Copyright (c) Monxwe, 2019
 */

  public function executeIndex(HTTPRequest $request)
  {
    echo "string";
  } 

      /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Acceuil
 * @Copyright (c) Monxwe, 2019
 */
  public function executePageDacceuil(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $manager=$this->managers->getManagerOf('GestionMaison');
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Payement/'.$this->app->config()->get('payement_loyer').'/'.date('y').date('m').date('d'));
     
 
    $manager=$this->managers->getManagerOf('GestionMaison');
    $this->page->addVar('TousLesPayement', $manager->GetTableOf('TousLesPayement'));
    $this->page->addVar('maison', $manager->counts('maison','id_user',$_SESSION['user']['user_id_unique']));
    $this->page->addVar('chambre', $manager->counts('chambre','id_user',$_SESSION['user']['user_id_unique']));
    $this->page->addVar('locataire', $manager->counts('locataire','id_user',$_SESSION['user']['user_id_unique']));




    
  }
      /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Rapport/Maisons
 * @Copyright (c) Monxwe, 2019
 */
  
  public function executeTableMaison(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportMaison', $lienactiveRapport);
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Maison/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));

             

    $manager=$this->managers->getManagerOf('GestionMaison');
    $TableMaison=$manager->GetTableOf('maison');
    // $action=$request->getData('action');

    $this->page->addVar('TableMaison', $TableMaison);

  
  }
        /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Rapport/Chambres
 * @Copyright (c) Monxwe, 2019
 */
  public function executeTableChambreParMaison(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportChambres', $lienactiveRapport);
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Chambres/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));
    $manager=$this->managers->getManagerOf('GestionMaison');
    $TableChambre=$manager->GetTableOf('chambre');

    $this->page->addVar('TableChambre', $TableChambre);
    
  
  }
 
  /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Rapport/ChambresLibre
 * @Copyright (c) Monxwe, 2019
 */
//
    public function executeTableChambreLibre(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $manager=$this->managers->getManagerOf('GestionMaison');
    $TableChambre=$manager->GetTableOf('chambreLibre');

    $datenow = date("Y-m-d");

    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportChambresLibre', $lienactiveRapport);
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Chambres/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));

    $this->page->addVar('TableChambre', $TableChambre);
     
  
  }
  
  /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Parametre/Profil
 * @Copyright (c) Monxwe, 2019
 */
//
    public function executeParametreProfile(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $manager=$this->managers->getManagerOf('GestionMaison');
    
   $user=$manager->getEntiterUnique('users', 'user_id_unique', $_SESSION['user']['user_id_unique']);
   $this->page->addMultipleVar($user);
    $this->page->addVar('cle',$this->app->config()->get('edit_valeur'));
    $this->page->addVar('LocationGo','/GestionMaison/Parametre/Profil');
    $this->page->addVar('LocationFrom',$_SERVER['REQUEST_URI']);
    $this->page->addVar('tb','users');
    $this->page->addVar('ique','user_id_unique');
    $this->page->addVar('Di', $_SESSION['user']['user_id_unique']);


    $datenow = date("Y-m-d");

    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportChambresLibre', $lienactiveRapport);
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Chambres/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));

    
     
  
  }


  /**
 * @license Monxwe License
 * @author Andil ADEBIYI <andiladebiyi@gmail.com>
 * @route /GestionMaison/Parametre/Application
 * @Copyright (c) Monxwe, 2019
 */
//
    public function executeParametreGestiononMaison(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $manager=$this->managers->getManagerOf('GestionMaison');
    
   $user=$manager->getEntiterUnique('users', 'user_id_unique', $_SESSION['user']['user_id_unique']);
   $this->page->addMultipleVar($user);
    $this->page->addVar('cle',$this->app->config()->get('parametre'));
   


    $datenow = date("Y-m-d");

    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportChambresLibre', $lienactiveRapport);
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Chambres/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));

    // Parametre section variable 

      $checkedpost_payer=($_SESSION['parametreUser']['post_payer']=='false')?'':'checked';
      $checkedpre_payer=($_SESSION['parametreUser']['post_payer']=='false')?'checked':'';

     

      $this->page->addVar('checkedpre_payer', $checkedpre_payer);
      $this->page->addVar('checkedpost_payer', $checkedpost_payer);


    
     
  
  }


  public function executeTableLocataire(HTTPRequest $request){
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportLocataires', $lienactiveRapport);
     $this->page->addVar('lienForadd', '/GestionMaison/Form/Locataires/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));
    $manager=$this->managers->getManagerOf('GestionMaison');

    $TableLocataire=$manager->GetTableOf('locataire');
 
    $this->page->addVar('TableLocataire', $TableLocataire);

  }
 public function executeTableLocataireChambre(HTTPRequest $request){
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportLocataires', $lienactiveRapport);
     $this->page->addVar('lienForadd', '/GestionMaison/Form/Locataires/'.$this->app->config()->get('ajout_valeur').'/'.date('y').date('m').date('d'));
    $manager=$this->managers->getManagerOf('GestionMaison');

    $TableLocataireChambre=$manager->GetTableOf('TableLocataireAvecChambre');
 
    $this->page->addVar('TableLocataireChambre', $TableLocataireChambre);

  }

  public function executeTableTousLesPayement(HTTPRequest $request){
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportPayements', $lienactiveRapport);
    $this->page->addVar('lienForadd', '/GestionMaison/Form/Payement/'.$this->app->config()->get('payement_loyer').'/'.date('y').date('m').date('d'));
     
 
    $manager=$this->managers->getManagerOf('GestionMaison');
    $this->page->addVar('TousLesPayement', $manager->GetTableOf('TousLesPayement'));


  }  


  public function executeTableLocataireEnDette(HTTPRequest $request){
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
      $manager=$this->managers->getManagerOf('GestionMaison');

    $TableLocataireEnDette=$manager->GetTableOf('locataireEndette',['louervaleur'=>$this->app->config()->get('payement_loyer'),'type_payement'=>$this->app->config()->get('idTypeloyer')]);
    $this->page->addVar('TableLocataireEnDette',$TableLocataireEnDette);

    $collapsedRapport='';
    $collapseshowRapport ='show';
    $lienactiveRapport='active';
    $this->page->addVar('collapsedRapport', $collapsedRapport);
    $this->page->addVar('collapseshowRapport', $collapseshowRapport);
    $this->page->addVar('lienactiveRapportLocataireEnDette', $lienactiveRapport);

  } 

  //FORMULAIRE

     public function executeAjoutMaison(HTTPRequest $request)
  {  
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    // active dropdown page
    $collapseshowF='';
    $collapseshowForm ='show';
    $lienactiveFormMaison='active';
    $this->page->addVar('collapseshowF', $collapseshowF);
    $this->page->addVar('collapseshowForm', $collapseshowForm);
    $this->page->addVar('lienactiveFormMaison', $lienactiveFormMaison);
    // active dropdown page

    $manager=$this->managers->getManagerOf('GestionMaison');
    $action=$request->getData('action');
    $this->page->addVar('cle',$action);
    $this->page->addVar('LocationGo','/GestionMaison/Rapport/Maisons');
    $this->page->addVar('LocationFrom',$_SERVER['REQUEST_URI']);
    $this->page->addVar('tb','maison');
    $this->page->addVar('ique','maison_id_unique');

        if ($action==$this->app->config()->get('edit_valeur')) {
          $this->page->addVar('cle',$action);
          $maisons=$manager->getEntiterUnique('maison', 'maison_id_unique', $request->getData('id'));

          $this->page->addMultipleVar($maisons);
          
          $this->page->addVar('Di',$request->getData('id'));
          $this->page->addVar('title','Modifier');
        }
  }
  
     public function executeAjoutChambre(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
        // active dropdown page
    $collapseshowF='';
    $collapseshowForm ='show';
    $lienactiveFormchambre='active';
    $this->page->addVar('collapseshowF', $collapseshowF);
    $this->page->addVar('collapseshowForm', $collapseshowForm);
    $this->page->addVar('lienactiveFormchambre', $lienactiveFormchambre);
    // active dropdown page
    $manager=$this->managers->getManagerOf('GestionMaison');
    $action=$request->getData('action');
    $this->page->addVar('cle',$action);
    $this->page->addVar('LocationGo','/GestionMaison/Rapport/Chambres'); 
    $this->page->addVar('LocationFrom',$_SERVER['REQUEST_URI']);
    $this->page->addVar('tb','chambre');
    $this->page->addVar('ique','chambre_id_unique');
    $this->page->addVar('AllMaisonSelecte',$manager->GetAllOptionOf('maison'));
    $this->page->addVar('AllTypechambre',$manager->GetAllOptionOf('type_chambre'));
    $this->page->addVar('cle',$action);  
 
        if ($action==$this->app->config()->get('edit_valeur')) {
          $this->page->addVar('cle',$action);
          $chambre=$manager->getEntiterUnique('chambre', 'chambre_id_unique', $request->getData('id'));
          $this->page->addMultipleVar($chambre);

          $MaisonSelecteForEdit=$manager->GetAllOptionOf('maisonUnique',['id'=>$chambre['maison_id_maison']]);

          $this->page->addVar('MaisonSelecteForEdit',$MaisonSelecteForEdit);

          $typechambreSelecteForEdit=$manager->GetAllOptionOf('typechambreUnique',['id'=>$chambre['id_type_de_chbr']]);
          $this->page->addVar('typechambreSelecteForEdit',$typechambreSelecteForEdit);
          $this->page->addVar('Di',$request->getData('id'));
          

        }

  
  }
     public function executeAjoutLocataire(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
    // active dropdown page
    $collapseshowF='';
    $collapseshowForm ='show';
    $lienactiveFormlocataire='active';
    $this->page->addVar('collapseshowF', $collapseshowF);
    $this->page->addVar('collapseshowForm', $collapseshowForm);
    $this->page->addVar('lienactiveFormlocataire', $lienactiveFormlocataire);
    // active dropdown page
    
    $manager=$this->managers->getManagerOf('GestionMaison');
    $action=$request->getData('action');
    $this->page->addVar('cle',$action);
    $this->page->addVar('LocationGo','/GestionMaison/Rapport/Tous_Locataires'); 
    $this->page->addVar('LocationFrom',$_SERVER['REQUEST_URI']);
    $this->page->addVar('tb','locataire');
    $this->page->addVar('ique','locataire_id_unique');
    $this->page->addVar('AllMaisonSelecte',$manager->GetAllOptionOf('maison'));
    $this->page->addVar('cle',$action);  
        if ($action==$this->app->config()->get('edit_valeur')) {
          $locataire=$manager->getEntiterUnique('locataire', 'locataire_id_unique', $request->getData('id'));

          $this->page->addMultipleVar($locataire);
          $this->page->addVar('Di',$request->getData('id'));
        }
  
  } 
     public function executeAjoutLouer(HTTPRequest $request)
    {
      if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
          $manager=$this->managers->getManagerOf('GestionMaison');
          $action=$request->getData('action');
          $idunique=date('y').date('m').date('d');
          $this->page->addVar('cle',$this->app->config()->get('ajout_valeur'));
          $this->page->addVar('LocationGo','/GestionMaison/Form/Payement/'.$this->app->config()->get('payement_loyer').'/'.$idunique); 
          $this->page->addVar('LocationFrom',$_SERVER['REQUEST_URI']);
          $this->page->addVar('tb','locataire_has_chambre');
          $this->page->addVar('ique','louer_id_unique');
          $this->page->addVar('AllMaisonSelecte',$manager->GetAllOptionOf('maison'));
          $this->page->addVar('AllLocataireForUser',$manager->GetAllOptionOf('locataire'));
          if ($action==$this->app->config()->get('edit_valeur')) {
          $this->page->addVar('cle',$this->app->config()->get('edit_valeur'));

          }
           if ($action=="Louer") {
            $locatairetSelecteForEdit=$manager->GetAllOptionOf('locataireUnique',['id'=>$request->getData('id')]);
            $this->page->addVar('locatairetSelecteForEdit',$locatairetSelecteForEdit);
          }else if ($action==$this->app->config()->get('edit_valeur')){

              $Location=$manager->getEntiterUnique('locataire_has_chambre', 'louer_id_unique', $request->getData('id'));

             $locatairetSelecteForEdit=$manager->GetAllOptionOf('locataireUnique',['id'=>$Location['id_locataire']]);

             $this->page->addVar('locatairetSelecteForEdit',$locatairetSelecteForEdit);

              $ChambreSelecteForEdit=$manager->GetAllOptionOf('chambreUnique',['id'=>$Location['id_chambre']]);

             $this->page->addVar('ChambreSelecteForEdit',$ChambreSelecteForEdit);

              $chambre=$manager->getEntiterUnique('chambre', 'chambre_id_unique', $Location['id_chambre']);
              
             $MaisonSelecteForEdit=$manager->GetAllOptionOf('maisonUnique',['id'=>$chambre['maison_id_maison']]);

          $this->page->addVar('MaisonSelecteForEdit',$MaisonSelecteForEdit);

        
          $this->page->addVar('Di',$request->getData('id'));
           $this->page->addMultipleVar($Location);
            $this->page->addVar('LocationGo','/GestionMaison/Rapport/Tous_Locataires_Avec_Chambre'); 
          }



          
 
    
    }
     public function executeAjoutPayement(HTTPRequest $request)
  {
    if ( !isset($_SESSION['connect'])  AND $_SESSION['connect']!='ok') {header('Location: /GestionMaison');}
        // active dropdown page
    $collapsedFP='';
    $collapseshowFormP ='show';
    $lienactiveFormpayement='active';
    $this->page->addVar('collapsedFP', $collapsedFP);
    $this->page->addVar('collapseshowFormP', $collapseshowFormP);
    $this->page->addVar('lienactiveFormpayement', $lienactiveFormpayement);
    // active dropdown page
         $manager=$this->managers->getManagerOf('GestionMaison');
          $action=$request->getData('action');
          $this->page->addVar('cle',$this->app->config()->get('payement_loyer'));
          $this->page->addVar('LocationGo','/GestionMaison/Rapport/Tous_Les_Payements'); 
          $this->page->addVar('LocationFrom',$_SERVER['REQUEST_URI']);
          $this->page->addVar('tb','payement');
          $this->page->addVar('ique','payement_id_unique');
          $this->page->addVar('AllTypePayement',$manager->GetAllOptionOf('type_payement'));
          

          if ($action==$this->app->config()->get('edit_valeur'))
          {
            
             $this->page->addVar('cle',$this->app->config()->get('edit_payement'));

            $payement=$manager->getEntiterUnique('payement', 'payement_id_unique', $request->getData('id'));

          $ChambreSelecteForEdit=$manager->GetAllOptionOf('chambreUnique',['id'=>$payement['id_chambre']]);

          $this->page->addVar('ChambreSelecteForEdit',$ChambreSelecteForEdit);

          $chambre=$manager->getEntiterUnique('chambre', 'chambre_id_unique', $payement['id_chambre']);

          $MaisonSelecteForEdit=$manager->GetAllOptionOf('maisonUnique',['id'=>$chambre['maison_id_maison']]);
          $this->page->addVar('MaisonSelecteForEdit',$MaisonSelecteForEdit);



          $locatairetSelecteForEdit=$manager->GetAllOptionOf('locataireUnique',['id'=>$payement['id_locataire']]);
          $this->page->addVar('locatairetSelecteForEdit',$locatairetSelecteForEdit);
      
          $typePayementSelecteForEdit=$manager->GetAllOptionOf('type_payementUnique',['id'=>$payement['id_type']]);
          $this->page->addVar('typePayementSelecteForEdit',$typePayementSelecteForEdit);
          $this->page->addMultipleVar($payement);
          $this->page->addVar('Di',$request->getData('id'));

         }elseif ($action==$this->app->config()->get('payement_loyer')) 
         {

          $locatairetSelecteForEdit=$manager->GetAllOptionOf('locataireUnique',['id'=>$request->getData('id')]);
          $this->page->addVar('locatairetSelecteForEdit',$locatairetSelecteForEdit);
          $chambreNewLouer=$manager->getEntiterUnique('locataire_has_chambre', 'id_locataire',$request->getData('id'));

          $ChambreSelecteForEdit=$manager->GetAllOptionOf('chambreUnique',['id'=>$chambreNewLouer['id_chambre']]);
          $this->page->addVar('ChambreSelecteForEdit',$ChambreSelecteForEdit);
          $chambre=$manager->getEntiterUnique('chambre', 'chambre_id_unique', $chambreNewLouer['id_chambre']);

          $MaisonSelecteForEdit=$manager->GetAllOptionOf('maisonUnique',['id'=>$chambre['maison_id_maison']]);
          $this->page->addVar('MaisonSelecteForEdit',$MaisonSelecteForEdit);

          $this->page->addVar('cle',$this->app->config()->get('payement_loyer'));

        }else{

          $this->page->addVar('AllMaisonSelecte',$manager->GetAllOptionOf('maison'));
          $this->page->addVar('AllLocataireForUser',$manager->GetAllOptionOf('locataire'));
        }
  
  }



  // public function executeLocataire(HTTPRequest $request){
  //   $collapsedRapport='';
  //   $collapseshowRapport ='show';
  //   $lienactiveRapport='active';
  //   $this->page->addVar('collapsedRapport', $collapsedRapport);
  //   $this->page->addVar('collapseshowRapport', $collapseshowRapport);
  //   $this->page->addVar('lienactiveRapport', $lienactiveRapport);

  // }  


  //   public function executeForgotpassword(HTTPRequest $request)
  // {
  
  // }
  
  // public function executeRegister(HTTPRequest $request)
  // {
  
  // }

  // public function executeModifMaison(HTTPRequest $request)
  // {
  
  // }



  // public function executeAjoutLocataire(HTTPRequest $request){

  // }
  // public function executeModifLocataire(HTTPRequest $request){

  // }


 



//   public function executePayement(HTTPRequest $request){
//     $AllTypePayement="";
// $MaisonSelecteForEdit="";
// $AllLocataireForUser="";
//      $this->page->addVar('AllTypePayement', $AllTypePayement);
//      // $this->page->addVar('MaisonSelecteForEdit', $MaisonSelecteForEdit);
//      $this->page->addVar('AllLocataireForUser', $AllLocataireForUser);
//      $this->page->addVar('cle', $id = $request->getData('action'));


//   }
//    public function executeChambre(HTTPRequest $request){
//     $AllTypechambre="";
// $MaisonSelecteForEdit="";
//      $this->page->addVar('AllTypePayement', $AllTypechambre);
//      // $this->page->addVar('MaisonSelecteForEdit', $MaisonSelecteForEdit);
//      $this->page->addVar('MaisonSelecteForEdit', $MaisonSelecteForEdit);
//      $this->page->addVar('cle', $id = $request->getData('action'));


//   }
  



 } 