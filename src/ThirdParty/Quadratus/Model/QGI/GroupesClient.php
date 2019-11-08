<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Groupes client.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class GroupesClient {

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
     * Client perdu.
     *
     * @var bool
     */
    private $clientPerdu;

    /**
     * Code analytique.
     *
     * @var string
     */
    private $codeAnalytique;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code client fact.
     *
     * @var string
     */
    private $codeClientFact;

    /**
     * Code devise.
     *
     * @var string
     */
    private $codeDevise;

    /**
     * Code langue designation article.
     *
     * @var string
     */
    private $codeLangueDesignationArticle;

    /**
     * Code reglement.
     *
     * @var string
     */
    private $codeReglement;

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
     * Collectif.
     *
     * @var string
     */
    private $collectif;

    /**
     * Date entree.
     *
     * @var DateTime|null
     */
    private $dateEntree;

    /**
     * Date sortie.
     *
     * @var DateTime|null
     */
    private $dateSortie;

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
     * Echeance fin decade.
     *
     * @var bool
     */
    private $echeanceFinDecade;

    /**
     * Facture euros.
     *
     * @var bool
     */
    private $factureEuros;

    /**
     * Groupe.
     *
     * @var string
     */
    private $groupe;

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
     * @var string
     */
    private $nombreEcheances;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Paiement depart le.
     *
     * @var string
     */
    private $paiementDepartLe;

    /**
     * Paiement le.
     *
     * @var string
     */
    private $paiementLe;

    /**
     * Paiement nombre de jours.
     *
     * @var int
     */
    private $paiementNombreDeJours;

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
     * Remise pied.
     *
     * @var float
     */
    private $remisePied;

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
     * Get the client perdu.
     *
     * @return bool Returns the client perdu.
     */
    public function getClientPerdu() {
        return $this->clientPerdu;
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
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
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
     * Get the code devise.
     *
     * @return string Returns the code devise.
     */
    public function getCodeDevise() {
        return $this->codeDevise;
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
     * Get the code reglement.
     *
     * @return string Returns the code reglement.
     */
    public function getCodeReglement() {
        return $this->codeReglement;
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
     * Get the collectif.
     *
     * @return string Returns the collectif.
     */
    public function getCollectif() {
        return $this->collectif;
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
     * Get the date sortie.
     *
     * @return DateTime|null Returns the date sortie.
     */
    public function getDateSortie() {
        return $this->dateSortie;
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
     * Get the echeance fin decade.
     *
     * @return bool Returns the echeance fin decade.
     */
    public function getEcheanceFinDecade() {
        return $this->echeanceFinDecade;
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
     * Get the groupe.
     *
     * @return string Returns the groupe.
     */
    public function getGroupe() {
        return $this->groupe;
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
     * @return string Returns the nombre echeances.
     */
    public function getNombreEcheances() {
        return $this->nombreEcheances;
    }

    /**
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
    }

    /**
     * Get the paiement depart le.
     *
     * @return string Returns the paiement depart le.
     */
    public function getPaiementDepartLe() {
        return $this->paiementDepartLe;
    }

    /**
     * Get the paiement le.
     *
     * @return string Returns the paiement le.
     */
    public function getPaiementLe() {
        return $this->paiementLe;
    }

    /**
     * Get the paiement nombre de jours.
     *
     * @return int Returns the paiement nombre de jours.
     */
    public function getPaiementNombreDeJours() {
        return $this->paiementNombreDeJours;
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
     * Get the remise pied.
     *
     * @return float Returns the remise pied.
     */
    public function getRemisePied() {
        return $this->remisePied;
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
     * Set the client perdu.
     *
     * @param bool $clientPerdu The client perdu.
     */
    public function setClientPerdu($clientPerdu) {
        $this->clientPerdu = $clientPerdu;
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
     * Set the code client.
     *
     * @param string $codeClient The code client.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
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
     * Set the code devise.
     *
     * @param string $codeDevise The code devise.
     */
    public function setCodeDevise($codeDevise) {
        $this->codeDevise = $codeDevise;
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
     * Set the code reglement.
     *
     * @param string $codeReglement The code reglement.
     */
    public function setCodeReglement($codeReglement) {
        $this->codeReglement = $codeReglement;
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
     * Set the collectif.
     *
     * @param string $collectif The collectif.
     */
    public function setCollectif($collectif) {
        $this->collectif = $collectif;
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
     * Set the date sortie.
     *
     * @param DateTime|null $dateSortie The date sortie.
     */
    public function setDateSortie(DateTime $dateSortie = null) {
        $this->dateSortie = $dateSortie;
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
     * Set the echeance fin decade.
     *
     * @param bool $echeanceFinDecade The echeance fin decade.
     */
    public function setEcheanceFinDecade($echeanceFinDecade) {
        $this->echeanceFinDecade = $echeanceFinDecade;
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
     * Set the groupe.
     *
     * @param string $groupe The groupe.
     */
    public function setGroupe($groupe) {
        $this->groupe = $groupe;
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
     * @param string $nombreEcheances The nombre echeances.
     */
    public function setNombreEcheances($nombreEcheances) {
        $this->nombreEcheances = $nombreEcheances;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the paiement depart le.
     *
     * @param string $paiementDepartLe The paiement depart le.
     */
    public function setPaiementDepartLe($paiementDepartLe) {
        $this->paiementDepartLe = $paiementDepartLe;
        return $this;
    }

    /**
     * Set the paiement le.
     *
     * @param string $paiementLe The paiement le.
     */
    public function setPaiementLe($paiementLe) {
        $this->paiementLe = $paiementLe;
        return $this;
    }

    /**
     * Set the paiement nombre de jours.
     *
     * @param int $paiementNombreDeJours The paiement nombre de jours.
     */
    public function setPaiementNombreDeJours($paiementNombreDeJours) {
        $this->paiementNombreDeJours = $paiementNombreDeJours;
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
     * Set the remise pied.
     *
     * @param float $remisePied The remise pied.
     */
    public function setRemisePied($remisePied) {
        $this->remisePied = $remisePied;
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
     * Set the type facture.
     *
     * @param int $typeFacture The type facture.
     */
    public function setTypeFacture($typeFacture) {
        $this->typeFacture = $typeFacture;
        return $this;
    }
}
