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
 * Plans fact bon trav.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlansFactBonTrav {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code chantier.
     *
     * @var string
     */
    private $codeChantier;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Coefficient.
     *
     * @var float
     */
    private $coefficient;

    /**
     * Date bt.
     *
     * @var DateTime|null
     */
    private $dateBt;

    /**
     * Designation.
     *
     * @var string
     */
    private $designation;

    /**
     * Designation2.
     *
     * @var string
     */
    private $designation2;

    /**
     * Designation3.
     *
     * @var string
     */
    private $designation3;

    /**
     * Duree.
     *
     * @var float
     */
    private $duree;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Poste rent.
     *
     * @var string
     */
    private $posteRent;

    /**
     * Prix achat.
     *
     * @var float
     */
    private $prixAchat;

    /**
     * Px facture.
     *
     * @var bool
     */
    private $pxFacture;

    /**
     * Taux.
     *
     * @var float
     */
    private $taux;

    /**
     * Ventil marge.
     *
     * @var bool
     */
    private $ventilMarge;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affaire.
     *
     * @return string Returns the code affaire.
     */
    public function getCodeAffaire() {
        return $this->codeAffaire;
    }

    /**
     * Get the code article.
     *
     * @return string Returns the code article.
     */
    public function getCodeArticle() {
        return $this->codeArticle;
    }

    /**
     * Get the code chantier.
     *
     * @return string Returns the code chantier.
     */
    public function getCodeChantier() {
        return $this->codeChantier;
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
     * Get the code regroupement.
     *
     * @return string Returns the code regroupement.
     */
    public function getCodeRegroupement() {
        return $this->codeRegroupement;
    }

    /**
     * Get the coefficient.
     *
     * @return float Returns the coefficient.
     */
    public function getCoefficient() {
        return $this->coefficient;
    }

    /**
     * Get the date bt.
     *
     * @return DateTime|null Returns the date bt.
     */
    public function getDateBt() {
        return $this->dateBt;
    }

    /**
     * Get the designation.
     *
     * @return string Returns the designation.
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Get the designation2.
     *
     * @return string Returns the designation2.
     */
    public function getDesignation2() {
        return $this->designation2;
    }

    /**
     * Get the designation3.
     *
     * @return string Returns the designation3.
     */
    public function getDesignation3() {
        return $this->designation3;
    }

    /**
     * Get the duree.
     *
     * @return float Returns the duree.
     */
    public function getDuree() {
        return $this->duree;
    }

    /**
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
    }

    /**
     * Get the num bt.
     *
     * @return int Returns the num bt.
     */
    public function getNumBt() {
        return $this->numBt;
    }

    /**
     * Get the poste rent.
     *
     * @return string Returns the poste rent.
     */
    public function getPosteRent() {
        return $this->posteRent;
    }

    /**
     * Get the prix achat.
     *
     * @return float Returns the prix achat.
     */
    public function getPrixAchat() {
        return $this->prixAchat;
    }

    /**
     * Get the px facture.
     *
     * @return bool Returns the px facture.
     */
    public function getPxFacture() {
        return $this->pxFacture;
    }

    /**
     * Get the taux.
     *
     * @return float Returns the taux.
     */
    public function getTaux() {
        return $this->taux;
    }

    /**
     * Get the ventil marge.
     *
     * @return bool Returns the ventil marge.
     */
    public function getVentilMarge() {
        return $this->ventilMarge;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the coefficient.
     *
     * @param float $coefficient The coefficient.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setCoefficient($coefficient) {
        $this->coefficient = $coefficient;
        return $this;
    }

    /**
     * Set the date bt.
     *
     * @param DateTime|null $dateBt The date bt.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDateBt(DateTime $dateBt = null) {
        $this->dateBt = $dateBt;
        return $this;
    }

    /**
     * Set the designation.
     *
     * @param string $designation The designation.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDesignation($designation) {
        $this->designation = $designation;
        return $this;
    }

    /**
     * Set the designation2.
     *
     * @param string $designation2 The designation2.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDesignation2($designation2) {
        $this->designation2 = $designation2;
        return $this;
    }

    /**
     * Set the designation3.
     *
     * @param string $designation3 The designation3.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDesignation3($designation3) {
        $this->designation3 = $designation3;
        return $this;
    }

    /**
     * Set the duree.
     *
     * @param float $duree The duree.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setDuree($duree) {
        $this->duree = $duree;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the poste rent.
     *
     * @param string $posteRent The poste rent.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setPosteRent($posteRent) {
        $this->posteRent = $posteRent;
        return $this;
    }

    /**
     * Set the prix achat.
     *
     * @param float $prixAchat The prix achat.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setPrixAchat($prixAchat) {
        $this->prixAchat = $prixAchat;
        return $this;
    }

    /**
     * Set the px facture.
     *
     * @param bool $pxFacture The px facture.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setPxFacture($pxFacture) {
        $this->pxFacture = $pxFacture;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }

    /**
     * Set the ventil marge.
     *
     * @param bool $ventilMarge The ventil marge.
     * @return PlansFactBonTrav Returns this Plans fact bon trav.
     */
    public function setVentilMarge($ventilMarge) {
        $this->ventilMarge = $ventilMarge;
        return $this;
    }
}
