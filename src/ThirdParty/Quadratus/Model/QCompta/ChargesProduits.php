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


/**
 * Charges produits model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ChargesProduits {

    /**
     * Centre.
     *
     * @var string
     */
    private $centre;

    /**
     * Code feuille.
     *
     * @var string
     */
    private $codeFeuille;

    /**
     * Commentaires.
     *
     * @var string
     */
    private $commentaires;

    /**
     * Contre partie.
     *
     * @var string
     */
    private $contrePartie;

    /**
     * Etat ligne.
     *
     * @var string
     */
    private $etatLigne;

    /**
     * Lib ecriture.
     *
     * @var string
     */
    private $libEcriture;

    /**
     * Mois revision.
     *
     * @var string
     */
    private $moisRevision;

    /**
     * Mt h t.
     *
     * @var float
     */
    private $mtHT;

    /**
     * Mt n1.
     *
     * @var float
     */
    private $mtN1;

    /**
     * Nature.
     *
     * @var string
     */
    private $nature;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Num lot ecriture.
     *
     * @var int
     */
    private $numLotEcriture;

    /**
     * Num lot periodicite.
     *
     * @var int
     */
    private $numLotPeriodicite;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Sens.
     *
     * @var string
     */
    private $sens;

    /**
     * Tx t v a.
     *
     * @var float
     */
    private $txTVA;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the centre.
     *
     * @return string Returns the centre.
     */
    public function getCentre() {
        return $this->centre;
    }

    /**
     * Get the code feuille.
     *
     * @return string Returns the code feuille.
     */
    public function getCodeFeuille() {
        return $this->codeFeuille;
    }

    /**
     * Get the commentaires.
     *
     * @return string Returns the commentaires.
     */
    public function getCommentaires() {
        return $this->commentaires;
    }

    /**
     * Get the contre partie.
     *
     * @return string Returns the contre partie.
     */
    public function getContrePartie() {
        return $this->contrePartie;
    }

    /**
     * Get the etat ligne.
     *
     * @return string Returns the etat ligne.
     */
    public function getEtatLigne() {
        return $this->etatLigne;
    }

    /**
     * Get the lib ecriture.
     *
     * @return string Returns the lib ecriture.
     */
    public function getLibEcriture() {
        return $this->libEcriture;
    }

    /**
     * Get the mois revision.
     *
     * @return string Returns the mois revision.
     */
    public function getMoisRevision() {
        return $this->moisRevision;
    }

    /**
     * Get the mt h t.
     *
     * @return float Returns the mt h t.
     */
    public function getMtHT() {
        return $this->mtHT;
    }

    /**
     * Get the mt n1.
     *
     * @return float Returns the mt n1.
     */
    public function getMtN1() {
        return $this->mtN1;
    }

    /**
     * Get the nature.
     *
     * @return string Returns the nature.
     */
    public function getNature() {
        return $this->nature;
    }

    /**
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the num lot ecriture.
     *
     * @return int Returns the num lot ecriture.
     */
    public function getNumLotEcriture() {
        return $this->numLotEcriture;
    }

    /**
     * Get the num lot periodicite.
     *
     * @return int Returns the num lot periodicite.
     */
    public function getNumLotPeriodicite() {
        return $this->numLotPeriodicite;
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
     * Get the ref image.
     *
     * @return string Returns the ref image.
     */
    public function getRefImage() {
        return $this->refImage;
    }

    /**
     * Get the sens.
     *
     * @return string Returns the sens.
     */
    public function getSens() {
        return $this->sens;
    }

    /**
     * Get the tx t v a.
     *
     * @return float Returns the tx t v a.
     */
    public function getTxTVA() {
        return $this->txTVA;
    }

    /**
     * Set the centre.
     *
     * @param string $centre The centre.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setCentre($centre) {
        $this->centre = $centre;
        return $this;
    }

    /**
     * Set the code feuille.
     *
     * @param string $codeFeuille The code feuille.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setCodeFeuille($codeFeuille) {
        $this->codeFeuille = $codeFeuille;
        return $this;
    }

    /**
     * Set the commentaires.
     *
     * @param string $commentaires The commentaires.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setCommentaires($commentaires) {
        $this->commentaires = $commentaires;
        return $this;
    }

    /**
     * Set the contre partie.
     *
     * @param string $contrePartie The contre partie.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setContrePartie($contrePartie) {
        $this->contrePartie = $contrePartie;
        return $this;
    }

    /**
     * Set the etat ligne.
     *
     * @param string $etatLigne The etat ligne.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setEtatLigne($etatLigne) {
        $this->etatLigne = $etatLigne;
        return $this;
    }

    /**
     * Set the lib ecriture.
     *
     * @param string $libEcriture The lib ecriture.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setLibEcriture($libEcriture) {
        $this->libEcriture = $libEcriture;
        return $this;
    }

    /**
     * Set the mois revision.
     *
     * @param string $moisRevision The mois revision.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setMoisRevision($moisRevision) {
        $this->moisRevision = $moisRevision;
        return $this;
    }

    /**
     * Set the mt h t.
     *
     * @param float $mtHT The mt h t.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setMtHT($mtHT) {
        $this->mtHT = $mtHT;
        return $this;
    }

    /**
     * Set the mt n1.
     *
     * @param float $mtN1 The mt n1.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setMtN1($mtN1) {
        $this->mtN1 = $mtN1;
        return $this;
    }

    /**
     * Set the nature.
     *
     * @param string $nature The nature.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setNature($nature) {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the num lot ecriture.
     *
     * @param int $numLotEcriture The num lot ecriture.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setNumLotEcriture($numLotEcriture) {
        $this->numLotEcriture = $numLotEcriture;
        return $this;
    }

    /**
     * Set the num lot periodicite.
     *
     * @param int $numLotPeriodicite The num lot periodicite.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setNumLotPeriodicite($numLotPeriodicite) {
        $this->numLotPeriodicite = $numLotPeriodicite;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the sens.
     *
     * @param string $sens The sens.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setSens($sens) {
        $this->sens = $sens;
        return $this;
    }

    /**
     * Set the tx t v a.
     *
     * @param float $txTVA The tx t v a.
     * @return ChargesProduits Returns this charges produits.
     */
    public function setTxTVA($txTVA) {
        $this->txTVA = $txTVA;
        return $this;
    }
}
