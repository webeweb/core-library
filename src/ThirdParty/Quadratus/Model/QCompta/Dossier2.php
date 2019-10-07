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
 * Dossier2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class Dossier2 {

    /**
     * Annee recolte.
     *
     * @var string
     */
    private $anneeRecolte;

    /**
     * Appliquer regroupement.
     *
     * @var bool
     */
    private $appliquerRegroupement;

    /**
     * C c a_ memo.
     *
     * @var string
     */
    private $cCA_Memo;

    /**
     * Classe4 client debut.
     *
     * @var string
     */
    private $classe4ClientDebut;

    /**
     * Classe4 client fin.
     *
     * @var string
     */
    private $classe4ClientFin;

    /**
     * Classe4 frn debut.
     *
     * @var string
     */
    private $classe4FrnDebut;

    /**
     * Classe4 frn fin.
     *
     * @var string
     */
    private $classe4FrnFin;

    /**
     * Codif classe0.
     *
     * @var string
     */
    private $codifClasse0;

    /**
     * Codif classe0 seule.
     *
     * @var string
     */
    private $codifClasse0Seule;

    /**
     * Codif classe9.
     *
     * @var string
     */
    private $codifClasse9;

    /**
     * Codif classe9 seule.
     *
     * @var string
     */
    private $codifClasse9Seule;

    /**
     * Collectif client debut.
     *
     * @var string
     */
    private $collectifClientDebut;

    /**
     * Collectif client defaut.
     *
     * @var string
     */
    private $collectifClientDefaut;

    /**
     * Collectif client fin.
     *
     * @var string
     */
    private $collectifClientFin;

    /**
     * Collectif frn debut.
     *
     * @var string
     */
    private $collectifFrnDebut;

    /**
     * Collectif frn defaut.
     *
     * @var string
     */
    private $collectifFrnDefaut;

    /**
     * Collectif frn fin.
     *
     * @var string
     */
    private $collectifFrnFin;

    /**
     * Collectif soc debut.
     *
     * @var string
     */
    private $collectifSocDebut;

    /**
     * Collectif soc fin.
     *
     * @var string
     */
    private $collectifSocFin;

    /**
     * Combi lettrage auto.
     *
     * @var int
     */
    private $combiLettrageAuto;

    /**
     * Commentaire dossier.
     *
     * @var string
     */
    private $commentaireDossier;

    /**
     * Control salaire cpt ex.
     *
     * @var string
     */
    private $controlSalaireCptEx;

    /**
     * Control salaire obs.
     *
     * @var string
     */
    private $controlSalaireObs;

    /**
     * D a d s1 livre paie.
     *
     * @var float
     */
    private $dADS1LivrePaie;

    /**
     * D a d s1 paie.
     *
     * @var float
     */
    private $dADS1Paie;

    /**
     * D a d s1 remu moins.
     *
     * @var float
     */
    private $dADS1RemuMoins;

    /**
     * D a d s1 remu plus.
     *
     * @var float
     */
    private $dADS1RemuPlus;

    /**
     * D s code collab.
     *
     * @var string
     */
    private $dSCodeCollab;

    /**
     * D s date retour.
     *
     * @var DateTime
     */
    private $dSDateRetour;

    /**
     * D s date sortie.
     *
     * @var DateTime
     */
    private $dSDateSortie;

    /**
     * Date calcul prov c p.
     *
     * @var DateTime
     */
    private $dateCalculProvCP;

    /**
     * Date publication.
     *
     * @var DateTime
     */
    private $datePublication;

    /**
     * Date raz ecritures.
     *
     * @var DateTime
     */
    private $dateRazEcritures;

    /**
     * Dernier compte client.
     *
     * @var string
     */
    private $dernierCompteClient;

    /**
     * Dernier compte frn.
     *
     * @var string
     */
    private $dernierCompteFrn;

    /**
     * Diff lettrage code journal.
     *
     * @var string
     */
    private $diffLettrageCodeJournal;

    /**
     * Diff lettrage code libelle.
     *
     * @var string
     */
    private $diffLettrageCodeLibelle;

    /**
     * Diff lettrage folio.
     *
     * @var int
     */
    private $diffLettrageFolio;

    /**
     * Diff lettrage gains.
     *
     * @var string
     */
    private $diffLettrageGains;

    /**
     * Diff lettrage libelle.
     *
     * @var string
     */
    private $diffLettrageLibelle;

    /**
     * Diff lettrage pertes.
     *
     * @var string
     */
    private $diffLettragePertes;

    /**
     * Ecart maxi lettrage auto.
     *
     * @var float
     */
    private $ecartMaxiLettrageAuto;

    /**
     * Ecart mini ctrl tva.
     *
     * @var float
     */
    private $ecartMiniCtrlTva;

    /**
     * Editer en c f a.
     *
     * @var bool
     */
    private $editerEnCFA;

    /**
     * Etat prov c p obs.
     *
     * @var string
     */
    private $etatProvCPObs;

    /**
     * Faire controle lettrage.
     *
     * @var string
     */
    private $faireControleLettrage;

    /**
     * Increment compte auto.
     *
     * @var int
     */
    private $incrementCompteAuto;

    /**
     * Libelle plus de30 carac.
     *
     * @var bool
     */
    private $libellePlusDe30Carac;

    /**
     * Lien sai immos.
     *
     * @var bool
     */
    private $lienSaiImmos;

    /**
     * Longueur piece lettrage.
     *
     * @var int
     */
    private $longueurPieceLettrage;

    /**
     * Nb comptes raz.
     *
     * @var int
     */
    private $nbComptesRaz;

    /**
     * Nb decimales mt.
     *
     * @var string
     */
    private $nbDecimalesMt;

    /**
     * Nb ecr a facturer cloture.
     *
     * @var int
     */
    private $nbEcrAFacturerCloture;

    /**
     * Nb ecritures raz.
     *
     * @var int
     */
    private $nbEcrituresRaz;

    /**
     * Nb jour base c p.
     *
     * @var float
     */
    private $nbJourBaseCP;

    /**
     * Niv rupt classe0.
     *
     * @var string
     */
    private $nivRuptClasse0;

    /**
     * Niv rupt classe1.
     *
     * @var string
     */
    private $nivRuptClasse1;

    /**
     * Niv rupt classe2.
     *
     * @var string
     */
    private $nivRuptClasse2;

    /**
     * Niv rupt classe3.
     *
     * @var string
     */
    private $nivRuptClasse3;

    /**
     * Niv rupt classe4.
     *
     * @var string
     */
    private $nivRuptClasse4;

    /**
     * Niv rupt classe5.
     *
     * @var string
     */
    private $nivRuptClasse5;

    /**
     * Niv rupt classe6.
     *
     * @var string
     */
    private $nivRuptClasse6;

    /**
     * Niv rupt classe7.
     *
     * @var string
     */
    private $nivRuptClasse7;

    /**
     * Niv rupt classe8.
     *
     * @var string
     */
    private $nivRuptClasse8;

    /**
     * Niv rupt classe9.
     *
     * @var string
     */
    private $nivRuptClasse9;

    /**
     * Position piece lettrage.
     *
     * @var int
     */
    private $positionPieceLettrage;

    /**
     * Prochain lot ecrit.
     *
     * @var int
     */
    private $prochainLotEcrit;

    /**
     * Prochain lot factor.
     *
     * @var int
     */
    private $prochainLotFactor;

    /**
     * Prochain num ecr eco.
     *
     * @var int
     */
    private $prochainNumEcrEco;

    /**
     * Prochain num lot v m p.
     *
     * @var int
     */
    private $prochainNumLotVMP;

    /**
     * Prov c p cpt brut.
     *
     * @var string
     */
    private $provCPCptBrut;

    /**
     * Prov c p cpt c a p c p.
     *
     * @var string
     */
    private $provCPCptCAPCP;

    /**
     * Prov c p cpt c a p ch.
     *
     * @var string
     */
    private $provCPCptCAPCh;

    /**
     * Prov c p cpt charges.
     *
     * @var string
     */
    private $provCPCptCharges;

    /**
     * Prov mini.
     *
     * @var float
     */
    private $provMini;

    /**
     * Publication.
     *
     * @var bool
     */
    private $publication;

    /**
     * Q i m g2 cpt encours.
     *
     * @var int
     */
    private $qIMG2CptEncours;

    /**
     * Q i m g2 cpt envoi.
     *
     * @var int
     */
    private $qIMG2CptEnvoi;

    /**
     * R f f_ cpt exploitant.
     *
     * @var string
     */
    private $rFF_CptExploitant;

    /**
     * R f f_ cpt interets.
     *
     * @var string
     */
    private $rFF_CptInterets;

    /**
     * R f f_ cpt regul.
     *
     * @var string
     */
    private $rFF_CptRegul;

    /**
     * R f f_ date lot ecr.
     *
     * @var DateTime
     */
    private $rFF_DateLotEcr;

    /**
     * R f f_ decouverts avances.
     *
     * @var float
     */
    private $rFF_DecouvertsAvances;

    /**
     * R f f_ interets emprunts.
     *
     * @var float
     */
    private $rFF_InteretsEmprunts;

    /**
     * R f f_ limite.
     *
     * @var float
     */
    private $rFF_Limite;

    /**
     * R f f_ mtt r f f.
     *
     * @var float
     */
    private $rFF_MttRFF;

    /**
     * R f f_ mtt regul.
     *
     * @var float
     */
    private $rFF_MttRegul;

    /**
     * R f f_ num lot ecr.
     *
     * @var int
     */
    private $rFF_NumLotEcr;

    /**
     * R f f_ type.
     *
     * @var int
     */
    private $rFF_Type;

    /**
     * Rapp d a d s1 obs.
     *
     * @var string
     */
    private $rappDADS1Obs;

    /**
     * Relance adresse cpt.
     *
     * @var bool
     */
    private $relanceAdresseCpt;

    /**
     * Texte relance0.
     *
     * @var string
     */
    private $texteRelance0;

    /**
     * Texte relance1.
     *
     * @var string
     */
    private $texteRelance1;

    /**
     * Texte relance2.
     *
     * @var string
     */
    private $texteRelance2;

    /**
     * Texte relance3.
     *
     * @var string
     */
    private $texteRelance3;

    /**
     * Texte relance4.
     *
     * @var string
     */
    private $texteRelance4;

    /**
     * Treso comptes a exclure.
     *
     * @var string
     */
    private $tresoComptesAExclure;

    /**
     * Utilise quantite2.
     *
     * @var bool
     */
    private $utiliseQuantite2;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annee recolte.
     *
     * @return string Returns the annee recolte.
     */
    public function getAnneeRecolte() {
        return $this->anneeRecolte;
    }

    /**
     * Get the appliquer regroupement.
     *
     * @return bool Returns the appliquer regroupement.
     */
    public function getAppliquerRegroupement() {
        return $this->appliquerRegroupement;
    }

    /**
     * Get the c c a_ memo.
     *
     * @return string Returns the c c a_ memo.
     */
    public function getCCA_Memo() {
        return $this->cCA_Memo;
    }

    /**
     * Get the classe4 client debut.
     *
     * @return string Returns the classe4 client debut.
     */
    public function getClasse4ClientDebut() {
        return $this->classe4ClientDebut;
    }

    /**
     * Get the classe4 client fin.
     *
     * @return string Returns the classe4 client fin.
     */
    public function getClasse4ClientFin() {
        return $this->classe4ClientFin;
    }

    /**
     * Get the classe4 frn debut.
     *
     * @return string Returns the classe4 frn debut.
     */
    public function getClasse4FrnDebut() {
        return $this->classe4FrnDebut;
    }

    /**
     * Get the classe4 frn fin.
     *
     * @return string Returns the classe4 frn fin.
     */
    public function getClasse4FrnFin() {
        return $this->classe4FrnFin;
    }

    /**
     * Get the codif classe0.
     *
     * @return string Returns the codif classe0.
     */
    public function getCodifClasse0() {
        return $this->codifClasse0;
    }

    /**
     * Get the codif classe0 seule.
     *
     * @return string Returns the codif classe0 seule.
     */
    public function getCodifClasse0Seule() {
        return $this->codifClasse0Seule;
    }

    /**
     * Get the codif classe9.
     *
     * @return string Returns the codif classe9.
     */
    public function getCodifClasse9() {
        return $this->codifClasse9;
    }

    /**
     * Get the codif classe9 seule.
     *
     * @return string Returns the codif classe9 seule.
     */
    public function getCodifClasse9Seule() {
        return $this->codifClasse9Seule;
    }

    /**
     * Get the collectif client debut.
     *
     * @return string Returns the collectif client debut.
     */
    public function getCollectifClientDebut() {
        return $this->collectifClientDebut;
    }

    /**
     * Get the collectif client defaut.
     *
     * @return string Returns the collectif client defaut.
     */
    public function getCollectifClientDefaut() {
        return $this->collectifClientDefaut;
    }

    /**
     * Get the collectif client fin.
     *
     * @return string Returns the collectif client fin.
     */
    public function getCollectifClientFin() {
        return $this->collectifClientFin;
    }

    /**
     * Get the collectif frn debut.
     *
     * @return string Returns the collectif frn debut.
     */
    public function getCollectifFrnDebut() {
        return $this->collectifFrnDebut;
    }

    /**
     * Get the collectif frn defaut.
     *
     * @return string Returns the collectif frn defaut.
     */
    public function getCollectifFrnDefaut() {
        return $this->collectifFrnDefaut;
    }

    /**
     * Get the collectif frn fin.
     *
     * @return string Returns the collectif frn fin.
     */
    public function getCollectifFrnFin() {
        return $this->collectifFrnFin;
    }

    /**
     * Get the collectif soc debut.
     *
     * @return string Returns the collectif soc debut.
     */
    public function getCollectifSocDebut() {
        return $this->collectifSocDebut;
    }

    /**
     * Get the collectif soc fin.
     *
     * @return string Returns the collectif soc fin.
     */
    public function getCollectifSocFin() {
        return $this->collectifSocFin;
    }

    /**
     * Get the combi lettrage auto.
     *
     * @return int Returns the combi lettrage auto.
     */
    public function getCombiLettrageAuto() {
        return $this->combiLettrageAuto;
    }

    /**
     * Get the commentaire dossier.
     *
     * @return string Returns the commentaire dossier.
     */
    public function getCommentaireDossier() {
        return $this->commentaireDossier;
    }

    /**
     * Get the control salaire cpt ex.
     *
     * @return string Returns the control salaire cpt ex.
     */
    public function getControlSalaireCptEx() {
        return $this->controlSalaireCptEx;
    }

    /**
     * Get the control salaire obs.
     *
     * @return string Returns the control salaire obs.
     */
    public function getControlSalaireObs() {
        return $this->controlSalaireObs;
    }

    /**
     * Get the d a d s1 livre paie.
     *
     * @return float Returns the d a d s1 livre paie.
     */
    public function getDADS1LivrePaie() {
        return $this->dADS1LivrePaie;
    }

    /**
     * Get the d a d s1 paie.
     *
     * @return float Returns the d a d s1 paie.
     */
    public function getDADS1Paie() {
        return $this->dADS1Paie;
    }

    /**
     * Get the d a d s1 remu moins.
     *
     * @return float Returns the d a d s1 remu moins.
     */
    public function getDADS1RemuMoins() {
        return $this->dADS1RemuMoins;
    }

    /**
     * Get the d a d s1 remu plus.
     *
     * @return float Returns the d a d s1 remu plus.
     */
    public function getDADS1RemuPlus() {
        return $this->dADS1RemuPlus;
    }

    /**
     * Get the d s code collab.
     *
     * @return string Returns the d s code collab.
     */
    public function getDSCodeCollab() {
        return $this->dSCodeCollab;
    }

    /**
     * Get the d s date retour.
     *
     * @return DateTime Returns the d s date retour.
     */
    public function getDSDateRetour() {
        return $this->dSDateRetour;
    }

    /**
     * Get the d s date sortie.
     *
     * @return DateTime Returns the d s date sortie.
     */
    public function getDSDateSortie() {
        return $this->dSDateSortie;
    }

    /**
     * Get the date calcul prov c p.
     *
     * @return DateTime Returns the date calcul prov c p.
     */
    public function getDateCalculProvCP() {
        return $this->dateCalculProvCP;
    }

    /**
     * Get the date publication.
     *
     * @return DateTime Returns the date publication.
     */
    public function getDatePublication() {
        return $this->datePublication;
    }

    /**
     * Get the date raz ecritures.
     *
     * @return DateTime Returns the date raz ecritures.
     */
    public function getDateRazEcritures() {
        return $this->dateRazEcritures;
    }

    /**
     * Get the dernier compte client.
     *
     * @return string Returns the dernier compte client.
     */
    public function getDernierCompteClient() {
        return $this->dernierCompteClient;
    }

    /**
     * Get the dernier compte frn.
     *
     * @return string Returns the dernier compte frn.
     */
    public function getDernierCompteFrn() {
        return $this->dernierCompteFrn;
    }

    /**
     * Get the diff lettrage code journal.
     *
     * @return string Returns the diff lettrage code journal.
     */
    public function getDiffLettrageCodeJournal() {
        return $this->diffLettrageCodeJournal;
    }

    /**
     * Get the diff lettrage code libelle.
     *
     * @return string Returns the diff lettrage code libelle.
     */
    public function getDiffLettrageCodeLibelle() {
        return $this->diffLettrageCodeLibelle;
    }

    /**
     * Get the diff lettrage folio.
     *
     * @return int Returns the diff lettrage folio.
     */
    public function getDiffLettrageFolio() {
        return $this->diffLettrageFolio;
    }

    /**
     * Get the diff lettrage gains.
     *
     * @return string Returns the diff lettrage gains.
     */
    public function getDiffLettrageGains() {
        return $this->diffLettrageGains;
    }

    /**
     * Get the diff lettrage libelle.
     *
     * @return string Returns the diff lettrage libelle.
     */
    public function getDiffLettrageLibelle() {
        return $this->diffLettrageLibelle;
    }

    /**
     * Get the diff lettrage pertes.
     *
     * @return string Returns the diff lettrage pertes.
     */
    public function getDiffLettragePertes() {
        return $this->diffLettragePertes;
    }

    /**
     * Get the ecart maxi lettrage auto.
     *
     * @return float Returns the ecart maxi lettrage auto.
     */
    public function getEcartMaxiLettrageAuto() {
        return $this->ecartMaxiLettrageAuto;
    }

    /**
     * Get the ecart mini ctrl tva.
     *
     * @return float Returns the ecart mini ctrl tva.
     */
    public function getEcartMiniCtrlTva() {
        return $this->ecartMiniCtrlTva;
    }

    /**
     * Get the editer en c f a.
     *
     * @return bool Returns the editer en c f a.
     */
    public function getEditerEnCFA() {
        return $this->editerEnCFA;
    }

    /**
     * Get the etat prov c p obs.
     *
     * @return string Returns the etat prov c p obs.
     */
    public function getEtatProvCPObs() {
        return $this->etatProvCPObs;
    }

    /**
     * Get the faire controle lettrage.
     *
     * @return string Returns the faire controle lettrage.
     */
    public function getFaireControleLettrage() {
        return $this->faireControleLettrage;
    }

    /**
     * Get the increment compte auto.
     *
     * @return int Returns the increment compte auto.
     */
    public function getIncrementCompteAuto() {
        return $this->incrementCompteAuto;
    }

    /**
     * Get the libelle plus de30 carac.
     *
     * @return bool Returns the libelle plus de30 carac.
     */
    public function getLibellePlusDe30Carac() {
        return $this->libellePlusDe30Carac;
    }

    /**
     * Get the lien sai immos.
     *
     * @return bool Returns the lien sai immos.
     */
    public function getLienSaiImmos() {
        return $this->lienSaiImmos;
    }

    /**
     * Get the longueur piece lettrage.
     *
     * @return int Returns the longueur piece lettrage.
     */
    public function getLongueurPieceLettrage() {
        return $this->longueurPieceLettrage;
    }

    /**
     * Get the nb comptes raz.
     *
     * @return int Returns the nb comptes raz.
     */
    public function getNbComptesRaz() {
        return $this->nbComptesRaz;
    }

    /**
     * Get the nb decimales mt.
     *
     * @return string Returns the nb decimales mt.
     */
    public function getNbDecimalesMt() {
        return $this->nbDecimalesMt;
    }

    /**
     * Get the nb ecr a facturer cloture.
     *
     * @return int Returns the nb ecr a facturer cloture.
     */
    public function getNbEcrAFacturerCloture() {
        return $this->nbEcrAFacturerCloture;
    }

    /**
     * Get the nb ecritures raz.
     *
     * @return int Returns the nb ecritures raz.
     */
    public function getNbEcrituresRaz() {
        return $this->nbEcrituresRaz;
    }

    /**
     * Get the nb jour base c p.
     *
     * @return float Returns the nb jour base c p.
     */
    public function getNbJourBaseCP() {
        return $this->nbJourBaseCP;
    }

    /**
     * Get the niv rupt classe0.
     *
     * @return string Returns the niv rupt classe0.
     */
    public function getNivRuptClasse0() {
        return $this->nivRuptClasse0;
    }

    /**
     * Get the niv rupt classe1.
     *
     * @return string Returns the niv rupt classe1.
     */
    public function getNivRuptClasse1() {
        return $this->nivRuptClasse1;
    }

    /**
     * Get the niv rupt classe2.
     *
     * @return string Returns the niv rupt classe2.
     */
    public function getNivRuptClasse2() {
        return $this->nivRuptClasse2;
    }

    /**
     * Get the niv rupt classe3.
     *
     * @return string Returns the niv rupt classe3.
     */
    public function getNivRuptClasse3() {
        return $this->nivRuptClasse3;
    }

    /**
     * Get the niv rupt classe4.
     *
     * @return string Returns the niv rupt classe4.
     */
    public function getNivRuptClasse4() {
        return $this->nivRuptClasse4;
    }

    /**
     * Get the niv rupt classe5.
     *
     * @return string Returns the niv rupt classe5.
     */
    public function getNivRuptClasse5() {
        return $this->nivRuptClasse5;
    }

    /**
     * Get the niv rupt classe6.
     *
     * @return string Returns the niv rupt classe6.
     */
    public function getNivRuptClasse6() {
        return $this->nivRuptClasse6;
    }

    /**
     * Get the niv rupt classe7.
     *
     * @return string Returns the niv rupt classe7.
     */
    public function getNivRuptClasse7() {
        return $this->nivRuptClasse7;
    }

    /**
     * Get the niv rupt classe8.
     *
     * @return string Returns the niv rupt classe8.
     */
    public function getNivRuptClasse8() {
        return $this->nivRuptClasse8;
    }

    /**
     * Get the niv rupt classe9.
     *
     * @return string Returns the niv rupt classe9.
     */
    public function getNivRuptClasse9() {
        return $this->nivRuptClasse9;
    }

    /**
     * Get the position piece lettrage.
     *
     * @return int Returns the position piece lettrage.
     */
    public function getPositionPieceLettrage() {
        return $this->positionPieceLettrage;
    }

    /**
     * Get the prochain lot ecrit.
     *
     * @return int Returns the prochain lot ecrit.
     */
    public function getProchainLotEcrit() {
        return $this->prochainLotEcrit;
    }

    /**
     * Get the prochain lot factor.
     *
     * @return int Returns the prochain lot factor.
     */
    public function getProchainLotFactor() {
        return $this->prochainLotFactor;
    }

    /**
     * Get the prochain num ecr eco.
     *
     * @return int Returns the prochain num ecr eco.
     */
    public function getProchainNumEcrEco() {
        return $this->prochainNumEcrEco;
    }

    /**
     * Get the prochain num lot v m p.
     *
     * @return int Returns the prochain num lot v m p.
     */
    public function getProchainNumLotVMP() {
        return $this->prochainNumLotVMP;
    }

    /**
     * Get the prov c p cpt brut.
     *
     * @return string Returns the prov c p cpt brut.
     */
    public function getProvCPCptBrut() {
        return $this->provCPCptBrut;
    }

    /**
     * Get the prov c p cpt c a p c p.
     *
     * @return string Returns the prov c p cpt c a p c p.
     */
    public function getProvCPCptCAPCP() {
        return $this->provCPCptCAPCP;
    }

    /**
     * Get the prov c p cpt c a p ch.
     *
     * @return string Returns the prov c p cpt c a p ch.
     */
    public function getProvCPCptCAPCh() {
        return $this->provCPCptCAPCh;
    }

    /**
     * Get the prov c p cpt charges.
     *
     * @return string Returns the prov c p cpt charges.
     */
    public function getProvCPCptCharges() {
        return $this->provCPCptCharges;
    }

    /**
     * Get the prov mini.
     *
     * @return float Returns the prov mini.
     */
    public function getProvMini() {
        return $this->provMini;
    }

    /**
     * Get the publication.
     *
     * @return bool Returns the publication.
     */
    public function getPublication() {
        return $this->publication;
    }

    /**
     * Get the q i m g2 cpt encours.
     *
     * @return int Returns the q i m g2 cpt encours.
     */
    public function getQIMG2CptEncours() {
        return $this->qIMG2CptEncours;
    }

    /**
     * Get the q i m g2 cpt envoi.
     *
     * @return int Returns the q i m g2 cpt envoi.
     */
    public function getQIMG2CptEnvoi() {
        return $this->qIMG2CptEnvoi;
    }

    /**
     * Get the r f f_ cpt exploitant.
     *
     * @return string Returns the r f f_ cpt exploitant.
     */
    public function getRFF_CptExploitant() {
        return $this->rFF_CptExploitant;
    }

    /**
     * Get the r f f_ cpt interets.
     *
     * @return string Returns the r f f_ cpt interets.
     */
    public function getRFF_CptInterets() {
        return $this->rFF_CptInterets;
    }

    /**
     * Get the r f f_ cpt regul.
     *
     * @return string Returns the r f f_ cpt regul.
     */
    public function getRFF_CptRegul() {
        return $this->rFF_CptRegul;
    }

    /**
     * Get the r f f_ date lot ecr.
     *
     * @return DateTime Returns the r f f_ date lot ecr.
     */
    public function getRFF_DateLotEcr() {
        return $this->rFF_DateLotEcr;
    }

    /**
     * Get the r f f_ decouverts avances.
     *
     * @return float Returns the r f f_ decouverts avances.
     */
    public function getRFF_DecouvertsAvances() {
        return $this->rFF_DecouvertsAvances;
    }

    /**
     * Get the r f f_ interets emprunts.
     *
     * @return float Returns the r f f_ interets emprunts.
     */
    public function getRFF_InteretsEmprunts() {
        return $this->rFF_InteretsEmprunts;
    }

    /**
     * Get the r f f_ limite.
     *
     * @return float Returns the r f f_ limite.
     */
    public function getRFF_Limite() {
        return $this->rFF_Limite;
    }

    /**
     * Get the r f f_ mtt r f f.
     *
     * @return float Returns the r f f_ mtt r f f.
     */
    public function getRFF_MttRFF() {
        return $this->rFF_MttRFF;
    }

    /**
     * Get the r f f_ mtt regul.
     *
     * @return float Returns the r f f_ mtt regul.
     */
    public function getRFF_MttRegul() {
        return $this->rFF_MttRegul;
    }

    /**
     * Get the r f f_ num lot ecr.
     *
     * @return int Returns the r f f_ num lot ecr.
     */
    public function getRFF_NumLotEcr() {
        return $this->rFF_NumLotEcr;
    }

    /**
     * Get the r f f_ type.
     *
     * @return int Returns the r f f_ type.
     */
    public function getRFF_Type() {
        return $this->rFF_Type;
    }

    /**
     * Get the rapp d a d s1 obs.
     *
     * @return string Returns the rapp d a d s1 obs.
     */
    public function getRappDADS1Obs() {
        return $this->rappDADS1Obs;
    }

    /**
     * Get the relance adresse cpt.
     *
     * @return bool Returns the relance adresse cpt.
     */
    public function getRelanceAdresseCpt() {
        return $this->relanceAdresseCpt;
    }

    /**
     * Get the texte relance0.
     *
     * @return string Returns the texte relance0.
     */
    public function getTexteRelance0() {
        return $this->texteRelance0;
    }

    /**
     * Get the texte relance1.
     *
     * @return string Returns the texte relance1.
     */
    public function getTexteRelance1() {
        return $this->texteRelance1;
    }

    /**
     * Get the texte relance2.
     *
     * @return string Returns the texte relance2.
     */
    public function getTexteRelance2() {
        return $this->texteRelance2;
    }

    /**
     * Get the texte relance3.
     *
     * @return string Returns the texte relance3.
     */
    public function getTexteRelance3() {
        return $this->texteRelance3;
    }

    /**
     * Get the texte relance4.
     *
     * @return string Returns the texte relance4.
     */
    public function getTexteRelance4() {
        return $this->texteRelance4;
    }

    /**
     * Get the treso comptes a exclure.
     *
     * @return string Returns the treso comptes a exclure.
     */
    public function getTresoComptesAExclure() {
        return $this->tresoComptesAExclure;
    }

    /**
     * Get the utilise quantite2.
     *
     * @return bool Returns the utilise quantite2.
     */
    public function getUtiliseQuantite2() {
        return $this->utiliseQuantite2;
    }

    /**
     * Set the annee recolte.
     *
     * @param string $anneeRecolte The annee recolte.
     * @return Dossier2 Returns this dossier2.
     */
    public function setAnneeRecolte($anneeRecolte) {
        $this->anneeRecolte = $anneeRecolte;
        return $this;
    }

    /**
     * Set the appliquer regroupement.
     *
     * @param bool $appliquerRegroupement The appliquer regroupement.
     * @return Dossier2 Returns this dossier2.
     */
    public function setAppliquerRegroupement($appliquerRegroupement) {
        $this->appliquerRegroupement = $appliquerRegroupement;
        return $this;
    }

    /**
     * Set the c c a_ memo.
     *
     * @param string $cCA_Memo The c c a_ memo.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCCA_Memo($cCA_Memo) {
        $this->cCA_Memo = $cCA_Memo;
        return $this;
    }

    /**
     * Set the classe4 client debut.
     *
     * @param string $classe4ClientDebut The classe4 client debut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setClasse4ClientDebut($classe4ClientDebut) {
        $this->classe4ClientDebut = $classe4ClientDebut;
        return $this;
    }

    /**
     * Set the classe4 client fin.
     *
     * @param string $classe4ClientFin The classe4 client fin.
     * @return Dossier2 Returns this dossier2.
     */
    public function setClasse4ClientFin($classe4ClientFin) {
        $this->classe4ClientFin = $classe4ClientFin;
        return $this;
    }

    /**
     * Set the classe4 frn debut.
     *
     * @param string $classe4FrnDebut The classe4 frn debut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setClasse4FrnDebut($classe4FrnDebut) {
        $this->classe4FrnDebut = $classe4FrnDebut;
        return $this;
    }

    /**
     * Set the classe4 frn fin.
     *
     * @param string $classe4FrnFin The classe4 frn fin.
     * @return Dossier2 Returns this dossier2.
     */
    public function setClasse4FrnFin($classe4FrnFin) {
        $this->classe4FrnFin = $classe4FrnFin;
        return $this;
    }

    /**
     * Set the codif classe0.
     *
     * @param string $codifClasse0 The codif classe0.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCodifClasse0($codifClasse0) {
        $this->codifClasse0 = $codifClasse0;
        return $this;
    }

    /**
     * Set the codif classe0 seule.
     *
     * @param string $codifClasse0Seule The codif classe0 seule.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCodifClasse0Seule($codifClasse0Seule) {
        $this->codifClasse0Seule = $codifClasse0Seule;
        return $this;
    }

    /**
     * Set the codif classe9.
     *
     * @param string $codifClasse9 The codif classe9.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCodifClasse9($codifClasse9) {
        $this->codifClasse9 = $codifClasse9;
        return $this;
    }

    /**
     * Set the codif classe9 seule.
     *
     * @param string $codifClasse9Seule The codif classe9 seule.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCodifClasse9Seule($codifClasse9Seule) {
        $this->codifClasse9Seule = $codifClasse9Seule;
        return $this;
    }

    /**
     * Set the collectif client debut.
     *
     * @param string $collectifClientDebut The collectif client debut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifClientDebut($collectifClientDebut) {
        $this->collectifClientDebut = $collectifClientDebut;
        return $this;
    }

    /**
     * Set the collectif client defaut.
     *
     * @param string $collectifClientDefaut The collectif client defaut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifClientDefaut($collectifClientDefaut) {
        $this->collectifClientDefaut = $collectifClientDefaut;
        return $this;
    }

    /**
     * Set the collectif client fin.
     *
     * @param string $collectifClientFin The collectif client fin.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifClientFin($collectifClientFin) {
        $this->collectifClientFin = $collectifClientFin;
        return $this;
    }

    /**
     * Set the collectif frn debut.
     *
     * @param string $collectifFrnDebut The collectif frn debut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifFrnDebut($collectifFrnDebut) {
        $this->collectifFrnDebut = $collectifFrnDebut;
        return $this;
    }

    /**
     * Set the collectif frn defaut.
     *
     * @param string $collectifFrnDefaut The collectif frn defaut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifFrnDefaut($collectifFrnDefaut) {
        $this->collectifFrnDefaut = $collectifFrnDefaut;
        return $this;
    }

    /**
     * Set the collectif frn fin.
     *
     * @param string $collectifFrnFin The collectif frn fin.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifFrnFin($collectifFrnFin) {
        $this->collectifFrnFin = $collectifFrnFin;
        return $this;
    }

    /**
     * Set the collectif soc debut.
     *
     * @param string $collectifSocDebut The collectif soc debut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifSocDebut($collectifSocDebut) {
        $this->collectifSocDebut = $collectifSocDebut;
        return $this;
    }

    /**
     * Set the collectif soc fin.
     *
     * @param string $collectifSocFin The collectif soc fin.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCollectifSocFin($collectifSocFin) {
        $this->collectifSocFin = $collectifSocFin;
        return $this;
    }

    /**
     * Set the combi lettrage auto.
     *
     * @param int $combiLettrageAuto The combi lettrage auto.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCombiLettrageAuto($combiLettrageAuto) {
        $this->combiLettrageAuto = $combiLettrageAuto;
        return $this;
    }

    /**
     * Set the commentaire dossier.
     *
     * @param string $commentaireDossier The commentaire dossier.
     * @return Dossier2 Returns this dossier2.
     */
    public function setCommentaireDossier($commentaireDossier) {
        $this->commentaireDossier = $commentaireDossier;
        return $this;
    }

    /**
     * Set the control salaire cpt ex.
     *
     * @param string $controlSalaireCptEx The control salaire cpt ex.
     * @return Dossier2 Returns this dossier2.
     */
    public function setControlSalaireCptEx($controlSalaireCptEx) {
        $this->controlSalaireCptEx = $controlSalaireCptEx;
        return $this;
    }

    /**
     * Set the control salaire obs.
     *
     * @param string $controlSalaireObs The control salaire obs.
     * @return Dossier2 Returns this dossier2.
     */
    public function setControlSalaireObs($controlSalaireObs) {
        $this->controlSalaireObs = $controlSalaireObs;
        return $this;
    }

    /**
     * Set the d a d s1 livre paie.
     *
     * @param float $dADS1LivrePaie The d a d s1 livre paie.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDADS1LivrePaie($dADS1LivrePaie) {
        $this->dADS1LivrePaie = $dADS1LivrePaie;
        return $this;
    }

    /**
     * Set the d a d s1 paie.
     *
     * @param float $dADS1Paie The d a d s1 paie.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDADS1Paie($dADS1Paie) {
        $this->dADS1Paie = $dADS1Paie;
        return $this;
    }

    /**
     * Set the d a d s1 remu moins.
     *
     * @param float $dADS1RemuMoins The d a d s1 remu moins.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDADS1RemuMoins($dADS1RemuMoins) {
        $this->dADS1RemuMoins = $dADS1RemuMoins;
        return $this;
    }

    /**
     * Set the d a d s1 remu plus.
     *
     * @param float $dADS1RemuPlus The d a d s1 remu plus.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDADS1RemuPlus($dADS1RemuPlus) {
        $this->dADS1RemuPlus = $dADS1RemuPlus;
        return $this;
    }

    /**
     * Set the d s code collab.
     *
     * @param string $dSCodeCollab The d s code collab.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDSCodeCollab($dSCodeCollab) {
        $this->dSCodeCollab = $dSCodeCollab;
        return $this;
    }

    /**
     * Set the d s date retour.
     *
     * @param DateTime $dSDateRetour The d s date retour.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDSDateRetour(DateTime $dSDateRetour = null) {
        $this->dSDateRetour = $dSDateRetour;
        return $this;
    }

    /**
     * Set the d s date sortie.
     *
     * @param DateTime $dSDateSortie The d s date sortie.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDSDateSortie(DateTime $dSDateSortie = null) {
        $this->dSDateSortie = $dSDateSortie;
        return $this;
    }

    /**
     * Set the date calcul prov c p.
     *
     * @param DateTime $dateCalculProvCP The date calcul prov c p.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDateCalculProvCP(DateTime $dateCalculProvCP = null) {
        $this->dateCalculProvCP = $dateCalculProvCP;
        return $this;
    }

    /**
     * Set the date publication.
     *
     * @param DateTime $datePublication The date publication.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDatePublication(DateTime $datePublication = null) {
        $this->datePublication = $datePublication;
        return $this;
    }

    /**
     * Set the date raz ecritures.
     *
     * @param DateTime $dateRazEcritures The date raz ecritures.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDateRazEcritures(DateTime $dateRazEcritures = null) {
        $this->dateRazEcritures = $dateRazEcritures;
        return $this;
    }

    /**
     * Set the dernier compte client.
     *
     * @param string $dernierCompteClient The dernier compte client.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDernierCompteClient($dernierCompteClient) {
        $this->dernierCompteClient = $dernierCompteClient;
        return $this;
    }

    /**
     * Set the dernier compte frn.
     *
     * @param string $dernierCompteFrn The dernier compte frn.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDernierCompteFrn($dernierCompteFrn) {
        $this->dernierCompteFrn = $dernierCompteFrn;
        return $this;
    }

    /**
     * Set the diff lettrage code journal.
     *
     * @param string $diffLettrageCodeJournal The diff lettrage code journal.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDiffLettrageCodeJournal($diffLettrageCodeJournal) {
        $this->diffLettrageCodeJournal = $diffLettrageCodeJournal;
        return $this;
    }

    /**
     * Set the diff lettrage code libelle.
     *
     * @param string $diffLettrageCodeLibelle The diff lettrage code libelle.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDiffLettrageCodeLibelle($diffLettrageCodeLibelle) {
        $this->diffLettrageCodeLibelle = $diffLettrageCodeLibelle;
        return $this;
    }

    /**
     * Set the diff lettrage folio.
     *
     * @param int $diffLettrageFolio The diff lettrage folio.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDiffLettrageFolio($diffLettrageFolio) {
        $this->diffLettrageFolio = $diffLettrageFolio;
        return $this;
    }

    /**
     * Set the diff lettrage gains.
     *
     * @param string $diffLettrageGains The diff lettrage gains.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDiffLettrageGains($diffLettrageGains) {
        $this->diffLettrageGains = $diffLettrageGains;
        return $this;
    }

    /**
     * Set the diff lettrage libelle.
     *
     * @param string $diffLettrageLibelle The diff lettrage libelle.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDiffLettrageLibelle($diffLettrageLibelle) {
        $this->diffLettrageLibelle = $diffLettrageLibelle;
        return $this;
    }

    /**
     * Set the diff lettrage pertes.
     *
     * @param string $diffLettragePertes The diff lettrage pertes.
     * @return Dossier2 Returns this dossier2.
     */
    public function setDiffLettragePertes($diffLettragePertes) {
        $this->diffLettragePertes = $diffLettragePertes;
        return $this;
    }

    /**
     * Set the ecart maxi lettrage auto.
     *
     * @param float $ecartMaxiLettrageAuto The ecart maxi lettrage auto.
     * @return Dossier2 Returns this dossier2.
     */
    public function setEcartMaxiLettrageAuto($ecartMaxiLettrageAuto) {
        $this->ecartMaxiLettrageAuto = $ecartMaxiLettrageAuto;
        return $this;
    }

    /**
     * Set the ecart mini ctrl tva.
     *
     * @param float $ecartMiniCtrlTva The ecart mini ctrl tva.
     * @return Dossier2 Returns this dossier2.
     */
    public function setEcartMiniCtrlTva($ecartMiniCtrlTva) {
        $this->ecartMiniCtrlTva = $ecartMiniCtrlTva;
        return $this;
    }

    /**
     * Set the editer en c f a.
     *
     * @param bool $editerEnCFA The editer en c f a.
     * @return Dossier2 Returns this dossier2.
     */
    public function setEditerEnCFA($editerEnCFA) {
        $this->editerEnCFA = $editerEnCFA;
        return $this;
    }

    /**
     * Set the etat prov c p obs.
     *
     * @param string $etatProvCPObs The etat prov c p obs.
     * @return Dossier2 Returns this dossier2.
     */
    public function setEtatProvCPObs($etatProvCPObs) {
        $this->etatProvCPObs = $etatProvCPObs;
        return $this;
    }

    /**
     * Set the faire controle lettrage.
     *
     * @param string $faireControleLettrage The faire controle lettrage.
     * @return Dossier2 Returns this dossier2.
     */
    public function setFaireControleLettrage($faireControleLettrage) {
        $this->faireControleLettrage = $faireControleLettrage;
        return $this;
    }

    /**
     * Set the increment compte auto.
     *
     * @param int $incrementCompteAuto The increment compte auto.
     * @return Dossier2 Returns this dossier2.
     */
    public function setIncrementCompteAuto($incrementCompteAuto) {
        $this->incrementCompteAuto = $incrementCompteAuto;
        return $this;
    }

    /**
     * Set the libelle plus de30 carac.
     *
     * @param bool $libellePlusDe30Carac The libelle plus de30 carac.
     * @return Dossier2 Returns this dossier2.
     */
    public function setLibellePlusDe30Carac($libellePlusDe30Carac) {
        $this->libellePlusDe30Carac = $libellePlusDe30Carac;
        return $this;
    }

    /**
     * Set the lien sai immos.
     *
     * @param bool $lienSaiImmos The lien sai immos.
     * @return Dossier2 Returns this dossier2.
     */
    public function setLienSaiImmos($lienSaiImmos) {
        $this->lienSaiImmos = $lienSaiImmos;
        return $this;
    }

    /**
     * Set the longueur piece lettrage.
     *
     * @param int $longueurPieceLettrage The longueur piece lettrage.
     * @return Dossier2 Returns this dossier2.
     */
    public function setLongueurPieceLettrage($longueurPieceLettrage) {
        $this->longueurPieceLettrage = $longueurPieceLettrage;
        return $this;
    }

    /**
     * Set the nb comptes raz.
     *
     * @param int $nbComptesRaz The nb comptes raz.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNbComptesRaz($nbComptesRaz) {
        $this->nbComptesRaz = $nbComptesRaz;
        return $this;
    }

    /**
     * Set the nb decimales mt.
     *
     * @param string $nbDecimalesMt The nb decimales mt.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNbDecimalesMt($nbDecimalesMt) {
        $this->nbDecimalesMt = $nbDecimalesMt;
        return $this;
    }

    /**
     * Set the nb ecr a facturer cloture.
     *
     * @param int $nbEcrAFacturerCloture The nb ecr a facturer cloture.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNbEcrAFacturerCloture($nbEcrAFacturerCloture) {
        $this->nbEcrAFacturerCloture = $nbEcrAFacturerCloture;
        return $this;
    }

    /**
     * Set the nb ecritures raz.
     *
     * @param int $nbEcrituresRaz The nb ecritures raz.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNbEcrituresRaz($nbEcrituresRaz) {
        $this->nbEcrituresRaz = $nbEcrituresRaz;
        return $this;
    }

    /**
     * Set the nb jour base c p.
     *
     * @param float $nbJourBaseCP The nb jour base c p.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNbJourBaseCP($nbJourBaseCP) {
        $this->nbJourBaseCP = $nbJourBaseCP;
        return $this;
    }

    /**
     * Set the niv rupt classe0.
     *
     * @param string $nivRuptClasse0 The niv rupt classe0.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse0($nivRuptClasse0) {
        $this->nivRuptClasse0 = $nivRuptClasse0;
        return $this;
    }

    /**
     * Set the niv rupt classe1.
     *
     * @param string $nivRuptClasse1 The niv rupt classe1.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse1($nivRuptClasse1) {
        $this->nivRuptClasse1 = $nivRuptClasse1;
        return $this;
    }

    /**
     * Set the niv rupt classe2.
     *
     * @param string $nivRuptClasse2 The niv rupt classe2.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse2($nivRuptClasse2) {
        $this->nivRuptClasse2 = $nivRuptClasse2;
        return $this;
    }

    /**
     * Set the niv rupt classe3.
     *
     * @param string $nivRuptClasse3 The niv rupt classe3.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse3($nivRuptClasse3) {
        $this->nivRuptClasse3 = $nivRuptClasse3;
        return $this;
    }

    /**
     * Set the niv rupt classe4.
     *
     * @param string $nivRuptClasse4 The niv rupt classe4.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse4($nivRuptClasse4) {
        $this->nivRuptClasse4 = $nivRuptClasse4;
        return $this;
    }

    /**
     * Set the niv rupt classe5.
     *
     * @param string $nivRuptClasse5 The niv rupt classe5.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse5($nivRuptClasse5) {
        $this->nivRuptClasse5 = $nivRuptClasse5;
        return $this;
    }

    /**
     * Set the niv rupt classe6.
     *
     * @param string $nivRuptClasse6 The niv rupt classe6.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse6($nivRuptClasse6) {
        $this->nivRuptClasse6 = $nivRuptClasse6;
        return $this;
    }

    /**
     * Set the niv rupt classe7.
     *
     * @param string $nivRuptClasse7 The niv rupt classe7.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse7($nivRuptClasse7) {
        $this->nivRuptClasse7 = $nivRuptClasse7;
        return $this;
    }

    /**
     * Set the niv rupt classe8.
     *
     * @param string $nivRuptClasse8 The niv rupt classe8.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse8($nivRuptClasse8) {
        $this->nivRuptClasse8 = $nivRuptClasse8;
        return $this;
    }

    /**
     * Set the niv rupt classe9.
     *
     * @param string $nivRuptClasse9 The niv rupt classe9.
     * @return Dossier2 Returns this dossier2.
     */
    public function setNivRuptClasse9($nivRuptClasse9) {
        $this->nivRuptClasse9 = $nivRuptClasse9;
        return $this;
    }

    /**
     * Set the position piece lettrage.
     *
     * @param int $positionPieceLettrage The position piece lettrage.
     * @return Dossier2 Returns this dossier2.
     */
    public function setPositionPieceLettrage($positionPieceLettrage) {
        $this->positionPieceLettrage = $positionPieceLettrage;
        return $this;
    }

    /**
     * Set the prochain lot ecrit.
     *
     * @param int $prochainLotEcrit The prochain lot ecrit.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProchainLotEcrit($prochainLotEcrit) {
        $this->prochainLotEcrit = $prochainLotEcrit;
        return $this;
    }

    /**
     * Set the prochain lot factor.
     *
     * @param int $prochainLotFactor The prochain lot factor.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProchainLotFactor($prochainLotFactor) {
        $this->prochainLotFactor = $prochainLotFactor;
        return $this;
    }

    /**
     * Set the prochain num ecr eco.
     *
     * @param int $prochainNumEcrEco The prochain num ecr eco.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProchainNumEcrEco($prochainNumEcrEco) {
        $this->prochainNumEcrEco = $prochainNumEcrEco;
        return $this;
    }

    /**
     * Set the prochain num lot v m p.
     *
     * @param int $prochainNumLotVMP The prochain num lot v m p.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProchainNumLotVMP($prochainNumLotVMP) {
        $this->prochainNumLotVMP = $prochainNumLotVMP;
        return $this;
    }

    /**
     * Set the prov c p cpt brut.
     *
     * @param string $provCPCptBrut The prov c p cpt brut.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProvCPCptBrut($provCPCptBrut) {
        $this->provCPCptBrut = $provCPCptBrut;
        return $this;
    }

    /**
     * Set the prov c p cpt c a p c p.
     *
     * @param string $provCPCptCAPCP The prov c p cpt c a p c p.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProvCPCptCAPCP($provCPCptCAPCP) {
        $this->provCPCptCAPCP = $provCPCptCAPCP;
        return $this;
    }

    /**
     * Set the prov c p cpt c a p ch.
     *
     * @param string $provCPCptCAPCh The prov c p cpt c a p ch.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProvCPCptCAPCh($provCPCptCAPCh) {
        $this->provCPCptCAPCh = $provCPCptCAPCh;
        return $this;
    }

    /**
     * Set the prov c p cpt charges.
     *
     * @param string $provCPCptCharges The prov c p cpt charges.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProvCPCptCharges($provCPCptCharges) {
        $this->provCPCptCharges = $provCPCptCharges;
        return $this;
    }

    /**
     * Set the prov mini.
     *
     * @param float $provMini The prov mini.
     * @return Dossier2 Returns this dossier2.
     */
    public function setProvMini($provMini) {
        $this->provMini = $provMini;
        return $this;
    }

    /**
     * Set the publication.
     *
     * @param bool $publication The publication.
     * @return Dossier2 Returns this dossier2.
     */
    public function setPublication($publication) {
        $this->publication = $publication;
        return $this;
    }

    /**
     * Set the q i m g2 cpt encours.
     *
     * @param int $qIMG2CptEncours The q i m g2 cpt encours.
     * @return Dossier2 Returns this dossier2.
     */
    public function setQIMG2CptEncours($qIMG2CptEncours) {
        $this->qIMG2CptEncours = $qIMG2CptEncours;
        return $this;
    }

    /**
     * Set the q i m g2 cpt envoi.
     *
     * @param int $qIMG2CptEnvoi The q i m g2 cpt envoi.
     * @return Dossier2 Returns this dossier2.
     */
    public function setQIMG2CptEnvoi($qIMG2CptEnvoi) {
        $this->qIMG2CptEnvoi = $qIMG2CptEnvoi;
        return $this;
    }

    /**
     * Set the r f f_ cpt exploitant.
     *
     * @param string $rFF_CptExploitant The r f f_ cpt exploitant.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_CptExploitant($rFF_CptExploitant) {
        $this->rFF_CptExploitant = $rFF_CptExploitant;
        return $this;
    }

    /**
     * Set the r f f_ cpt interets.
     *
     * @param string $rFF_CptInterets The r f f_ cpt interets.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_CptInterets($rFF_CptInterets) {
        $this->rFF_CptInterets = $rFF_CptInterets;
        return $this;
    }

    /**
     * Set the r f f_ cpt regul.
     *
     * @param string $rFF_CptRegul The r f f_ cpt regul.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_CptRegul($rFF_CptRegul) {
        $this->rFF_CptRegul = $rFF_CptRegul;
        return $this;
    }

    /**
     * Set the r f f_ date lot ecr.
     *
     * @param DateTime $rFF_DateLotEcr The r f f_ date lot ecr.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_DateLotEcr(DateTime $rFF_DateLotEcr = null) {
        $this->rFF_DateLotEcr = $rFF_DateLotEcr;
        return $this;
    }

    /**
     * Set the r f f_ decouverts avances.
     *
     * @param float $rFF_DecouvertsAvances The r f f_ decouverts avances.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_DecouvertsAvances($rFF_DecouvertsAvances) {
        $this->rFF_DecouvertsAvances = $rFF_DecouvertsAvances;
        return $this;
    }

    /**
     * Set the r f f_ interets emprunts.
     *
     * @param float $rFF_InteretsEmprunts The r f f_ interets emprunts.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_InteretsEmprunts($rFF_InteretsEmprunts) {
        $this->rFF_InteretsEmprunts = $rFF_InteretsEmprunts;
        return $this;
    }

    /**
     * Set the r f f_ limite.
     *
     * @param float $rFF_Limite The r f f_ limite.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_Limite($rFF_Limite) {
        $this->rFF_Limite = $rFF_Limite;
        return $this;
    }

    /**
     * Set the r f f_ mtt r f f.
     *
     * @param float $rFF_MttRFF The r f f_ mtt r f f.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_MttRFF($rFF_MttRFF) {
        $this->rFF_MttRFF = $rFF_MttRFF;
        return $this;
    }

    /**
     * Set the r f f_ mtt regul.
     *
     * @param float $rFF_MttRegul The r f f_ mtt regul.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_MttRegul($rFF_MttRegul) {
        $this->rFF_MttRegul = $rFF_MttRegul;
        return $this;
    }

    /**
     * Set the r f f_ num lot ecr.
     *
     * @param int $rFF_NumLotEcr The r f f_ num lot ecr.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_NumLotEcr($rFF_NumLotEcr) {
        $this->rFF_NumLotEcr = $rFF_NumLotEcr;
        return $this;
    }

    /**
     * Set the r f f_ type.
     *
     * @param int $rFF_Type The r f f_ type.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRFF_Type($rFF_Type) {
        $this->rFF_Type = $rFF_Type;
        return $this;
    }

    /**
     * Set the rapp d a d s1 obs.
     *
     * @param string $rappDADS1Obs The rapp d a d s1 obs.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRappDADS1Obs($rappDADS1Obs) {
        $this->rappDADS1Obs = $rappDADS1Obs;
        return $this;
    }

    /**
     * Set the relance adresse cpt.
     *
     * @param bool $relanceAdresseCpt The relance adresse cpt.
     * @return Dossier2 Returns this dossier2.
     */
    public function setRelanceAdresseCpt($relanceAdresseCpt) {
        $this->relanceAdresseCpt = $relanceAdresseCpt;
        return $this;
    }

    /**
     * Set the texte relance0.
     *
     * @param string $texteRelance0 The texte relance0.
     * @return Dossier2 Returns this dossier2.
     */
    public function setTexteRelance0($texteRelance0) {
        $this->texteRelance0 = $texteRelance0;
        return $this;
    }

    /**
     * Set the texte relance1.
     *
     * @param string $texteRelance1 The texte relance1.
     * @return Dossier2 Returns this dossier2.
     */
    public function setTexteRelance1($texteRelance1) {
        $this->texteRelance1 = $texteRelance1;
        return $this;
    }

    /**
     * Set the texte relance2.
     *
     * @param string $texteRelance2 The texte relance2.
     * @return Dossier2 Returns this dossier2.
     */
    public function setTexteRelance2($texteRelance2) {
        $this->texteRelance2 = $texteRelance2;
        return $this;
    }

    /**
     * Set the texte relance3.
     *
     * @param string $texteRelance3 The texte relance3.
     * @return Dossier2 Returns this dossier2.
     */
    public function setTexteRelance3($texteRelance3) {
        $this->texteRelance3 = $texteRelance3;
        return $this;
    }

    /**
     * Set the texte relance4.
     *
     * @param string $texteRelance4 The texte relance4.
     * @return Dossier2 Returns this dossier2.
     */
    public function setTexteRelance4($texteRelance4) {
        $this->texteRelance4 = $texteRelance4;
        return $this;
    }

    /**
     * Set the treso comptes a exclure.
     *
     * @param string $tresoComptesAExclure The treso comptes a exclure.
     * @return Dossier2 Returns this dossier2.
     */
    public function setTresoComptesAExclure($tresoComptesAExclure) {
        $this->tresoComptesAExclure = $tresoComptesAExclure;
        return $this;
    }

    /**
     * Set the utilise quantite2.
     *
     * @param bool $utiliseQuantite2 The utilise quantite2.
     * @return Dossier2 Returns this dossier2.
     */
    public function setUtiliseQuantite2($utiliseQuantite2) {
        $this->utiliseQuantite2 = $utiliseQuantite2;
        return $this;
    }
}
