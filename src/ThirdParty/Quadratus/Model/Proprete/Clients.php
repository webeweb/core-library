<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Clients.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class Clients {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Bloque.
     *
     * @var bool
     */
    private $bloque;

    /**
     * Cle alpha.
     *
     * @var string
     */
    private $cleAlpha;

    /**
     * Code analytique.
     *
     * @var string
     */
    private $codeAnalytique;

    /**
     * Code categorie client.
     *
     * @var string
     */
    private $codeCategorieClient;

    /**
     * Code client fact.
     *
     * @var string
     */
    private $codeClientFact;

    /**
     * Code depot.
     *
     * @var string
     */
    private $codeDepot;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code famille.
     *
     * @var string
     */
    private $codeFamille;

    /**
     * Code geo.
     *
     * @var string
     */
    private $codeGeo;

    /**
     * Code langue designation article.
     *
     * @var string
     */
    private $codeLangueDesignationArticle;

    /**
     * Code mode reglement.
     *
     * @var string
     */
    private $codeModeReglement;

    /**
     * Code origine.
     *
     * @var string
     */
    private $codeOrigine;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Code representant.
     *
     * @var string
     */
    private $codeRepresentant;

    /**
     * Code revision.
     *
     * @var string
     */
    private $codeRevision;

    /**
     * Code sous famille.
     *
     * @var string
     */
    private $codeSousFamille;

    /**
     * Code sous tournee.
     *
     * @var string
     */
    private $codeSousTournee;

    /**
     * Code tournee.
     *
     * @var string
     */
    private $codeTournee;

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Code ventil compta.
     *
     * @var string
     */
    private $codeVentilCompta;

    /**
     * Collectif comptable.
     *
     * @var int
     */
    private $collectifComptable;

    /**
     * Commentaire.
     *
     * @var string
     */
    private $commentaire;

    /**
     * Date creat.
     *
     * @var DateTime|null
     */
    private $dateCreat;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date modif.
     *
     * @var DateTime|null
     */
    private $dateModif;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

    /**
     * Derniere annee facturee.
     *
     * @var int
     */
    private $derniereAnneeFacturee;

    /**
     * Domiciliation bancaire1.
     *
     * @var string
     */
    private $domiciliationBancaire1;

    /**
     * Domiciliation bancaire2.
     *
     * @var string
     */
    private $domiciliationBancaire2;

    /**
     * Echeance depart.
     *
     * @var int
     */
    private $echeanceDepart;

    /**
     * Echeance le.
     *
     * @var int
     */
    private $echeanceLe;

    /**
     * Echeance nb jours.
     *
     * @var int
     */
    private $echeanceNbJours;

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Id.
     *
     * @var string
     */
    private $id;

    /**
     * Nb bl.
     *
     * @var int
     */
    private $nbBl;

    /**
     * Nb facture.
     *
     * @var int
     */
    private $nbFacture;

    /**
     * Nombre echeances.
     *
     * @var int
     */
    private $nombreEcheances;

    /**
     * Num cpt collectif.
     *
     * @var string
     */
    private $numCptCollectif;

    /**
     * Num cpt comptable.
     *
     * @var string
     */
    private $numCptComptable;

    /**
     * Premiere annee facturee.
     *
     * @var int
     */
    private $premiereAnneeFacturee;

    /**
     * Prospect.
     *
     * @var bool
     */
    private $prospect;

    /**
     * Remise ligne1.
     *
     * @var float
     */
    private $remiseLigne1;

    /**
     * Remise ligne2.
     *
     * @var float
     */
    private $remiseLigne2;

    /**
     * Remise ligne3.
     *
     * @var float
     */
    private $remiseLigne3;

    /**
     * Remise pied1.
     *
     * @var float
     */
    private $remisePied1;

    /**
     * Remise pied2.
     *
     * @var float
     */
    private $remisePied2;

    /**
     * Remise pied3.
     *
     * @var float
     */
    private $remisePied3;

    /**
     * Rib.
     *
     * @var string
     */
    private $rib;

    /**
     * Soumis escompte.
     *
     * @var bool
     */
    private $soumisEscompte;

    /**
     * Taux escompte.
     *
     * @var float
     */
    private $tauxEscompte;

    /**
     * Transporteur.
     *
     * @var string
     */
    private $transporteur;

    /**
     * Type facture.
     *
     * @var int
     */
    private $typeFacture;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
    }

    /**
     * Get the bloque.
     *
     * @return bool Returns the bloque.
     */
    public function getBloque() {
        return $this->bloque;
    }

    /**
     * Get the cle alpha.
     *
     * @return string Returns the cle alpha.
     */
    public function getCleAlpha() {
        return $this->cleAlpha;
    }

    /**
     * Get the code analytique.
     *
     * @return string Returns the code analytique.
     */
    public function getCodeAnalytique() {
        return $this->codeAnalytique;
    }

    /**
     * Get the code categorie client.
     *
     * @return string Returns the code categorie client.
     */
    public function getCodeCategorieClient() {
        return $this->codeCategorieClient;
    }

    /**
     * Get the code client fact.
     *
     * @return string Returns the code client fact.
     */
    public function getCodeClientFact() {
        return $this->codeClientFact;
    }

    /**
     * Get the code depot.
     *
     * @return string Returns the code depot.
     */
    public function getCodeDepot() {
        return $this->codeDepot;
    }

    /**
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
    }

    /**
     * Get the code famille.
     *
     * @return string Returns the code famille.
     */
    public function getCodeFamille() {
        return $this->codeFamille;
    }

    /**
     * Get the code geo.
     *
     * @return string Returns the code geo.
     */
    public function getCodeGeo() {
        return $this->codeGeo;
    }

    /**
     * Get the code langue designation article.
     *
     * @return string Returns the code langue designation article.
     */
    public function getCodeLangueDesignationArticle() {
        return $this->codeLangueDesignationArticle;
    }

    /**
     * Get the code mode reglement.
     *
     * @return string Returns the code mode reglement.
     */
    public function getCodeModeReglement() {
        return $this->codeModeReglement;
    }

    /**
     * Get the code origine.
     *
     * @return string Returns the code origine.
     */
    public function getCodeOrigine() {
        return $this->codeOrigine;
    }

    /**
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the code representant.
     *
     * @return string Returns the code representant.
     */
    public function getCodeRepresentant() {
        return $this->codeRepresentant;
    }

    /**
     * Get the code revision.
     *
     * @return string Returns the code revision.
     */
    public function getCodeRevision() {
        return $this->codeRevision;
    }

    /**
     * Get the code sous famille.
     *
     * @return string Returns the code sous famille.
     */
    public function getCodeSousFamille() {
        return $this->codeSousFamille;
    }

    /**
     * Get the code sous tournee.
     *
     * @return string Returns the code sous tournee.
     */
    public function getCodeSousTournee() {
        return $this->codeSousTournee;
    }

    /**
     * Get the code tournee.
     *
     * @return string Returns the code tournee.
     */
    public function getCodeTournee() {
        return $this->codeTournee;
    }

    /**
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the code ventil compta.
     *
     * @return string Returns the code ventil compta.
     */
    public function getCodeVentilCompta() {
        return $this->codeVentilCompta;
    }

    /**
     * Get the collectif comptable.
     *
     * @return int Returns the collectif comptable.
     */
    public function getCollectifComptable() {
        return $this->collectifComptable;
    }

    /**
     * Get the commentaire.
     *
     * @return string Returns the commentaire.
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Get the date creat.
     *
     * @return DateTime|null Returns the date creat.
     */
    public function getDateCreat() {
        return $this->dateCreat;
    }

    /**
     * Get the date entree.
     *
     * @return DateTime|null Returns the date entree.
     */
    public function getDateEntree() {
        return $this->dateEntree;
    }

    /**
     * Get the date modif.
     *
     * @return DateTime|null Returns the date modif.
     */
    public function getDateModif() {
        return $this->dateModif;
    }

    /**
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
    }

    /**
     * Get the derniere annee facturee.
     *
     * @return int Returns the derniere annee facturee.
     */
    public function getDerniereAnneeFacturee() {
        return $this->derniereAnneeFacturee;
    }

    /**
     * Get the domiciliation bancaire1.
     *
     * @return string Returns the domiciliation bancaire1.
     */
    public function getDomiciliationBancaire1() {
        return $this->domiciliationBancaire1;
    }

    /**
     * Get the domiciliation bancaire2.
     *
     * @return string Returns the domiciliation bancaire2.
     */
    public function getDomiciliationBancaire2() {
        return $this->domiciliationBancaire2;
    }

    /**
     * Get the echeance depart.
     *
     * @return int Returns the echeance depart.
     */
    public function getEcheanceDepart() {
        return $this->echeanceDepart;
    }

    /**
     * Get the echeance le.
     *
     * @return int Returns the echeance le.
     */
    public function getEcheanceLe() {
        return $this->echeanceLe;
    }

    /**
     * Get the echeance nb jours.
     *
     * @return int Returns the echeance nb jours.
     */
    public function getEcheanceNbJours() {
        return $this->echeanceNbJours;
    }

    /**
     * Get the facture euros.
     *
     * @return bool Returns the facture euros.
     */
    public function getFactureEuros() {
        return $this->factureEuros;
    }

    /**
     * Get the id.
     *
     * @return string Returns the id.
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Get the nb bl.
     *
     * @return int Returns the nb bl.
     */
    public function getNbBl() {
        return $this->nbBl;
    }

    /**
     * Get the nb facture.
     *
     * @return int Returns the nb facture.
     */
    public function getNbFacture() {
        return $this->nbFacture;
    }

    /**
     * Get the nombre echeances.
     *
     * @return int Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the num cpt collectif.
     *
     * @return string Returns the num cpt collectif.
     */
    public function getNumCptCollectif() {
        return $this->numCptCollectif;
    }

    /**
     * Get the num cpt comptable.
     *
     * @return string Returns the num cpt comptable.
     */
    public function getNumCptComptable() {
        return $this->numCptComptable;
    }

    /**
     * Get the premiere annee facturee.
     *
     * @return int Returns the premiere annee facturee.
     */
    public function getPremiereAnneeFacturee() {
        return $this->premiereAnneeFacturee;
    }

    /**
     * Get the prospect.
     *
     * @return bool Returns the prospect.
     */
    public function getProspect() {
        return $this->prospect;
    }

    /**
     * Get the remise ligne1.
     *
     * @return float Returns the remise ligne1.
     */
    public function getRemiseLigne1() {
        return $this->remiseLigne1;
    }

    /**
     * Get the remise ligne2.
     *
     * @return float Returns the remise ligne2.
     */
    public function getRemiseLigne2() {
        return $this->remiseLigne2;
    }

    /**
     * Get the remise ligne3.
     *
     * @return float Returns the remise ligne3.
     */
    public function getRemiseLigne3() {
        return $this->remiseLigne3;
    }

    /**
     * Get the remise pied1.
     *
     * @return float Returns the remise pied1.
     */
    public function getRemisePied1() {
        return $this->remisePied1;
    }

    /**
     * Get the remise pied2.
     *
     * @return float Returns the remise pied2.
     */
    public function getRemisePied2() {
        return $this->remisePied2;
    }

    /**
     * Get the remise pied3.
     *
     * @return float Returns the remise pied3.
     */
    public function getRemisePied3() {
        return $this->remisePied3;
    }

    /**
     * Get the rib.
     *
     * @return string Returns the rib.
     */
    public function getRib() {
        return $this->rib;
    }

    /**
     * Get the soumis escompte.
     *
     * @return bool Returns the soumis escompte.
     */
    public function getSoumisEscompte() {
        return $this->soumisEscompte;
    }

    /**
     * Get the taux escompte.
     *
     * @return float Returns the taux escompte.
     */
    public function getTauxEscompte() {
        return $this->tauxEscompte;
    }

    /**
     * Get the transporteur.
     *
     * @return string Returns the transporteur.
     */
    public function getTransporteur() {
        return $this->transporteur;
    }

    /**
     * Get the type facture.
     *
     * @return int Returns the type facture.
     */
    public function getTypeFacture() {
        return $this->typeFacture;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
    }

    /**
     * Set the bloque.
     *
     * @param bool $bloque The bloque.
     */
    public function setBloque($bloque) {
        $this->bloque = $bloque;
        return $this;
    }

    /**
     * Set the cle alpha.
     *
     * @param string $cleAlpha The cle alpha.
     */
    public function setCleAlpha($cleAlpha) {
        $this->cleAlpha = $cleAlpha;
        return $this;
    }

    /**
     * Set the code analytique.
     *
     * @param string $codeAnalytique The code analytique.
     */
    public function setCodeAnalytique($codeAnalytique) {
        $this->codeAnalytique = $codeAnalytique;
        return $this;
    }

    /**
     * Set the code categorie client.
     *
     * @param string $codeCategorieClient The code categorie client.
     */
    public function setCodeCategorieClient($codeCategorieClient) {
        $this->codeCategorieClient = $codeCategorieClient;
        return $this;
    }

    /**
     * Set the code client fact.
     *
     * @param string $codeClientFact The code client fact.
     */
    public function setCodeClientFact($codeClientFact) {
        $this->codeClientFact = $codeClientFact;
        return $this;
    }

    /**
     * Set the code depot.
     *
     * @param string $codeDepot The code depot.
     */
    public function setCodeDepot($codeDepot) {
        $this->codeDepot = $codeDepot;
        return $this;
    }

    /**
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
        return $this;
    }

    /**
     * Set the code famille.
     *
     * @param string $codeFamille The code famille.
     */
    public function setCodeFamille($codeFamille) {
        $this->codeFamille = $codeFamille;
        return $this;
    }

    /**
     * Set the code geo.
     *
     * @param string $codeGeo The code geo.
     */
    public function setCodeGeo($codeGeo) {
        $this->codeGeo = $codeGeo;
        return $this;
    }

    /**
     * Set the code langue designation article.
     *
     * @param string $codeLangueDesignationArticle The code langue designation article.
     */
    public function setCodeLangueDesignationArticle($codeLangueDesignationArticle) {
        $this->codeLangueDesignationArticle = $codeLangueDesignationArticle;
        return $this;
    }

    /**
     * Set the code mode reglement.
     *
     * @param string $codeModeReglement The code mode reglement.
     */
    public function setCodeModeReglement($codeModeReglement) {
        $this->codeModeReglement = $codeModeReglement;
        return $this;
    }

    /**
     * Set the code origine.
     *
     * @param string $codeOrigine The code origine.
     */
    public function setCodeOrigine($codeOrigine) {
        $this->codeOrigine = $codeOrigine;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the code representant.
     *
     * @param string $codeRepresentant The code representant.
     */
    public function setCodeRepresentant($codeRepresentant) {
        $this->codeRepresentant = $codeRepresentant;
        return $this;
    }

    /**
     * Set the code revision.
     *
     * @param string $codeRevision The code revision.
     */
    public function setCodeRevision($codeRevision) {
        $this->codeRevision = $codeRevision;
        return $this;
    }

    /**
     * Set the code sous famille.
     *
     * @param string $codeSousFamille The code sous famille.
     */
    public function setCodeSousFamille($codeSousFamille) {
        $this->codeSousFamille = $codeSousFamille;
        return $this;
    }

    /**
     * Set the code sous tournee.
     *
     * @param string $codeSousTournee The code sous tournee.
     */
    public function setCodeSousTournee($codeSousTournee) {
        $this->codeSousTournee = $codeSousTournee;
        return $this;
    }

    /**
     * Set the code tournee.
     *
     * @param string $codeTournee The code tournee.
     */
    public function setCodeTournee($codeTournee) {
        $this->codeTournee = $codeTournee;
        return $this;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the code ventil compta.
     *
     * @param string $codeVentilCompta The code ventil compta.
     */
    public function setCodeVentilCompta($codeVentilCompta) {
        $this->codeVentilCompta = $codeVentilCompta;
        return $this;
    }

    /**
     * Set the collectif comptable.
     *
     * @param int $collectifComptable The collectif comptable.
     */
    public function setCollectifComptable($collectifComptable) {
        $this->collectifComptable = $collectifComptable;
        return $this;
    }

    /**
     * Set the commentaire.
     *
     * @param string $commentaire The commentaire.
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;
        return $this;
    }

    /**
     * Set the date creat.
     *
     * @param DateTime|null $dateCreat The date creat.
     */
    public function setDateCreat(DateTime $dateCreat = null) {
        $this->dateCreat = $dateCreat;
        return $this;
    }

    /**
     * Set the date entree.
     *
     * @param DateTime|null $dateEntree The date entree.
     */
    public function setDateEntree(DateTime $dateEntree = null) {
        $this->dateEntree = $dateEntree;
        return $this;
    }

    /**
     * Set the date modif.
     *
     * @param DateTime|null $dateModif The date modif.
     */
    public function setDateModif(DateTime $dateModif = null) {
        $this->dateModif = $dateModif;
        return $this;
    }

    /**
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
        return $this;
    }

    /**
     * Set the derniere annee facturee.
     *
     * @param int $derniereAnneeFacturee The derniere annee facturee.
     */
    public function setDerniereAnneeFacturee($derniereAnneeFacturee) {
        $this->derniereAnneeFacturee = $derniereAnneeFacturee;
        return $this;
    }

    /**
     * Set the domiciliation bancaire1.
     *
     * @param string $domiciliationBancaire1 The domiciliation bancaire1.
     */
    public function setDomiciliationBancaire1($domiciliationBancaire1) {
        $this->domiciliationBancaire1 = $domiciliationBancaire1;
        return $this;
    }

    /**
     * Set the domiciliation bancaire2.
     *
     * @param string $domiciliationBancaire2 The domiciliation bancaire2.
     */
    public function setDomiciliationBancaire2($domiciliationBancaire2) {
        $this->domiciliationBancaire2 = $domiciliationBancaire2;
        return $this;
    }

    /**
     * Set the echeance depart.
     *
     * @param int $echeanceDepart The echeance depart.
     */
    public function setEcheanceDepart($echeanceDepart) {
        $this->echeanceDepart = $echeanceDepart;
        return $this;
    }

    /**
     * Set the echeance le.
     *
     * @param int $echeanceLe The echeance le.
     */
    public function setEcheanceLe($echeanceLe) {
        $this->echeanceLe = $echeanceLe;
        return $this;
    }

    /**
     * Set the echeance nb jours.
     *
     * @param int $echeanceNbJours The echeance nb jours.
     */
    public function setEcheanceNbJours($echeanceNbJours) {
        $this->echeanceNbJours = $echeanceNbJours;
        return $this;
    }

    /**
     * Set the facture euros.
     *
     * @param bool $factureEuros The facture euros.
     */
    public function setFactureEuros($factureEuros) {
        $this->factureEuros = $factureEuros;
        return $this;
    }

    /**
     * Set the id.
     *
     * @param string $id The id.
     */
    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    /**
     * Set the nb bl.
     *
     * @param int $nbBl The nb bl.
     */
    public function setNbBl($nbBl) {
        $this->nbBl = $nbBl;
        return $this;
    }

    /**
     * Set the nb facture.
     *
     * @param int $nbFacture The nb facture.
     */
    public function setNbFacture($nbFacture) {
        $this->nbFacture = $nbFacture;
        return $this;
    }

    /**
     * Set the nombre echeances.
     *
     * @param int $nombreEcheances The nombre echeances.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the num cpt collectif.
     *
     * @param string $numCptCollectif The num cpt collectif.
     */
    public function setNumCptCollectif($numCptCollectif) {
        $this->numCptCollectif = $numCptCollectif;
        return $this;
    }

    /**
     * Set the num cpt comptable.
     *
     * @param string $numCptComptable The num cpt comptable.
     */
    public function setNumCptComptable($numCptComptable) {
        $this->numCptComptable = $numCptComptable;
        return $this;
    }

    /**
     * Set the premiere annee facturee.
     *
     * @param int $premiereAnneeFacturee The premiere annee facturee.
     */
    public function setPremiereAnneeFacturee($premiereAnneeFacturee) {
        $this->premiereAnneeFacturee = $premiereAnneeFacturee;
        return $this;
    }

    /**
     * Set the prospect.
     *
     * @param bool $prospect The prospect.
     */
    public function setProspect($prospect) {
        $this->prospect = $prospect;
        return $this;
    }

    /**
     * Set the remise ligne1.
     *
     * @param float $remiseLigne1 The remise ligne1.
     */
    public function setRemiseLigne1($remiseLigne1) {
        $this->remiseLigne1 = $remiseLigne1;
        return $this;
    }

    /**
     * Set the remise ligne2.
     *
     * @param float $remiseLigne2 The remise ligne2.
     */
    public function setRemiseLigne2($remiseLigne2) {
        $this->remiseLigne2 = $remiseLigne2;
        return $this;
    }

    /**
     * Set the remise ligne3.
     *
     * @param float $remiseLigne3 The remise ligne3.
     */
    public function setRemiseLigne3($remiseLigne3) {
        $this->remiseLigne3 = $remiseLigne3;
        return $this;
    }

    /**
     * Set the remise pied1.
     *
     * @param float $remisePied1 The remise pied1.
     */
    public function setRemisePied1($remisePied1) {
        $this->remisePied1 = $remisePied1;
        return $this;
    }

    /**
     * Set the remise pied2.
     *
     * @param float $remisePied2 The remise pied2.
     */
    public function setRemisePied2($remisePied2) {
        $this->remisePied2 = $remisePied2;
        return $this;
    }

    /**
     * Set the remise pied3.
     *
     * @param float $remisePied3 The remise pied3.
     */
    public function setRemisePied3($remisePied3) {
        $this->remisePied3 = $remisePied3;
        return $this;
    }

    /**
     * Set the rib.
     *
     * @param string $rib The rib.
     */
    public function setRib($rib) {
        $this->rib = $rib;
        return $this;
    }

    /**
     * Set the soumis escompte.
     *
     * @param bool $soumisEscompte The soumis escompte.
     */
    public function setSoumisEscompte($soumisEscompte) {
        $this->soumisEscompte = $soumisEscompte;
        return $this;
    }

    /**
     * Set the taux escompte.
     *
     * @param float $tauxEscompte The taux escompte.
     */
    public function setTauxEscompte($tauxEscompte) {
        $this->tauxEscompte = $tauxEscompte;
        return $this;
    }

    /**
     * Set the transporteur.
     *
     * @param string $transporteur The transporteur.
     */
    public function setTransporteur($transporteur) {
        $this->transporteur = $transporteur;
        return $this;
    }

    /**
     * Set the type facture.
     *
     * @param int $typeFacture The type facture.
     */
    public function setTypeFacture($typeFacture) {
        $this->typeFacture = $typeFacture;
        return $this;
    }
}
