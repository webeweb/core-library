<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Dossier1 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier1 {

    /**
     * B t q.
     *
     * @var string
     */
    private $bTQ;

    /**
     * Bureau distributeur.
     *
     * @var string
     */
    private $bureauDistributeur;

    /**
     * Calcul ana fait.
     *
     * @var bool
     */
    private $calculAnaFait;

    /**
     * Chemin implantation ascii.
     *
     * @var string
     */
    private $cheminImplantationAscii;

    /**
     * Civilite.
     *
     * @var string
     */
    private $civilite;

    /**
     * Cle acces1.
     *
     * @var string
     */
    private $cleAcces1;

    /**
     * Cle acces10.
     *
     * @var string
     */
    private $cleAcces10;

    /**
     * Cle acces2.
     *
     * @var string
     */
    private $cleAcces2;

    /**
     * Cle acces3.
     *
     * @var string
     */
    private $cleAcces3;

    /**
     * Cle acces4.
     *
     * @var string
     */
    private $cleAcces4;

    /**
     * Cle acces5.
     *
     * @var string
     */
    private $cleAcces5;

    /**
     * Cle acces6.
     *
     * @var string
     */
    private $cleAcces6;

    /**
     * Cle acces7.
     *
     * @var string
     */
    private $cleAcces7;

    /**
     * Cle acces8.
     *
     * @var string
     */
    private $cleAcces8;

    /**
     * Cle acces9.
     *
     * @var string
     */
    private $cleAcces9;

    /**
     * Cle deblocage journaux.
     *
     * @var string
     */
    private $cleDeblocageJournaux;

    /**
     * Cle portable.
     *
     * @var string
     */
    private $clePortable;

    /**
     * Code equipe.
     *
     * @var string
     */
    private $codeEquipe;

    /**
     * Code n a f.
     *
     * @var string
     */
    private $codeNAF;

    /**
     * Code n a f2008.
     *
     * @var string
     */
    private $codeNAF2008;

    /**
     * Code officiel commune.
     *
     * @var string
     */
    private $codeOfficielCommune;

    /**
     * Code postal.
     *
     * @var string
     */
    private $codePostal;

    /**
     * Complement.
     *
     * @var string
     */
    private $complement;

    /**
     * Copie backup.
     *
     * @var string
     */
    private $copieBackup;

    /**
     * Cpt deb suivi classe0.
     *
     * @var string
     */
    private $cptDebSuiviClasse0;

    /**
     * Cpt deb suivi classe1.
     *
     * @var string
     */
    private $cptDebSuiviClasse1;

    /**
     * Cpt deb suivi classe2.
     *
     * @var string
     */
    private $cptDebSuiviClasse2;

    /**
     * Cpt deb suivi classe3.
     *
     * @var string
     */
    private $cptDebSuiviClasse3;

    /**
     * Cpt deb suivi classe4.
     *
     * @var string
     */
    private $cptDebSuiviClasse4;

    /**
     * Cpt deb suivi classe5.
     *
     * @var string
     */
    private $cptDebSuiviClasse5;

    /**
     * Cpt deb suivi classe8.
     *
     * @var string
     */
    private $cptDebSuiviClasse8;

    /**
     * Cpt deb suivi classe9.
     *
     * @var string
     */
    private $cptDebSuiviClasse9;

    /**
     * Cpt fin suivi classe0.
     *
     * @var string
     */
    private $cptFinSuiviClasse0;

    /**
     * Cpt fin suivi classe1.
     *
     * @var string
     */
    private $cptFinSuiviClasse1;

    /**
     * Cpt fin suivi classe2.
     *
     * @var string
     */
    private $cptFinSuiviClasse2;

    /**
     * Cpt fin suivi classe3.
     *
     * @var string
     */
    private $cptFinSuiviClasse3;

    /**
     * Cpt fin suivi classe4.
     *
     * @var string
     */
    private $cptFinSuiviClasse4;

    /**
     * Cpt fin suivi classe5.
     *
     * @var string
     */
    private $cptFinSuiviClasse5;

    /**
     * Cpt fin suivi classe8.
     *
     * @var string
     */
    private $cptFinSuiviClasse8;

    /**
     * Cpt fin suivi classe9.
     *
     * @var string
     */
    private $cptFinSuiviClasse9;

    /**
     * Createur dossier.
     *
     * @var string
     */
    private $createurDossier;

    /**
     * D l u.
     *
     * @var string
     */
    private $dLU;

    /**
     * Date limite saisie.
     *
     * @var DateTime
     */
    private $dateLimiteSaisie;

    /**
     * Date sys changt ex.
     *
     * @var DateTime
     */
    private $dateSysChangtEx;

    /**
     * Date sys cloture periode.
     *
     * @var DateTime
     */
    private $dateSysCloturePeriode;

    /**
     * Date sys creation.
     *
     * @var DateTime
     */
    private $dateSysCreation;

    /**
     * Date travail.
     *
     * @var DateTime
     */
    private $dateTravail;

    /**
     * Debut exercice.
     *
     * @var DateTime
     */
    private $debutExercice;

    /**
     * Debut exercice_1.
     *
     * @var DateTime
     */
    private $debutExercice_1;

    /**
     * Delai limite saisie.
     *
     * @var int
     */
    private $delaiLimiteSaisie;

    /**
     * Droit creation type cpt1.
     *
     * @var string
     */
    private $droitCreationTypeCpt1;

    /**
     * Droit creation type cpt10.
     *
     * @var string
     */
    private $droitCreationTypeCpt10;

    /**
     * Droit creation type cpt2.
     *
     * @var string
     */
    private $droitCreationTypeCpt2;

    /**
     * Droit creation type cpt3.
     *
     * @var string
     */
    private $droitCreationTypeCpt3;

    /**
     * Droit creation type cpt4.
     *
     * @var string
     */
    private $droitCreationTypeCpt4;

    /**
     * Droit creation type cpt5.
     *
     * @var string
     */
    private $droitCreationTypeCpt5;

    /**
     * Droit creation type cpt6.
     *
     * @var string
     */
    private $droitCreationTypeCpt6;

    /**
     * Droit creation type cpt7.
     *
     * @var string
     */
    private $droitCreationTypeCpt7;

    /**
     * Droit creation type cpt8.
     *
     * @var string
     */
    private $droitCreationTypeCpt8;

    /**
     * Droit creation type cpt9.
     *
     * @var string
     */
    private $droitCreationTypeCpt9;

    /**
     * Duree exercice.
     *
     * @var string
     */
    private $dureeExercice;

    /**
     * Duree exercice_1.
     *
     * @var string
     */
    private $dureeExercice_1;

    /**
     * Edit date systeme.
     *
     * @var bool
     */
    private $editDateSysteme;

    /**
     * Edit page garde.
     *
     * @var bool
     */
    private $editPageGarde;

    /**
     * Enseigne.
     *
     * @var string
     */
    private $enseigne;

    /**
     * Euro ou franc.
     *
     * @var string
     */
    private $euroOuFranc;

    /**
     * Famille1.
     *
     * @var string
     */
    private $famille1;

    /**
     * Famille10.
     *
     * @var string
     */
    private $famille10;

    /**
     * Famille2.
     *
     * @var string
     */
    private $famille2;

    /**
     * Famille3.
     *
     * @var string
     */
    private $famille3;

    /**
     * Famille4.
     *
     * @var string
     */
    private $famille4;

    /**
     * Famille5.
     *
     * @var string
     */
    private $famille5;

    /**
     * Famille6.
     *
     * @var string
     */
    private $famille6;

    /**
     * Famille7.
     *
     * @var string
     */
    private $famille7;

    /**
     * Famille8.
     *
     * @var string
     */
    private $famille8;

    /**
     * Famille9.
     *
     * @var string
     */
    private $famille9;

    /**
     * Famille analytique.
     *
     * @var string
     */
    private $familleAnalytique;

    /**
     * Fin exercice.
     *
     * @var DateTime
     */
    private $finExercice;

    /**
     * Fin exercice_1.
     *
     * @var DateTime
     */
    private $finExercice_1;

    /**
     * Gestion compta eco.
     *
     * @var bool
     */
    private $gestionComptaEco;

    /**
     * Groupe app clients.
     *
     * @var string
     */
    private $groupeAppClients;

    /**
     * L r active.
     *
     * @var bool
     */
    private $lRActive;

    /**
     * L r periode.
     *
     * @var DateTime
     */
    private $lRPeriode;

    /**
     * Module agr actif.
     *
     * @var bool
     */
    private $moduleAgrActif;

    /**
     * Multi dossiers.
     *
     * @var bool
     */
    private $multiDossiers;

    /**
     * Nature menu1.
     *
     * @var string
     */
    private $natureMenu1;

    /**
     * Nature menu10.
     *
     * @var string
     */
    private $natureMenu10;

    /**
     * Nature menu2.
     *
     * @var string
     */
    private $natureMenu2;

    /**
     * Nature menu3.
     *
     * @var string
     */
    private $natureMenu3;

    /**
     * Nature menu4.
     *
     * @var string
     */
    private $natureMenu4;

    /**
     * Nature menu5.
     *
     * @var string
     */
    private $natureMenu5;

    /**
     * Nature menu6.
     *
     * @var string
     */
    private $natureMenu6;

    /**
     * Nature menu7.
     *
     * @var string
     */
    private $natureMenu7;

    /**
     * Nature menu8.
     *
     * @var string
     */
    private $natureMenu8;

    /**
     * Nature menu9.
     *
     * @var string
     */
    private $natureMenu9;

    /**
     * Nature regle1.
     *
     * @var string
     */
    private $natureRegle1;

    /**
     * Nature regle10.
     *
     * @var string
     */
    private $natureRegle10;

    /**
     * Nature regle2.
     *
     * @var string
     */
    private $natureRegle2;

    /**
     * Nature regle3.
     *
     * @var string
     */
    private $natureRegle3;

    /**
     * Nature regle4.
     *
     * @var string
     */
    private $natureRegle4;

    /**
     * Nature regle5.
     *
     * @var string
     */
    private $natureRegle5;

    /**
     * Nature regle6.
     *
     * @var string
     */
    private $natureRegle6;

    /**
     * Nature regle7.
     *
     * @var string
     */
    private $natureRegle7;

    /**
     * Nature regle8.
     *
     * @var string
     */
    private $natureRegle8;

    /**
     * Nature regle9.
     *
     * @var string
     */
    private $natureRegle9;

    /**
     * Niveau analytique.
     *
     * @var int
     */
    private $niveauAnalytique;

    /**
     * Niveau droit1.
     *
     * @var string
     */
    private $niveauDroit1;

    /**
     * Niveau droit10.
     *
     * @var string
     */
    private $niveauDroit10;

    /**
     * Niveau droit2.
     *
     * @var string
     */
    private $niveauDroit2;

    /**
     * Niveau droit3.
     *
     * @var string
     */
    private $niveauDroit3;

    /**
     * Niveau droit4.
     *
     * @var string
     */
    private $niveauDroit4;

    /**
     * Niveau droit5.
     *
     * @var string
     */
    private $niveauDroit5;

    /**
     * Niveau droit6.
     *
     * @var string
     */
    private $niveauDroit6;

    /**
     * Niveau droit7.
     *
     * @var string
     */
    private $niveauDroit7;

    /**
     * Niveau droit8.
     *
     * @var string
     */
    private $niveauDroit8;

    /**
     * Niveau droit9.
     *
     * @var string
     */
    private $niveauDroit9;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Nom voie.
     *
     * @var string
     */
    private $nomVoie;

    /**
     * Num voie.
     *
     * @var string
     */
    private $numVoie;

    /**
     * Pas ecriture r b.
     *
     * @var bool
     */
    private $pasEcritureRB;

    /**
     * Pas modif r i b regl.
     *
     * @var bool
     */
    private $pasModifRIBRegl;

    /**
     * Periode cloturee.
     *
     * @var DateTime
     */
    private $periodeCloturee;

    /**
     * Periode validee.
     *
     * @var DateTime
     */
    private $periodeValidee;

    /**
     * Prochain num piece.
     *
     * @var int
     */
    private $prochainNumPiece;

    /**
     * R c.
     *
     * @var string
     */
    private $rC;

    /**
     * Raison sociale.
     *
     * @var string
     */
    private $raisonSociale;

    /**
     * Saisie immo en ecriture.
     *
     * @var bool
     */
    private $saisieImmoEnEcriture;

    /**
     * Sauve commun.
     *
     * @var bool
     */
    private $sauveCommun;

    /**
     * Sauve compresse.
     *
     * @var bool
     */
    private $sauveCompresse;

    /**
     * Siret.
     *
     * @var string
     */
    private $siret;

    /**
     * Suivi aff tout.
     *
     * @var bool
     */
    private $suiviAffTout;

    /**
     * Suivi ana2.
     *
     * @var string
     */
    private $suiviAna2;

    /**
     * Suivi ana classe0.
     *
     * @var bool
     */
    private $suiviAnaClasse0;

    /**
     * Suivi ana classe1.
     *
     * @var bool
     */
    private $suiviAnaClasse1;

    /**
     * Suivi ana classe2.
     *
     * @var bool
     */
    private $suiviAnaClasse2;

    /**
     * Suivi ana classe3.
     *
     * @var bool
     */
    private $suiviAnaClasse3;

    /**
     * Suivi ana classe4.
     *
     * @var bool
     */
    private $suiviAnaClasse4;

    /**
     * Suivi ana classe5.
     *
     * @var bool
     */
    private $suiviAnaClasse5;

    /**
     * Suivi ana classe8.
     *
     * @var bool
     */
    private $suiviAnaClasse8;

    /**
     * Suivi ana classe9.
     *
     * @var bool
     */
    private $suiviAnaClasse9;

    /**
     * Suivi ana facultatif.
     *
     * @var bool
     */
    private $suiviAnaFacultatif;

    /**
     * Tva cle.
     *
     * @var string
     */
    private $tvaCle;

    /**
     * Tva code dossier.
     *
     * @var string
     */
    private $tvaCodeDossier;

    /**
     * Tva code recette.
     *
     * @var string
     */
    private $tvaCodeRecette;

    /**
     * Ventilations communes.
     *
     * @var bool
     */
    private $ventilationsCommunes;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the b t q.
     *
     * @return string Returns the b t q.
     */
    public function getBTQ() {
        return $this->bTQ;
    }

    /**
     * Get the bureau distributeur.
     *
     * @return string Returns the bureau distributeur.
     */
    public function getBureauDistributeur() {
        return $this->bureauDistributeur;
    }

    /**
     * Get the calcul ana fait.
     *
     * @return bool Returns the calcul ana fait.
     */
    public function getCalculAnaFait() {
        return $this->calculAnaFait;
    }

    /**
     * Get the chemin implantation ascii.
     *
     * @return string Returns the chemin implantation ascii.
     */
    public function getCheminImplantationAscii() {
        return $this->cheminImplantationAscii;
    }

    /**
     * Get the civilite.
     *
     * @return string Returns the civilite.
     */
    public function getCivilite() {
        return $this->civilite;
    }

    /**
     * Get the cle acces1.
     *
     * @return string Returns the cle acces1.
     */
    public function getCleAcces1() {
        return $this->cleAcces1;
    }

    /**
     * Get the cle acces10.
     *
     * @return string Returns the cle acces10.
     */
    public function getCleAcces10() {
        return $this->cleAcces10;
    }

    /**
     * Get the cle acces2.
     *
     * @return string Returns the cle acces2.
     */
    public function getCleAcces2() {
        return $this->cleAcces2;
    }

    /**
     * Get the cle acces3.
     *
     * @return string Returns the cle acces3.
     */
    public function getCleAcces3() {
        return $this->cleAcces3;
    }

    /**
     * Get the cle acces4.
     *
     * @return string Returns the cle acces4.
     */
    public function getCleAcces4() {
        return $this->cleAcces4;
    }

    /**
     * Get the cle acces5.
     *
     * @return string Returns the cle acces5.
     */
    public function getCleAcces5() {
        return $this->cleAcces5;
    }

    /**
     * Get the cle acces6.
     *
     * @return string Returns the cle acces6.
     */
    public function getCleAcces6() {
        return $this->cleAcces6;
    }

    /**
     * Get the cle acces7.
     *
     * @return string Returns the cle acces7.
     */
    public function getCleAcces7() {
        return $this->cleAcces7;
    }

    /**
     * Get the cle acces8.
     *
     * @return string Returns the cle acces8.
     */
    public function getCleAcces8() {
        return $this->cleAcces8;
    }

    /**
     * Get the cle acces9.
     *
     * @return string Returns the cle acces9.
     */
    public function getCleAcces9() {
        return $this->cleAcces9;
    }

    /**
     * Get the cle deblocage journaux.
     *
     * @return string Returns the cle deblocage journaux.
     */
    public function getCleDeblocageJournaux() {
        return $this->cleDeblocageJournaux;
    }

    /**
     * Get the cle portable.
     *
     * @return string Returns the cle portable.
     */
    public function getClePortable() {
        return $this->clePortable;
    }

    /**
     * Get the code equipe.
     *
     * @return string Returns the code equipe.
     */
    public function getCodeEquipe() {
        return $this->codeEquipe;
    }

    /**
     * Get the code n a f.
     *
     * @return string Returns the code n a f.
     */
    public function getCodeNAF() {
        return $this->codeNAF;
    }

    /**
     * Get the code n a f2008.
     *
     * @return string Returns the code n a f2008.
     */
    public function getCodeNAF2008() {
        return $this->codeNAF2008;
    }

    /**
     * Get the code officiel commune.
     *
     * @return string Returns the code officiel commune.
     */
    public function getCodeOfficielCommune() {
        return $this->codeOfficielCommune;
    }

    /**
     * Get the code postal.
     *
     * @return string Returns the code postal.
     */
    public function getCodePostal() {
        return $this->codePostal;
    }

    /**
     * Get the complement.
     *
     * @return string Returns the complement.
     */
    public function getComplement() {
        return $this->complement;
    }

    /**
     * Get the copie backup.
     *
     * @return string Returns the copie backup.
     */
    public function getCopieBackup() {
        return $this->copieBackup;
    }

    /**
     * Get the cpt deb suivi classe0.
     *
     * @return string Returns the cpt deb suivi classe0.
     */
    public function getCptDebSuiviClasse0() {
        return $this->cptDebSuiviClasse0;
    }

    /**
     * Get the cpt deb suivi classe1.
     *
     * @return string Returns the cpt deb suivi classe1.
     */
    public function getCptDebSuiviClasse1() {
        return $this->cptDebSuiviClasse1;
    }

    /**
     * Get the cpt deb suivi classe2.
     *
     * @return string Returns the cpt deb suivi classe2.
     */
    public function getCptDebSuiviClasse2() {
        return $this->cptDebSuiviClasse2;
    }

    /**
     * Get the cpt deb suivi classe3.
     *
     * @return string Returns the cpt deb suivi classe3.
     */
    public function getCptDebSuiviClasse3() {
        return $this->cptDebSuiviClasse3;
    }

    /**
     * Get the cpt deb suivi classe4.
     *
     * @return string Returns the cpt deb suivi classe4.
     */
    public function getCptDebSuiviClasse4() {
        return $this->cptDebSuiviClasse4;
    }

    /**
     * Get the cpt deb suivi classe5.
     *
     * @return string Returns the cpt deb suivi classe5.
     */
    public function getCptDebSuiviClasse5() {
        return $this->cptDebSuiviClasse5;
    }

    /**
     * Get the cpt deb suivi classe8.
     *
     * @return string Returns the cpt deb suivi classe8.
     */
    public function getCptDebSuiviClasse8() {
        return $this->cptDebSuiviClasse8;
    }

    /**
     * Get the cpt deb suivi classe9.
     *
     * @return string Returns the cpt deb suivi classe9.
     */
    public function getCptDebSuiviClasse9() {
        return $this->cptDebSuiviClasse9;
    }

    /**
     * Get the cpt fin suivi classe0.
     *
     * @return string Returns the cpt fin suivi classe0.
     */
    public function getCptFinSuiviClasse0() {
        return $this->cptFinSuiviClasse0;
    }

    /**
     * Get the cpt fin suivi classe1.
     *
     * @return string Returns the cpt fin suivi classe1.
     */
    public function getCptFinSuiviClasse1() {
        return $this->cptFinSuiviClasse1;
    }

    /**
     * Get the cpt fin suivi classe2.
     *
     * @return string Returns the cpt fin suivi classe2.
     */
    public function getCptFinSuiviClasse2() {
        return $this->cptFinSuiviClasse2;
    }

    /**
     * Get the cpt fin suivi classe3.
     *
     * @return string Returns the cpt fin suivi classe3.
     */
    public function getCptFinSuiviClasse3() {
        return $this->cptFinSuiviClasse3;
    }

    /**
     * Get the cpt fin suivi classe4.
     *
     * @return string Returns the cpt fin suivi classe4.
     */
    public function getCptFinSuiviClasse4() {
        return $this->cptFinSuiviClasse4;
    }

    /**
     * Get the cpt fin suivi classe5.
     *
     * @return string Returns the cpt fin suivi classe5.
     */
    public function getCptFinSuiviClasse5() {
        return $this->cptFinSuiviClasse5;
    }

    /**
     * Get the cpt fin suivi classe8.
     *
     * @return string Returns the cpt fin suivi classe8.
     */
    public function getCptFinSuiviClasse8() {
        return $this->cptFinSuiviClasse8;
    }

    /**
     * Get the cpt fin suivi classe9.
     *
     * @return string Returns the cpt fin suivi classe9.
     */
    public function getCptFinSuiviClasse9() {
        return $this->cptFinSuiviClasse9;
    }

    /**
     * Get the createur dossier.
     *
     * @return string Returns the createur dossier.
     */
    public function getCreateurDossier() {
        return $this->createurDossier;
    }

    /**
     * Get the d l u.
     *
     * @return string Returns the d l u.
     */
    public function getDLU() {
        return $this->dLU;
    }

    /**
     * Get the date limite saisie.
     *
     * @return DateTime Returns the date limite saisie.
     */
    public function getDateLimiteSaisie() {
        return $this->dateLimiteSaisie;
    }

    /**
     * Get the date sys changt ex.
     *
     * @return DateTime Returns the date sys changt ex.
     */
    public function getDateSysChangtEx() {
        return $this->dateSysChangtEx;
    }

    /**
     * Get the date sys cloture periode.
     *
     * @return DateTime Returns the date sys cloture periode.
     */
    public function getDateSysCloturePeriode() {
        return $this->dateSysCloturePeriode;
    }

    /**
     * Get the date sys creation.
     *
     * @return DateTime Returns the date sys creation.
     */
    public function getDateSysCreation() {
        return $this->dateSysCreation;
    }

    /**
     * Get the date travail.
     *
     * @return DateTime Returns the date travail.
     */
    public function getDateTravail() {
        return $this->dateTravail;
    }

    /**
     * Get the debut exercice.
     *
     * @return DateTime Returns the debut exercice.
     */
    public function getDebutExercice() {
        return $this->debutExercice;
    }

    /**
     * Get the debut exercice_1.
     *
     * @return DateTime Returns the debut exercice_1.
     */
    public function getDebutExercice_1() {
        return $this->debutExercice_1;
    }

    /**
     * Get the delai limite saisie.
     *
     * @return int Returns the delai limite saisie.
     */
    public function getDelaiLimiteSaisie() {
        return $this->delaiLimiteSaisie;
    }

    /**
     * Get the droit creation type cpt1.
     *
     * @return string Returns the droit creation type cpt1.
     */
    public function getDroitCreationTypeCpt1() {
        return $this->droitCreationTypeCpt1;
    }

    /**
     * Get the droit creation type cpt10.
     *
     * @return string Returns the droit creation type cpt10.
     */
    public function getDroitCreationTypeCpt10() {
        return $this->droitCreationTypeCpt10;
    }

    /**
     * Get the droit creation type cpt2.
     *
     * @return string Returns the droit creation type cpt2.
     */
    public function getDroitCreationTypeCpt2() {
        return $this->droitCreationTypeCpt2;
    }

    /**
     * Get the droit creation type cpt3.
     *
     * @return string Returns the droit creation type cpt3.
     */
    public function getDroitCreationTypeCpt3() {
        return $this->droitCreationTypeCpt3;
    }

    /**
     * Get the droit creation type cpt4.
     *
     * @return string Returns the droit creation type cpt4.
     */
    public function getDroitCreationTypeCpt4() {
        return $this->droitCreationTypeCpt4;
    }

    /**
     * Get the droit creation type cpt5.
     *
     * @return string Returns the droit creation type cpt5.
     */
    public function getDroitCreationTypeCpt5() {
        return $this->droitCreationTypeCpt5;
    }

    /**
     * Get the droit creation type cpt6.
     *
     * @return string Returns the droit creation type cpt6.
     */
    public function getDroitCreationTypeCpt6() {
        return $this->droitCreationTypeCpt6;
    }

    /**
     * Get the droit creation type cpt7.
     *
     * @return string Returns the droit creation type cpt7.
     */
    public function getDroitCreationTypeCpt7() {
        return $this->droitCreationTypeCpt7;
    }

    /**
     * Get the droit creation type cpt8.
     *
     * @return string Returns the droit creation type cpt8.
     */
    public function getDroitCreationTypeCpt8() {
        return $this->droitCreationTypeCpt8;
    }

    /**
     * Get the droit creation type cpt9.
     *
     * @return string Returns the droit creation type cpt9.
     */
    public function getDroitCreationTypeCpt9() {
        return $this->droitCreationTypeCpt9;
    }

    /**
     * Get the duree exercice.
     *
     * @return string Returns the duree exercice.
     */
    public function getDureeExercice() {
        return $this->dureeExercice;
    }

    /**
     * Get the duree exercice_1.
     *
     * @return string Returns the duree exercice_1.
     */
    public function getDureeExercice_1() {
        return $this->dureeExercice_1;
    }

    /**
     * Get the edit date systeme.
     *
     * @return bool Returns the edit date systeme.
     */
    public function getEditDateSysteme() {
        return $this->editDateSysteme;
    }

    /**
     * Get the edit page garde.
     *
     * @return bool Returns the edit page garde.
     */
    public function getEditPageGarde() {
        return $this->editPageGarde;
    }

    /**
     * Get the enseigne.
     *
     * @return string Returns the enseigne.
     */
    public function getEnseigne() {
        return $this->enseigne;
    }

    /**
     * Get the euro ou franc.
     *
     * @return string Returns the euro ou franc.
     */
    public function getEuroOuFranc() {
        return $this->euroOuFranc;
    }

    /**
     * Get the famille1.
     *
     * @return string Returns the famille1.
     */
    public function getFamille1() {
        return $this->famille1;
    }

    /**
     * Get the famille10.
     *
     * @return string Returns the famille10.
     */
    public function getFamille10() {
        return $this->famille10;
    }

    /**
     * Get the famille2.
     *
     * @return string Returns the famille2.
     */
    public function getFamille2() {
        return $this->famille2;
    }

    /**
     * Get the famille3.
     *
     * @return string Returns the famille3.
     */
    public function getFamille3() {
        return $this->famille3;
    }

    /**
     * Get the famille4.
     *
     * @return string Returns the famille4.
     */
    public function getFamille4() {
        return $this->famille4;
    }

    /**
     * Get the famille5.
     *
     * @return string Returns the famille5.
     */
    public function getFamille5() {
        return $this->famille5;
    }

    /**
     * Get the famille6.
     *
     * @return string Returns the famille6.
     */
    public function getFamille6() {
        return $this->famille6;
    }

    /**
     * Get the famille7.
     *
     * @return string Returns the famille7.
     */
    public function getFamille7() {
        return $this->famille7;
    }

    /**
     * Get the famille8.
     *
     * @return string Returns the famille8.
     */
    public function getFamille8() {
        return $this->famille8;
    }

    /**
     * Get the famille9.
     *
     * @return string Returns the famille9.
     */
    public function getFamille9() {
        return $this->famille9;
    }

    /**
     * Get the famille analytique.
     *
     * @return string Returns the famille analytique.
     */
    public function getFamilleAnalytique() {
        return $this->familleAnalytique;
    }

    /**
     * Get the fin exercice.
     *
     * @return DateTime Returns the fin exercice.
     */
    public function getFinExercice() {
        return $this->finExercice;
    }

    /**
     * Get the fin exercice_1.
     *
     * @return DateTime Returns the fin exercice_1.
     */
    public function getFinExercice_1() {
        return $this->finExercice_1;
    }

    /**
     * Get the gestion compta eco.
     *
     * @return bool Returns the gestion compta eco.
     */
    public function getGestionComptaEco() {
        return $this->gestionComptaEco;
    }

    /**
     * Get the groupe app clients.
     *
     * @return string Returns the groupe app clients.
     */
    public function getGroupeAppClients() {
        return $this->groupeAppClients;
    }

    /**
     * Get the l r active.
     *
     * @return bool Returns the l r active.
     */
    public function getLRActive() {
        return $this->lRActive;
    }

    /**
     * Get the l r periode.
     *
     * @return DateTime Returns the l r periode.
     */
    public function getLRPeriode() {
        return $this->lRPeriode;
    }

    /**
     * Get the module agr actif.
     *
     * @return bool Returns the module agr actif.
     */
    public function getModuleAgrActif() {
        return $this->moduleAgrActif;
    }

    /**
     * Get the multi dossiers.
     *
     * @return bool Returns the multi dossiers.
     */
    public function getMultiDossiers() {
        return $this->multiDossiers;
    }

    /**
     * Get the nature menu1.
     *
     * @return string Returns the nature menu1.
     */
    public function getNatureMenu1() {
        return $this->natureMenu1;
    }

    /**
     * Get the nature menu10.
     *
     * @return string Returns the nature menu10.
     */
    public function getNatureMenu10() {
        return $this->natureMenu10;
    }

    /**
     * Get the nature menu2.
     *
     * @return string Returns the nature menu2.
     */
    public function getNatureMenu2() {
        return $this->natureMenu2;
    }

    /**
     * Get the nature menu3.
     *
     * @return string Returns the nature menu3.
     */
    public function getNatureMenu3() {
        return $this->natureMenu3;
    }

    /**
     * Get the nature menu4.
     *
     * @return string Returns the nature menu4.
     */
    public function getNatureMenu4() {
        return $this->natureMenu4;
    }

    /**
     * Get the nature menu5.
     *
     * @return string Returns the nature menu5.
     */
    public function getNatureMenu5() {
        return $this->natureMenu5;
    }

    /**
     * Get the nature menu6.
     *
     * @return string Returns the nature menu6.
     */
    public function getNatureMenu6() {
        return $this->natureMenu6;
    }

    /**
     * Get the nature menu7.
     *
     * @return string Returns the nature menu7.
     */
    public function getNatureMenu7() {
        return $this->natureMenu7;
    }

    /**
     * Get the nature menu8.
     *
     * @return string Returns the nature menu8.
     */
    public function getNatureMenu8() {
        return $this->natureMenu8;
    }

    /**
     * Get the nature menu9.
     *
     * @return string Returns the nature menu9.
     */
    public function getNatureMenu9() {
        return $this->natureMenu9;
    }

    /**
     * Get the nature regle1.
     *
     * @return string Returns the nature regle1.
     */
    public function getNatureRegle1() {
        return $this->natureRegle1;
    }

    /**
     * Get the nature regle10.
     *
     * @return string Returns the nature regle10.
     */
    public function getNatureRegle10() {
        return $this->natureRegle10;
    }

    /**
     * Get the nature regle2.
     *
     * @return string Returns the nature regle2.
     */
    public function getNatureRegle2() {
        return $this->natureRegle2;
    }

    /**
     * Get the nature regle3.
     *
     * @return string Returns the nature regle3.
     */
    public function getNatureRegle3() {
        return $this->natureRegle3;
    }

    /**
     * Get the nature regle4.
     *
     * @return string Returns the nature regle4.
     */
    public function getNatureRegle4() {
        return $this->natureRegle4;
    }

    /**
     * Get the nature regle5.
     *
     * @return string Returns the nature regle5.
     */
    public function getNatureRegle5() {
        return $this->natureRegle5;
    }

    /**
     * Get the nature regle6.
     *
     * @return string Returns the nature regle6.
     */
    public function getNatureRegle6() {
        return $this->natureRegle6;
    }

    /**
     * Get the nature regle7.
     *
     * @return string Returns the nature regle7.
     */
    public function getNatureRegle7() {
        return $this->natureRegle7;
    }

    /**
     * Get the nature regle8.
     *
     * @return string Returns the nature regle8.
     */
    public function getNatureRegle8() {
        return $this->natureRegle8;
    }

    /**
     * Get the nature regle9.
     *
     * @return string Returns the nature regle9.
     */
    public function getNatureRegle9() {
        return $this->natureRegle9;
    }

    /**
     * Get the niveau analytique.
     *
     * @return int Returns the niveau analytique.
     */
    public function getNiveauAnalytique() {
        return $this->niveauAnalytique;
    }

    /**
     * Get the niveau droit1.
     *
     * @return string Returns the niveau droit1.
     */
    public function getNiveauDroit1() {
        return $this->niveauDroit1;
    }

    /**
     * Get the niveau droit10.
     *
     * @return string Returns the niveau droit10.
     */
    public function getNiveauDroit10() {
        return $this->niveauDroit10;
    }

    /**
     * Get the niveau droit2.
     *
     * @return string Returns the niveau droit2.
     */
    public function getNiveauDroit2() {
        return $this->niveauDroit2;
    }

    /**
     * Get the niveau droit3.
     *
     * @return string Returns the niveau droit3.
     */
    public function getNiveauDroit3() {
        return $this->niveauDroit3;
    }

    /**
     * Get the niveau droit4.
     *
     * @return string Returns the niveau droit4.
     */
    public function getNiveauDroit4() {
        return $this->niveauDroit4;
    }

    /**
     * Get the niveau droit5.
     *
     * @return string Returns the niveau droit5.
     */
    public function getNiveauDroit5() {
        return $this->niveauDroit5;
    }

    /**
     * Get the niveau droit6.
     *
     * @return string Returns the niveau droit6.
     */
    public function getNiveauDroit6() {
        return $this->niveauDroit6;
    }

    /**
     * Get the niveau droit7.
     *
     * @return string Returns the niveau droit7.
     */
    public function getNiveauDroit7() {
        return $this->niveauDroit7;
    }

    /**
     * Get the niveau droit8.
     *
     * @return string Returns the niveau droit8.
     */
    public function getNiveauDroit8() {
        return $this->niveauDroit8;
    }

    /**
     * Get the niveau droit9.
     *
     * @return string Returns the niveau droit9.
     */
    public function getNiveauDroit9() {
        return $this->niveauDroit9;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
    }

    /**
     * Get the nom voie.
     *
     * @return string Returns the nom voie.
     */
    public function getNomVoie() {
        return $this->nomVoie;
    }

    /**
     * Get the num voie.
     *
     * @return string Returns the num voie.
     */
    public function getNumVoie() {
        return $this->numVoie;
    }

    /**
     * Get the pas ecriture r b.
     *
     * @return bool Returns the pas ecriture r b.
     */
    public function getPasEcritureRB() {
        return $this->pasEcritureRB;
    }

    /**
     * Get the pas modif r i b regl.
     *
     * @return bool Returns the pas modif r i b regl.
     */
    public function getPasModifRIBRegl() {
        return $this->pasModifRIBRegl;
    }

    /**
     * Get the periode cloturee.
     *
     * @return DateTime Returns the periode cloturee.
     */
    public function getPeriodeCloturee() {
        return $this->periodeCloturee;
    }

    /**
     * Get the periode validee.
     *
     * @return DateTime Returns the periode validee.
     */
    public function getPeriodeValidee() {
        return $this->periodeValidee;
    }

    /**
     * Get the prochain num piece.
     *
     * @return int Returns the prochain num piece.
     */
    public function getProchainNumPiece() {
        return $this->prochainNumPiece;
    }

    /**
     * Get the r c.
     *
     * @return string Returns the r c.
     */
    public function getRC() {
        return $this->rC;
    }

    /**
     * Get the raison sociale.
     *
     * @return string Returns the raison sociale.
     */
    public function getRaisonSociale() {
        return $this->raisonSociale;
    }

    /**
     * Get the saisie immo en ecriture.
     *
     * @return bool Returns the saisie immo en ecriture.
     */
    public function getSaisieImmoEnEcriture() {
        return $this->saisieImmoEnEcriture;
    }

    /**
     * Get the sauve commun.
     *
     * @return bool Returns the sauve commun.
     */
    public function getSauveCommun() {
        return $this->sauveCommun;
    }

    /**
     * Get the sauve compresse.
     *
     * @return bool Returns the sauve compresse.
     */
    public function getSauveCompresse() {
        return $this->sauveCompresse;
    }

    /**
     * Get the siret.
     *
     * @return string Returns the siret.
     */
    public function getSiret() {
        return $this->siret;
    }

    /**
     * Get the suivi aff tout.
     *
     * @return bool Returns the suivi aff tout.
     */
    public function getSuiviAffTout() {
        return $this->suiviAffTout;
    }

    /**
     * Get the suivi ana2.
     *
     * @return string Returns the suivi ana2.
     */
    public function getSuiviAna2() {
        return $this->suiviAna2;
    }

    /**
     * Get the suivi ana classe0.
     *
     * @return bool Returns the suivi ana classe0.
     */
    public function getSuiviAnaClasse0() {
        return $this->suiviAnaClasse0;
    }

    /**
     * Get the suivi ana classe1.
     *
     * @return bool Returns the suivi ana classe1.
     */
    public function getSuiviAnaClasse1() {
        return $this->suiviAnaClasse1;
    }

    /**
     * Get the suivi ana classe2.
     *
     * @return bool Returns the suivi ana classe2.
     */
    public function getSuiviAnaClasse2() {
        return $this->suiviAnaClasse2;
    }

    /**
     * Get the suivi ana classe3.
     *
     * @return bool Returns the suivi ana classe3.
     */
    public function getSuiviAnaClasse3() {
        return $this->suiviAnaClasse3;
    }

    /**
     * Get the suivi ana classe4.
     *
     * @return bool Returns the suivi ana classe4.
     */
    public function getSuiviAnaClasse4() {
        return $this->suiviAnaClasse4;
    }

    /**
     * Get the suivi ana classe5.
     *
     * @return bool Returns the suivi ana classe5.
     */
    public function getSuiviAnaClasse5() {
        return $this->suiviAnaClasse5;
    }

    /**
     * Get the suivi ana classe8.
     *
     * @return bool Returns the suivi ana classe8.
     */
    public function getSuiviAnaClasse8() {
        return $this->suiviAnaClasse8;
    }

    /**
     * Get the suivi ana classe9.
     *
     * @return bool Returns the suivi ana classe9.
     */
    public function getSuiviAnaClasse9() {
        return $this->suiviAnaClasse9;
    }

    /**
     * Get the suivi ana facultatif.
     *
     * @return bool Returns the suivi ana facultatif.
     */
    public function getSuiviAnaFacultatif() {
        return $this->suiviAnaFacultatif;
    }

    /**
     * Get the tva cle.
     *
     * @return string Returns the tva cle.
     */
    public function getTvaCle() {
        return $this->tvaCle;
    }

    /**
     * Get the tva code dossier.
     *
     * @return string Returns the tva code dossier.
     */
    public function getTvaCodeDossier() {
        return $this->tvaCodeDossier;
    }

    /**
     * Get the tva code recette.
     *
     * @return string Returns the tva code recette.
     */
    public function getTvaCodeRecette() {
        return $this->tvaCodeRecette;
    }

    /**
     * Get the ventilations communes.
     *
     * @return bool Returns the ventilations communes.
     */
    public function getVentilationsCommunes() {
        return $this->ventilationsCommunes;
    }

    /**
     * Set the b t q.
     *
     * @param string $bTQ The b t q.
     * @return Dossier1 Returns this dossier1.
     */
    public function setBTQ($bTQ) {
        $this->bTQ = $bTQ;
        return $this;
    }

    /**
     * Set the bureau distributeur.
     *
     * @param string $bureauDistributeur The bureau distributeur.
     * @return Dossier1 Returns this dossier1.
     */
    public function setBureauDistributeur($bureauDistributeur) {
        $this->bureauDistributeur = $bureauDistributeur;
        return $this;
    }

    /**
     * Set the calcul ana fait.
     *
     * @param bool $calculAnaFait The calcul ana fait.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCalculAnaFait($calculAnaFait) {
        $this->calculAnaFait = $calculAnaFait;
        return $this;
    }

    /**
     * Set the chemin implantation ascii.
     *
     * @param string $cheminImplantationAscii The chemin implantation ascii.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCheminImplantationAscii($cheminImplantationAscii) {
        $this->cheminImplantationAscii = $cheminImplantationAscii;
        return $this;
    }

    /**
     * Set the civilite.
     *
     * @param string $civilite The civilite.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCivilite($civilite) {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Set the cle acces1.
     *
     * @param string $cleAcces1 The cle acces1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces1($cleAcces1) {
        $this->cleAcces1 = $cleAcces1;
        return $this;
    }

    /**
     * Set the cle acces10.
     *
     * @param string $cleAcces10 The cle acces10.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces10($cleAcces10) {
        $this->cleAcces10 = $cleAcces10;
        return $this;
    }

    /**
     * Set the cle acces2.
     *
     * @param string $cleAcces2 The cle acces2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces2($cleAcces2) {
        $this->cleAcces2 = $cleAcces2;
        return $this;
    }

    /**
     * Set the cle acces3.
     *
     * @param string $cleAcces3 The cle acces3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces3($cleAcces3) {
        $this->cleAcces3 = $cleAcces3;
        return $this;
    }

    /**
     * Set the cle acces4.
     *
     * @param string $cleAcces4 The cle acces4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces4($cleAcces4) {
        $this->cleAcces4 = $cleAcces4;
        return $this;
    }

    /**
     * Set the cle acces5.
     *
     * @param string $cleAcces5 The cle acces5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces5($cleAcces5) {
        $this->cleAcces5 = $cleAcces5;
        return $this;
    }

    /**
     * Set the cle acces6.
     *
     * @param string $cleAcces6 The cle acces6.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces6($cleAcces6) {
        $this->cleAcces6 = $cleAcces6;
        return $this;
    }

    /**
     * Set the cle acces7.
     *
     * @param string $cleAcces7 The cle acces7.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces7($cleAcces7) {
        $this->cleAcces7 = $cleAcces7;
        return $this;
    }

    /**
     * Set the cle acces8.
     *
     * @param string $cleAcces8 The cle acces8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces8($cleAcces8) {
        $this->cleAcces8 = $cleAcces8;
        return $this;
    }

    /**
     * Set the cle acces9.
     *
     * @param string $cleAcces9 The cle acces9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleAcces9($cleAcces9) {
        $this->cleAcces9 = $cleAcces9;
        return $this;
    }

    /**
     * Set the cle deblocage journaux.
     *
     * @param string $cleDeblocageJournaux The cle deblocage journaux.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCleDeblocageJournaux($cleDeblocageJournaux) {
        $this->cleDeblocageJournaux = $cleDeblocageJournaux;
        return $this;
    }

    /**
     * Set the cle portable.
     *
     * @param string $clePortable The cle portable.
     * @return Dossier1 Returns this dossier1.
     */
    public function setClePortable($clePortable) {
        $this->clePortable = $clePortable;
        return $this;
    }

    /**
     * Set the code equipe.
     *
     * @param string $codeEquipe The code equipe.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCodeEquipe($codeEquipe) {
        $this->codeEquipe = $codeEquipe;
        return $this;
    }

    /**
     * Set the code n a f.
     *
     * @param string $codeNAF The code n a f.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCodeNAF($codeNAF) {
        $this->codeNAF = $codeNAF;
        return $this;
    }

    /**
     * Set the code n a f2008.
     *
     * @param string $codeNAF2008 The code n a f2008.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCodeNAF2008($codeNAF2008) {
        $this->codeNAF2008 = $codeNAF2008;
        return $this;
    }

    /**
     * Set the code officiel commune.
     *
     * @param string $codeOfficielCommune The code officiel commune.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCodeOfficielCommune($codeOfficielCommune) {
        $this->codeOfficielCommune = $codeOfficielCommune;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string $codePostal The code postal.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCodePostal($codePostal) {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the complement.
     *
     * @param string $complement The complement.
     * @return Dossier1 Returns this dossier1.
     */
    public function setComplement($complement) {
        $this->complement = $complement;
        return $this;
    }

    /**
     * Set the copie backup.
     *
     * @param string $copieBackup The copie backup.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCopieBackup($copieBackup) {
        $this->copieBackup = $copieBackup;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe0.
     *
     * @param string $cptDebSuiviClasse0 The cpt deb suivi classe0.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse0($cptDebSuiviClasse0) {
        $this->cptDebSuiviClasse0 = $cptDebSuiviClasse0;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe1.
     *
     * @param string $cptDebSuiviClasse1 The cpt deb suivi classe1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse1($cptDebSuiviClasse1) {
        $this->cptDebSuiviClasse1 = $cptDebSuiviClasse1;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe2.
     *
     * @param string $cptDebSuiviClasse2 The cpt deb suivi classe2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse2($cptDebSuiviClasse2) {
        $this->cptDebSuiviClasse2 = $cptDebSuiviClasse2;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe3.
     *
     * @param string $cptDebSuiviClasse3 The cpt deb suivi classe3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse3($cptDebSuiviClasse3) {
        $this->cptDebSuiviClasse3 = $cptDebSuiviClasse3;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe4.
     *
     * @param string $cptDebSuiviClasse4 The cpt deb suivi classe4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse4($cptDebSuiviClasse4) {
        $this->cptDebSuiviClasse4 = $cptDebSuiviClasse4;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe5.
     *
     * @param string $cptDebSuiviClasse5 The cpt deb suivi classe5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse5($cptDebSuiviClasse5) {
        $this->cptDebSuiviClasse5 = $cptDebSuiviClasse5;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe8.
     *
     * @param string $cptDebSuiviClasse8 The cpt deb suivi classe8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse8($cptDebSuiviClasse8) {
        $this->cptDebSuiviClasse8 = $cptDebSuiviClasse8;
        return $this;
    }

    /**
     * Set the cpt deb suivi classe9.
     *
     * @param string $cptDebSuiviClasse9 The cpt deb suivi classe9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptDebSuiviClasse9($cptDebSuiviClasse9) {
        $this->cptDebSuiviClasse9 = $cptDebSuiviClasse9;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe0.
     *
     * @param string $cptFinSuiviClasse0 The cpt fin suivi classe0.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse0($cptFinSuiviClasse0) {
        $this->cptFinSuiviClasse0 = $cptFinSuiviClasse0;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe1.
     *
     * @param string $cptFinSuiviClasse1 The cpt fin suivi classe1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse1($cptFinSuiviClasse1) {
        $this->cptFinSuiviClasse1 = $cptFinSuiviClasse1;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe2.
     *
     * @param string $cptFinSuiviClasse2 The cpt fin suivi classe2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse2($cptFinSuiviClasse2) {
        $this->cptFinSuiviClasse2 = $cptFinSuiviClasse2;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe3.
     *
     * @param string $cptFinSuiviClasse3 The cpt fin suivi classe3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse3($cptFinSuiviClasse3) {
        $this->cptFinSuiviClasse3 = $cptFinSuiviClasse3;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe4.
     *
     * @param string $cptFinSuiviClasse4 The cpt fin suivi classe4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse4($cptFinSuiviClasse4) {
        $this->cptFinSuiviClasse4 = $cptFinSuiviClasse4;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe5.
     *
     * @param string $cptFinSuiviClasse5 The cpt fin suivi classe5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse5($cptFinSuiviClasse5) {
        $this->cptFinSuiviClasse5 = $cptFinSuiviClasse5;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe8.
     *
     * @param string $cptFinSuiviClasse8 The cpt fin suivi classe8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse8($cptFinSuiviClasse8) {
        $this->cptFinSuiviClasse8 = $cptFinSuiviClasse8;
        return $this;
    }

    /**
     * Set the cpt fin suivi classe9.
     *
     * @param string $cptFinSuiviClasse9 The cpt fin suivi classe9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCptFinSuiviClasse9($cptFinSuiviClasse9) {
        $this->cptFinSuiviClasse9 = $cptFinSuiviClasse9;
        return $this;
    }

    /**
     * Set the createur dossier.
     *
     * @param string $createurDossier The createur dossier.
     * @return Dossier1 Returns this dossier1.
     */
    public function setCreateurDossier($createurDossier) {
        $this->createurDossier = $createurDossier;
        return $this;
    }

    /**
     * Set the d l u.
     *
     * @param string $dLU The d l u.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDLU($dLU) {
        $this->dLU = $dLU;
        return $this;
    }

    /**
     * Set the date limite saisie.
     *
     * @param DateTime $dateLimiteSaisie The date limite saisie.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDateLimiteSaisie(DateTime $dateLimiteSaisie = null) {
        $this->dateLimiteSaisie = $dateLimiteSaisie;
        return $this;
    }

    /**
     * Set the date sys changt ex.
     *
     * @param DateTime $dateSysChangtEx The date sys changt ex.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDateSysChangtEx(DateTime $dateSysChangtEx = null) {
        $this->dateSysChangtEx = $dateSysChangtEx;
        return $this;
    }

    /**
     * Set the date sys cloture periode.
     *
     * @param DateTime $dateSysCloturePeriode The date sys cloture periode.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDateSysCloturePeriode(DateTime $dateSysCloturePeriode = null) {
        $this->dateSysCloturePeriode = $dateSysCloturePeriode;
        return $this;
    }

    /**
     * Set the date sys creation.
     *
     * @param DateTime $dateSysCreation The date sys creation.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDateSysCreation(DateTime $dateSysCreation = null) {
        $this->dateSysCreation = $dateSysCreation;
        return $this;
    }

    /**
     * Set the date travail.
     *
     * @param DateTime $dateTravail The date travail.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDateTravail(DateTime $dateTravail = null) {
        $this->dateTravail = $dateTravail;
        return $this;
    }

    /**
     * Set the debut exercice.
     *
     * @param DateTime $debutExercice The debut exercice.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDebutExercice(DateTime $debutExercice = null) {
        $this->debutExercice = $debutExercice;
        return $this;
    }

    /**
     * Set the debut exercice_1.
     *
     * @param DateTime $debutExercice_1 The debut exercice_1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDebutExercice_1(DateTime $debutExercice_1 = null) {
        $this->debutExercice_1 = $debutExercice_1;
        return $this;
    }

    /**
     * Set the delai limite saisie.
     *
     * @param int $delaiLimiteSaisie The delai limite saisie.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDelaiLimiteSaisie($delaiLimiteSaisie) {
        $this->delaiLimiteSaisie = $delaiLimiteSaisie;
        return $this;
    }

    /**
     * Set the droit creation type cpt1.
     *
     * @param string $droitCreationTypeCpt1 The droit creation type cpt1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt1($droitCreationTypeCpt1) {
        $this->droitCreationTypeCpt1 = $droitCreationTypeCpt1;
        return $this;
    }

    /**
     * Set the droit creation type cpt10.
     *
     * @param string $droitCreationTypeCpt10 The droit creation type cpt10.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt10($droitCreationTypeCpt10) {
        $this->droitCreationTypeCpt10 = $droitCreationTypeCpt10;
        return $this;
    }

    /**
     * Set the droit creation type cpt2.
     *
     * @param string $droitCreationTypeCpt2 The droit creation type cpt2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt2($droitCreationTypeCpt2) {
        $this->droitCreationTypeCpt2 = $droitCreationTypeCpt2;
        return $this;
    }

    /**
     * Set the droit creation type cpt3.
     *
     * @param string $droitCreationTypeCpt3 The droit creation type cpt3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt3($droitCreationTypeCpt3) {
        $this->droitCreationTypeCpt3 = $droitCreationTypeCpt3;
        return $this;
    }

    /**
     * Set the droit creation type cpt4.
     *
     * @param string $droitCreationTypeCpt4 The droit creation type cpt4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt4($droitCreationTypeCpt4) {
        $this->droitCreationTypeCpt4 = $droitCreationTypeCpt4;
        return $this;
    }

    /**
     * Set the droit creation type cpt5.
     *
     * @param string $droitCreationTypeCpt5 The droit creation type cpt5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt5($droitCreationTypeCpt5) {
        $this->droitCreationTypeCpt5 = $droitCreationTypeCpt5;
        return $this;
    }

    /**
     * Set the droit creation type cpt6.
     *
     * @param string $droitCreationTypeCpt6 The droit creation type cpt6.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt6($droitCreationTypeCpt6) {
        $this->droitCreationTypeCpt6 = $droitCreationTypeCpt6;
        return $this;
    }

    /**
     * Set the droit creation type cpt7.
     *
     * @param string $droitCreationTypeCpt7 The droit creation type cpt7.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt7($droitCreationTypeCpt7) {
        $this->droitCreationTypeCpt7 = $droitCreationTypeCpt7;
        return $this;
    }

    /**
     * Set the droit creation type cpt8.
     *
     * @param string $droitCreationTypeCpt8 The droit creation type cpt8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt8($droitCreationTypeCpt8) {
        $this->droitCreationTypeCpt8 = $droitCreationTypeCpt8;
        return $this;
    }

    /**
     * Set the droit creation type cpt9.
     *
     * @param string $droitCreationTypeCpt9 The droit creation type cpt9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDroitCreationTypeCpt9($droitCreationTypeCpt9) {
        $this->droitCreationTypeCpt9 = $droitCreationTypeCpt9;
        return $this;
    }

    /**
     * Set the duree exercice.
     *
     * @param string $dureeExercice The duree exercice.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDureeExercice($dureeExercice) {
        $this->dureeExercice = $dureeExercice;
        return $this;
    }

    /**
     * Set the duree exercice_1.
     *
     * @param string $dureeExercice_1 The duree exercice_1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setDureeExercice_1($dureeExercice_1) {
        $this->dureeExercice_1 = $dureeExercice_1;
        return $this;
    }

    /**
     * Set the edit date systeme.
     *
     * @param bool $editDateSysteme The edit date systeme.
     * @return Dossier1 Returns this dossier1.
     */
    public function setEditDateSysteme($editDateSysteme) {
        $this->editDateSysteme = $editDateSysteme;
        return $this;
    }

    /**
     * Set the edit page garde.
     *
     * @param bool $editPageGarde The edit page garde.
     * @return Dossier1 Returns this dossier1.
     */
    public function setEditPageGarde($editPageGarde) {
        $this->editPageGarde = $editPageGarde;
        return $this;
    }

    /**
     * Set the enseigne.
     *
     * @param string $enseigne The enseigne.
     * @return Dossier1 Returns this dossier1.
     */
    public function setEnseigne($enseigne) {
        $this->enseigne = $enseigne;
        return $this;
    }

    /**
     * Set the euro ou franc.
     *
     * @param string $euroOuFranc The euro ou franc.
     * @return Dossier1 Returns this dossier1.
     */
    public function setEuroOuFranc($euroOuFranc) {
        $this->euroOuFranc = $euroOuFranc;
        return $this;
    }

    /**
     * Set the famille1.
     *
     * @param string $famille1 The famille1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille1($famille1) {
        $this->famille1 = $famille1;
        return $this;
    }

    /**
     * Set the famille10.
     *
     * @param string $famille10 The famille10.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille10($famille10) {
        $this->famille10 = $famille10;
        return $this;
    }

    /**
     * Set the famille2.
     *
     * @param string $famille2 The famille2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille2($famille2) {
        $this->famille2 = $famille2;
        return $this;
    }

    /**
     * Set the famille3.
     *
     * @param string $famille3 The famille3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille3($famille3) {
        $this->famille3 = $famille3;
        return $this;
    }

    /**
     * Set the famille4.
     *
     * @param string $famille4 The famille4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille4($famille4) {
        $this->famille4 = $famille4;
        return $this;
    }

    /**
     * Set the famille5.
     *
     * @param string $famille5 The famille5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille5($famille5) {
        $this->famille5 = $famille5;
        return $this;
    }

    /**
     * Set the famille6.
     *
     * @param string $famille6 The famille6.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille6($famille6) {
        $this->famille6 = $famille6;
        return $this;
    }

    /**
     * Set the famille7.
     *
     * @param string $famille7 The famille7.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille7($famille7) {
        $this->famille7 = $famille7;
        return $this;
    }

    /**
     * Set the famille8.
     *
     * @param string $famille8 The famille8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille8($famille8) {
        $this->famille8 = $famille8;
        return $this;
    }

    /**
     * Set the famille9.
     *
     * @param string $famille9 The famille9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamille9($famille9) {
        $this->famille9 = $famille9;
        return $this;
    }

    /**
     * Set the famille analytique.
     *
     * @param string $familleAnalytique The famille analytique.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFamilleAnalytique($familleAnalytique) {
        $this->familleAnalytique = $familleAnalytique;
        return $this;
    }

    /**
     * Set the fin exercice.
     *
     * @param DateTime $finExercice The fin exercice.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFinExercice(DateTime $finExercice = null) {
        $this->finExercice = $finExercice;
        return $this;
    }

    /**
     * Set the fin exercice_1.
     *
     * @param DateTime $finExercice_1 The fin exercice_1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setFinExercice_1(DateTime $finExercice_1 = null) {
        $this->finExercice_1 = $finExercice_1;
        return $this;
    }

    /**
     * Set the gestion compta eco.
     *
     * @param bool $gestionComptaEco The gestion compta eco.
     * @return Dossier1 Returns this dossier1.
     */
    public function setGestionComptaEco($gestionComptaEco) {
        $this->gestionComptaEco = $gestionComptaEco;
        return $this;
    }

    /**
     * Set the groupe app clients.
     *
     * @param string $groupeAppClients The groupe app clients.
     * @return Dossier1 Returns this dossier1.
     */
    public function setGroupeAppClients($groupeAppClients) {
        $this->groupeAppClients = $groupeAppClients;
        return $this;
    }

    /**
     * Set the l r active.
     *
     * @param bool $lRActive The l r active.
     * @return Dossier1 Returns this dossier1.
     */
    public function setLRActive($lRActive) {
        $this->lRActive = $lRActive;
        return $this;
    }

    /**
     * Set the l r periode.
     *
     * @param DateTime $lRPeriode The l r periode.
     * @return Dossier1 Returns this dossier1.
     */
    public function setLRPeriode(DateTime $lRPeriode = null) {
        $this->lRPeriode = $lRPeriode;
        return $this;
    }

    /**
     * Set the module agr actif.
     *
     * @param bool $moduleAgrActif The module agr actif.
     * @return Dossier1 Returns this dossier1.
     */
    public function setModuleAgrActif($moduleAgrActif) {
        $this->moduleAgrActif = $moduleAgrActif;
        return $this;
    }

    /**
     * Set the multi dossiers.
     *
     * @param bool $multiDossiers The multi dossiers.
     * @return Dossier1 Returns this dossier1.
     */
    public function setMultiDossiers($multiDossiers) {
        $this->multiDossiers = $multiDossiers;
        return $this;
    }

    /**
     * Set the nature menu1.
     *
     * @param string $natureMenu1 The nature menu1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu1($natureMenu1) {
        $this->natureMenu1 = $natureMenu1;
        return $this;
    }

    /**
     * Set the nature menu10.
     *
     * @param string $natureMenu10 The nature menu10.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu10($natureMenu10) {
        $this->natureMenu10 = $natureMenu10;
        return $this;
    }

    /**
     * Set the nature menu2.
     *
     * @param string $natureMenu2 The nature menu2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu2($natureMenu2) {
        $this->natureMenu2 = $natureMenu2;
        return $this;
    }

    /**
     * Set the nature menu3.
     *
     * @param string $natureMenu3 The nature menu3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu3($natureMenu3) {
        $this->natureMenu3 = $natureMenu3;
        return $this;
    }

    /**
     * Set the nature menu4.
     *
     * @param string $natureMenu4 The nature menu4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu4($natureMenu4) {
        $this->natureMenu4 = $natureMenu4;
        return $this;
    }

    /**
     * Set the nature menu5.
     *
     * @param string $natureMenu5 The nature menu5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu5($natureMenu5) {
        $this->natureMenu5 = $natureMenu5;
        return $this;
    }

    /**
     * Set the nature menu6.
     *
     * @param string $natureMenu6 The nature menu6.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu6($natureMenu6) {
        $this->natureMenu6 = $natureMenu6;
        return $this;
    }

    /**
     * Set the nature menu7.
     *
     * @param string $natureMenu7 The nature menu7.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu7($natureMenu7) {
        $this->natureMenu7 = $natureMenu7;
        return $this;
    }

    /**
     * Set the nature menu8.
     *
     * @param string $natureMenu8 The nature menu8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu8($natureMenu8) {
        $this->natureMenu8 = $natureMenu8;
        return $this;
    }

    /**
     * Set the nature menu9.
     *
     * @param string $natureMenu9 The nature menu9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureMenu9($natureMenu9) {
        $this->natureMenu9 = $natureMenu9;
        return $this;
    }

    /**
     * Set the nature regle1.
     *
     * @param string $natureRegle1 The nature regle1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle1($natureRegle1) {
        $this->natureRegle1 = $natureRegle1;
        return $this;
    }

    /**
     * Set the nature regle10.
     *
     * @param string $natureRegle10 The nature regle10.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle10($natureRegle10) {
        $this->natureRegle10 = $natureRegle10;
        return $this;
    }

    /**
     * Set the nature regle2.
     *
     * @param string $natureRegle2 The nature regle2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle2($natureRegle2) {
        $this->natureRegle2 = $natureRegle2;
        return $this;
    }

    /**
     * Set the nature regle3.
     *
     * @param string $natureRegle3 The nature regle3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle3($natureRegle3) {
        $this->natureRegle3 = $natureRegle3;
        return $this;
    }

    /**
     * Set the nature regle4.
     *
     * @param string $natureRegle4 The nature regle4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle4($natureRegle4) {
        $this->natureRegle4 = $natureRegle4;
        return $this;
    }

    /**
     * Set the nature regle5.
     *
     * @param string $natureRegle5 The nature regle5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle5($natureRegle5) {
        $this->natureRegle5 = $natureRegle5;
        return $this;
    }

    /**
     * Set the nature regle6.
     *
     * @param string $natureRegle6 The nature regle6.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle6($natureRegle6) {
        $this->natureRegle6 = $natureRegle6;
        return $this;
    }

    /**
     * Set the nature regle7.
     *
     * @param string $natureRegle7 The nature regle7.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle7($natureRegle7) {
        $this->natureRegle7 = $natureRegle7;
        return $this;
    }

    /**
     * Set the nature regle8.
     *
     * @param string $natureRegle8 The nature regle8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle8($natureRegle8) {
        $this->natureRegle8 = $natureRegle8;
        return $this;
    }

    /**
     * Set the nature regle9.
     *
     * @param string $natureRegle9 The nature regle9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNatureRegle9($natureRegle9) {
        $this->natureRegle9 = $natureRegle9;
        return $this;
    }

    /**
     * Set the niveau analytique.
     *
     * @param int $niveauAnalytique The niveau analytique.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauAnalytique($niveauAnalytique) {
        $this->niveauAnalytique = $niveauAnalytique;
        return $this;
    }

    /**
     * Set the niveau droit1.
     *
     * @param string $niveauDroit1 The niveau droit1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit1($niveauDroit1) {
        $this->niveauDroit1 = $niveauDroit1;
        return $this;
    }

    /**
     * Set the niveau droit10.
     *
     * @param string $niveauDroit10 The niveau droit10.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit10($niveauDroit10) {
        $this->niveauDroit10 = $niveauDroit10;
        return $this;
    }

    /**
     * Set the niveau droit2.
     *
     * @param string $niveauDroit2 The niveau droit2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit2($niveauDroit2) {
        $this->niveauDroit2 = $niveauDroit2;
        return $this;
    }

    /**
     * Set the niveau droit3.
     *
     * @param string $niveauDroit3 The niveau droit3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit3($niveauDroit3) {
        $this->niveauDroit3 = $niveauDroit3;
        return $this;
    }

    /**
     * Set the niveau droit4.
     *
     * @param string $niveauDroit4 The niveau droit4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit4($niveauDroit4) {
        $this->niveauDroit4 = $niveauDroit4;
        return $this;
    }

    /**
     * Set the niveau droit5.
     *
     * @param string $niveauDroit5 The niveau droit5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit5($niveauDroit5) {
        $this->niveauDroit5 = $niveauDroit5;
        return $this;
    }

    /**
     * Set the niveau droit6.
     *
     * @param string $niveauDroit6 The niveau droit6.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit6($niveauDroit6) {
        $this->niveauDroit6 = $niveauDroit6;
        return $this;
    }

    /**
     * Set the niveau droit7.
     *
     * @param string $niveauDroit7 The niveau droit7.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit7($niveauDroit7) {
        $this->niveauDroit7 = $niveauDroit7;
        return $this;
    }

    /**
     * Set the niveau droit8.
     *
     * @param string $niveauDroit8 The niveau droit8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit8($niveauDroit8) {
        $this->niveauDroit8 = $niveauDroit8;
        return $this;
    }

    /**
     * Set the niveau droit9.
     *
     * @param string $niveauDroit9 The niveau droit9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNiveauDroit9($niveauDroit9) {
        $this->niveauDroit9 = $niveauDroit9;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the nom voie.
     *
     * @param string $nomVoie The nom voie.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNomVoie($nomVoie) {
        $this->nomVoie = $nomVoie;
        return $this;
    }

    /**
     * Set the num voie.
     *
     * @param string $numVoie The num voie.
     * @return Dossier1 Returns this dossier1.
     */
    public function setNumVoie($numVoie) {
        $this->numVoie = $numVoie;
        return $this;
    }

    /**
     * Set the pas ecriture r b.
     *
     * @param bool $pasEcritureRB The pas ecriture r b.
     * @return Dossier1 Returns this dossier1.
     */
    public function setPasEcritureRB($pasEcritureRB) {
        $this->pasEcritureRB = $pasEcritureRB;
        return $this;
    }

    /**
     * Set the pas modif r i b regl.
     *
     * @param bool $pasModifRIBRegl The pas modif r i b regl.
     * @return Dossier1 Returns this dossier1.
     */
    public function setPasModifRIBRegl($pasModifRIBRegl) {
        $this->pasModifRIBRegl = $pasModifRIBRegl;
        return $this;
    }

    /**
     * Set the periode cloturee.
     *
     * @param DateTime $periodeCloturee The periode cloturee.
     * @return Dossier1 Returns this dossier1.
     */
    public function setPeriodeCloturee(DateTime $periodeCloturee = null) {
        $this->periodeCloturee = $periodeCloturee;
        return $this;
    }

    /**
     * Set the periode validee.
     *
     * @param DateTime $periodeValidee The periode validee.
     * @return Dossier1 Returns this dossier1.
     */
    public function setPeriodeValidee(DateTime $periodeValidee = null) {
        $this->periodeValidee = $periodeValidee;
        return $this;
    }

    /**
     * Set the prochain num piece.
     *
     * @param int $prochainNumPiece The prochain num piece.
     * @return Dossier1 Returns this dossier1.
     */
    public function setProchainNumPiece($prochainNumPiece) {
        $this->prochainNumPiece = $prochainNumPiece;
        return $this;
    }

    /**
     * Set the r c.
     *
     * @param string $rC The r c.
     * @return Dossier1 Returns this dossier1.
     */
    public function setRC($rC) {
        $this->rC = $rC;
        return $this;
    }

    /**
     * Set the raison sociale.
     *
     * @param string $raisonSociale The raison sociale.
     * @return Dossier1 Returns this dossier1.
     */
    public function setRaisonSociale($raisonSociale) {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Set the saisie immo en ecriture.
     *
     * @param bool $saisieImmoEnEcriture The saisie immo en ecriture.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSaisieImmoEnEcriture($saisieImmoEnEcriture) {
        $this->saisieImmoEnEcriture = $saisieImmoEnEcriture;
        return $this;
    }

    /**
     * Set the sauve commun.
     *
     * @param bool $sauveCommun The sauve commun.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSauveCommun($sauveCommun) {
        $this->sauveCommun = $sauveCommun;
        return $this;
    }

    /**
     * Set the sauve compresse.
     *
     * @param bool $sauveCompresse The sauve compresse.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSauveCompresse($sauveCompresse) {
        $this->sauveCompresse = $sauveCompresse;
        return $this;
    }

    /**
     * Set the siret.
     *
     * @param string $siret The siret.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSiret($siret) {
        $this->siret = $siret;
        return $this;
    }

    /**
     * Set the suivi aff tout.
     *
     * @param bool $suiviAffTout The suivi aff tout.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAffTout($suiviAffTout) {
        $this->suiviAffTout = $suiviAffTout;
        return $this;
    }

    /**
     * Set the suivi ana2.
     *
     * @param string $suiviAna2 The suivi ana2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAna2($suiviAna2) {
        $this->suiviAna2 = $suiviAna2;
        return $this;
    }

    /**
     * Set the suivi ana classe0.
     *
     * @param bool $suiviAnaClasse0 The suivi ana classe0.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse0($suiviAnaClasse0) {
        $this->suiviAnaClasse0 = $suiviAnaClasse0;
        return $this;
    }

    /**
     * Set the suivi ana classe1.
     *
     * @param bool $suiviAnaClasse1 The suivi ana classe1.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse1($suiviAnaClasse1) {
        $this->suiviAnaClasse1 = $suiviAnaClasse1;
        return $this;
    }

    /**
     * Set the suivi ana classe2.
     *
     * @param bool $suiviAnaClasse2 The suivi ana classe2.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse2($suiviAnaClasse2) {
        $this->suiviAnaClasse2 = $suiviAnaClasse2;
        return $this;
    }

    /**
     * Set the suivi ana classe3.
     *
     * @param bool $suiviAnaClasse3 The suivi ana classe3.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse3($suiviAnaClasse3) {
        $this->suiviAnaClasse3 = $suiviAnaClasse3;
        return $this;
    }

    /**
     * Set the suivi ana classe4.
     *
     * @param bool $suiviAnaClasse4 The suivi ana classe4.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse4($suiviAnaClasse4) {
        $this->suiviAnaClasse4 = $suiviAnaClasse4;
        return $this;
    }

    /**
     * Set the suivi ana classe5.
     *
     * @param bool $suiviAnaClasse5 The suivi ana classe5.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse5($suiviAnaClasse5) {
        $this->suiviAnaClasse5 = $suiviAnaClasse5;
        return $this;
    }

    /**
     * Set the suivi ana classe8.
     *
     * @param bool $suiviAnaClasse8 The suivi ana classe8.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse8($suiviAnaClasse8) {
        $this->suiviAnaClasse8 = $suiviAnaClasse8;
        return $this;
    }

    /**
     * Set the suivi ana classe9.
     *
     * @param bool $suiviAnaClasse9 The suivi ana classe9.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaClasse9($suiviAnaClasse9) {
        $this->suiviAnaClasse9 = $suiviAnaClasse9;
        return $this;
    }

    /**
     * Set the suivi ana facultatif.
     *
     * @param bool $suiviAnaFacultatif The suivi ana facultatif.
     * @return Dossier1 Returns this dossier1.
     */
    public function setSuiviAnaFacultatif($suiviAnaFacultatif) {
        $this->suiviAnaFacultatif = $suiviAnaFacultatif;
        return $this;
    }

    /**
     * Set the tva cle.
     *
     * @param string $tvaCle The tva cle.
     * @return Dossier1 Returns this dossier1.
     */
    public function setTvaCle($tvaCle) {
        $this->tvaCle = $tvaCle;
        return $this;
    }

    /**
     * Set the tva code dossier.
     *
     * @param string $tvaCodeDossier The tva code dossier.
     * @return Dossier1 Returns this dossier1.
     */
    public function setTvaCodeDossier($tvaCodeDossier) {
        $this->tvaCodeDossier = $tvaCodeDossier;
        return $this;
    }

    /**
     * Set the tva code recette.
     *
     * @param string $tvaCodeRecette The tva code recette.
     * @return Dossier1 Returns this dossier1.
     */
    public function setTvaCodeRecette($tvaCodeRecette) {
        $this->tvaCodeRecette = $tvaCodeRecette;
        return $this;
    }

    /**
     * Set the ventilations communes.
     *
     * @param bool $ventilationsCommunes The ventilations communes.
     * @return Dossier1 Returns this dossier1.
     */
    public function setVentilationsCommunes($ventilationsCommunes) {
        $this->ventilationsCommunes = $ventilationsCommunes;
        return $this;
    }
}
