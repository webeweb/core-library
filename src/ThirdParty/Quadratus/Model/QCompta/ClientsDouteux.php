<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Clients douteux.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ClientsDouteux {

    /**
     * Date doute.
     *
     * @var DateTime|null
     */
    private $dateDoute;

    /**
     * Mention.
     *
     * @var string
     */
    private $mention;

    /**
     * Mt creance base ht.
     *
     * @var float
     */
    private $mtCreanceBaseHt;

    /**
     * Mt creance ttc deb exo.
     *
     * @var float
     */
    private $mtCreanceTtcDebExo;

    /**
     * Mt creance ttc dev dout exo.
     *
     * @var float
     */
    private $mtCreanceTtcDevDoutExo;

    /**
     * Mt creance ttc irrec exo.
     *
     * @var float
     */
    private $mtCreanceTtcIrrecExo;

    /**
     * Mt creance ttc regl exo.
     *
     * @var float
     */
    private $mtCreanceTtcReglExo;

    /**
     * Mt provision deb exo.
     *
     * @var float
     */
    private $mtProvisionDebExo;

    /**
     * Mt provision dot exo.
     *
     * @var float
     */
    private $mtProvisionDotExo;

    /**
     * Mt rep provision irrec.
     *
     * @var float
     */
    private $mtRepProvisionIrrec;

    /**
     * Mt rep provision regl.
     *
     * @var float
     */
    private $mtRepProvisionRegl;

    /**
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Observations.
     *
     * @var string
     */
    private $observations;

    /**
     * Ref image.
     *
     * @var string
     */
    private $refImage;

    /**
     * Taux doute deb exo.
     *
     * @var float
     */
    private $tauxDouteDebExo;

    /**
     * Taux doute exo.
     *
     * @var float
     */
    private $tauxDouteExo;

    /**
     * Tx tva creance.
     *
     * @var float
     */
    private $txTvaCreance;

    /**
     * Tx tva creance force.
     *
     * @var bool
     */
    private $txTvaCreanceForce;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date doute.
     *
     * @return DateTime|null Returns the date doute.
     */
    public function getDateDoute() {
        return $this->dateDoute;
    }

    /**
     * Get the mention.
     *
     * @return string Returns the mention.
     */
    public function getMention() {
        return $this->mention;
    }

    /**
     * Get the mt creance base ht.
     *
     * @return float Returns the mt creance base ht.
     */
    public function getMtCreanceBaseHt() {
        return $this->mtCreanceBaseHt;
    }

    /**
     * Get the mt creance ttc deb exo.
     *
     * @return float Returns the mt creance ttc deb exo.
     */
    public function getMtCreanceTtcDebExo() {
        return $this->mtCreanceTtcDebExo;
    }

    /**
     * Get the mt creance ttc dev dout exo.
     *
     * @return float Returns the mt creance ttc dev dout exo.
     */
    public function getMtCreanceTtcDevDoutExo() {
        return $this->mtCreanceTtcDevDoutExo;
    }

    /**
     * Get the mt creance ttc irrec exo.
     *
     * @return float Returns the mt creance ttc irrec exo.
     */
    public function getMtCreanceTtcIrrecExo() {
        return $this->mtCreanceTtcIrrecExo;
    }

    /**
     * Get the mt creance ttc regl exo.
     *
     * @return float Returns the mt creance ttc regl exo.
     */
    public function getMtCreanceTtcReglExo() {
        return $this->mtCreanceTtcReglExo;
    }

    /**
     * Get the mt provision deb exo.
     *
     * @return float Returns the mt provision deb exo.
     */
    public function getMtProvisionDebExo() {
        return $this->mtProvisionDebExo;
    }

    /**
     * Get the mt provision dot exo.
     *
     * @return float Returns the mt provision dot exo.
     */
    public function getMtProvisionDotExo() {
        return $this->mtProvisionDotExo;
    }

    /**
     * Get the mt rep provision irrec.
     *
     * @return float Returns the mt rep provision irrec.
     */
    public function getMtRepProvisionIrrec() {
        return $this->mtRepProvisionIrrec;
    }

    /**
     * Get the mt rep provision regl.
     *
     * @return float Returns the mt rep provision regl.
     */
    public function getMtRepProvisionRegl() {
        return $this->mtRepProvisionRegl;
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
     * Get the observations.
     *
     * @return string Returns the observations.
     */
    public function getObservations() {
        return $this->observations;
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
     * Get the taux doute deb exo.
     *
     * @return float Returns the taux doute deb exo.
     */
    public function getTauxDouteDebExo() {
        return $this->tauxDouteDebExo;
    }

    /**
     * Get the taux doute exo.
     *
     * @return float Returns the taux doute exo.
     */
    public function getTauxDouteExo() {
        return $this->tauxDouteExo;
    }

    /**
     * Get the tx tva creance.
     *
     * @return float Returns the tx tva creance.
     */
    public function getTxTvaCreance() {
        return $this->txTvaCreance;
    }

    /**
     * Get the tx tva creance force.
     *
     * @return bool Returns the tx tva creance force.
     */
    public function getTxTvaCreanceForce() {
        return $this->txTvaCreanceForce;
    }

    /**
     * Set the date doute.
     *
     * @param DateTime|null $dateDoute The date doute.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setDateDoute(DateTime $dateDoute = null) {
        $this->dateDoute = $dateDoute;
        return $this;
    }

    /**
     * Set the mention.
     *
     * @param string $mention The mention.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMention($mention) {
        $this->mention = $mention;
        return $this;
    }

    /**
     * Set the mt creance base ht.
     *
     * @param float $mtCreanceBaseHt The mt creance base ht.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceBaseHt($mtCreanceBaseHt) {
        $this->mtCreanceBaseHt = $mtCreanceBaseHt;
        return $this;
    }

    /**
     * Set the mt creance ttc deb exo.
     *
     * @param float $mtCreanceTtcDebExo The mt creance ttc deb exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcDebExo($mtCreanceTtcDebExo) {
        $this->mtCreanceTtcDebExo = $mtCreanceTtcDebExo;
        return $this;
    }

    /**
     * Set the mt creance ttc dev dout exo.
     *
     * @param float $mtCreanceTtcDevDoutExo The mt creance ttc dev dout exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcDevDoutExo($mtCreanceTtcDevDoutExo) {
        $this->mtCreanceTtcDevDoutExo = $mtCreanceTtcDevDoutExo;
        return $this;
    }

    /**
     * Set the mt creance ttc irrec exo.
     *
     * @param float $mtCreanceTtcIrrecExo The mt creance ttc irrec exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcIrrecExo($mtCreanceTtcIrrecExo) {
        $this->mtCreanceTtcIrrecExo = $mtCreanceTtcIrrecExo;
        return $this;
    }

    /**
     * Set the mt creance ttc regl exo.
     *
     * @param float $mtCreanceTtcReglExo The mt creance ttc regl exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtCreanceTtcReglExo($mtCreanceTtcReglExo) {
        $this->mtCreanceTtcReglExo = $mtCreanceTtcReglExo;
        return $this;
    }

    /**
     * Set the mt provision deb exo.
     *
     * @param float $mtProvisionDebExo The mt provision deb exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtProvisionDebExo($mtProvisionDebExo) {
        $this->mtProvisionDebExo = $mtProvisionDebExo;
        return $this;
    }

    /**
     * Set the mt provision dot exo.
     *
     * @param float $mtProvisionDotExo The mt provision dot exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtProvisionDotExo($mtProvisionDotExo) {
        $this->mtProvisionDotExo = $mtProvisionDotExo;
        return $this;
    }

    /**
     * Set the mt rep provision irrec.
     *
     * @param float $mtRepProvisionIrrec The mt rep provision irrec.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtRepProvisionIrrec($mtRepProvisionIrrec) {
        $this->mtRepProvisionIrrec = $mtRepProvisionIrrec;
        return $this;
    }

    /**
     * Set the mt rep provision regl.
     *
     * @param float $mtRepProvisionRegl The mt rep provision regl.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setMtRepProvisionRegl($mtRepProvisionRegl) {
        $this->mtRepProvisionRegl = $mtRepProvisionRegl;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the taux doute deb exo.
     *
     * @param float $tauxDouteDebExo The taux doute deb exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTauxDouteDebExo($tauxDouteDebExo) {
        $this->tauxDouteDebExo = $tauxDouteDebExo;
        return $this;
    }

    /**
     * Set the taux doute exo.
     *
     * @param float $tauxDouteExo The taux doute exo.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTauxDouteExo($tauxDouteExo) {
        $this->tauxDouteExo = $tauxDouteExo;
        return $this;
    }

    /**
     * Set the tx tva creance.
     *
     * @param float $txTvaCreance The tx tva creance.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTxTvaCreance($txTvaCreance) {
        $this->txTvaCreance = $txTvaCreance;
        return $this;
    }

    /**
     * Set the tx tva creance force.
     *
     * @param bool $txTvaCreanceForce The tx tva creance force.
     * @return ClientsDouteux Returns this Clients douteux.
     */
    public function setTxTvaCreanceForce($txTvaCreanceForce) {
        $this->txTvaCreanceForce = $txTvaCreanceForce;
        return $this;
    }
}
