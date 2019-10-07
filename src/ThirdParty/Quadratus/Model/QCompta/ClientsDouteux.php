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
 * Clients douteux model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class ClientsDouteux {

    /**
     * Date doute.
     *
     * @var DateTime
     */
    private $dateDoute;

    /**
     * Mention.
     *
     * @var string
     */
    private $mention;

    /**
     * Mt creance base h t.
     *
     * @var float
     */
    private $mtCreanceBaseHT;

    /**
     * Mt creance t t c deb exo.
     *
     * @var float
     */
    private $mtCreanceTTCDebExo;

    /**
     * Mt creance t t c dev dout exo.
     *
     * @var float
     */
    private $mtCreanceTTCDevDoutExo;

    /**
     * Mt creance t t c irrec exo.
     *
     * @var float
     */
    private $mtCreanceTTCIrrecExo;

    /**
     * Mt creance t t c regl exo.
     *
     * @var float
     */
    private $mtCreanceTTCReglExo;

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
     * Tx t v a creance.
     *
     * @var float
     */
    private $txTVACreance;

    /**
     * Tx t v a creance force.
     *
     * @var bool
     */
    private $txTVACreanceForce;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the date doute.
     *
     * @return DateTime Returns the date doute.
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
     * Get the mt creance base h t.
     *
     * @return float Returns the mt creance base h t.
     */
    public function getMtCreanceBaseHT() {
        return $this->mtCreanceBaseHT;
    }

    /**
     * Get the mt creance t t c deb exo.
     *
     * @return float Returns the mt creance t t c deb exo.
     */
    public function getMtCreanceTTCDebExo() {
        return $this->mtCreanceTTCDebExo;
    }

    /**
     * Get the mt creance t t c dev dout exo.
     *
     * @return float Returns the mt creance t t c dev dout exo.
     */
    public function getMtCreanceTTCDevDoutExo() {
        return $this->mtCreanceTTCDevDoutExo;
    }

    /**
     * Get the mt creance t t c irrec exo.
     *
     * @return float Returns the mt creance t t c irrec exo.
     */
    public function getMtCreanceTTCIrrecExo() {
        return $this->mtCreanceTTCIrrecExo;
    }

    /**
     * Get the mt creance t t c regl exo.
     *
     * @return float Returns the mt creance t t c regl exo.
     */
    public function getMtCreanceTTCReglExo() {
        return $this->mtCreanceTTCReglExo;
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
     * Get the tx t v a creance.
     *
     * @return float Returns the tx t v a creance.
     */
    public function getTxTVACreance() {
        return $this->txTVACreance;
    }

    /**
     * Get the tx t v a creance force.
     *
     * @return bool Returns the tx t v a creance force.
     */
    public function getTxTVACreanceForce() {
        return $this->txTVACreanceForce;
    }

    /**
     * Set the date doute.
     *
     * @param DateTime $dateDoute The date doute.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setDateDoute(DateTime $dateDoute = null) {
        $this->dateDoute = $dateDoute;
        return $this;
    }

    /**
     * Set the mention.
     *
     * @param string $mention The mention.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMention($mention) {
        $this->mention = $mention;
        return $this;
    }

    /**
     * Set the mt creance base h t.
     *
     * @param float $mtCreanceBaseHT The mt creance base h t.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtCreanceBaseHT($mtCreanceBaseHT) {
        $this->mtCreanceBaseHT = $mtCreanceBaseHT;
        return $this;
    }

    /**
     * Set the mt creance t t c deb exo.
     *
     * @param float $mtCreanceTTCDebExo The mt creance t t c deb exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtCreanceTTCDebExo($mtCreanceTTCDebExo) {
        $this->mtCreanceTTCDebExo = $mtCreanceTTCDebExo;
        return $this;
    }

    /**
     * Set the mt creance t t c dev dout exo.
     *
     * @param float $mtCreanceTTCDevDoutExo The mt creance t t c dev dout exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtCreanceTTCDevDoutExo($mtCreanceTTCDevDoutExo) {
        $this->mtCreanceTTCDevDoutExo = $mtCreanceTTCDevDoutExo;
        return $this;
    }

    /**
     * Set the mt creance t t c irrec exo.
     *
     * @param float $mtCreanceTTCIrrecExo The mt creance t t c irrec exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtCreanceTTCIrrecExo($mtCreanceTTCIrrecExo) {
        $this->mtCreanceTTCIrrecExo = $mtCreanceTTCIrrecExo;
        return $this;
    }

    /**
     * Set the mt creance t t c regl exo.
     *
     * @param float $mtCreanceTTCReglExo The mt creance t t c regl exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtCreanceTTCReglExo($mtCreanceTTCReglExo) {
        $this->mtCreanceTTCReglExo = $mtCreanceTTCReglExo;
        return $this;
    }

    /**
     * Set the mt provision deb exo.
     *
     * @param float $mtProvisionDebExo The mt provision deb exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtProvisionDebExo($mtProvisionDebExo) {
        $this->mtProvisionDebExo = $mtProvisionDebExo;
        return $this;
    }

    /**
     * Set the mt provision dot exo.
     *
     * @param float $mtProvisionDotExo The mt provision dot exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtProvisionDotExo($mtProvisionDotExo) {
        $this->mtProvisionDotExo = $mtProvisionDotExo;
        return $this;
    }

    /**
     * Set the mt rep provision irrec.
     *
     * @param float $mtRepProvisionIrrec The mt rep provision irrec.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtRepProvisionIrrec($mtRepProvisionIrrec) {
        $this->mtRepProvisionIrrec = $mtRepProvisionIrrec;
        return $this;
    }

    /**
     * Set the mt rep provision regl.
     *
     * @param float $mtRepProvisionRegl The mt rep provision regl.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setMtRepProvisionRegl($mtRepProvisionRegl) {
        $this->mtRepProvisionRegl = $mtRepProvisionRegl;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the observations.
     *
     * @param string $observations The observations.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setObservations($observations) {
        $this->observations = $observations;
        return $this;
    }

    /**
     * Set the ref image.
     *
     * @param string $refImage The ref image.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setRefImage($refImage) {
        $this->refImage = $refImage;
        return $this;
    }

    /**
     * Set the taux doute deb exo.
     *
     * @param float $tauxDouteDebExo The taux doute deb exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setTauxDouteDebExo($tauxDouteDebExo) {
        $this->tauxDouteDebExo = $tauxDouteDebExo;
        return $this;
    }

    /**
     * Set the taux doute exo.
     *
     * @param float $tauxDouteExo The taux doute exo.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setTauxDouteExo($tauxDouteExo) {
        $this->tauxDouteExo = $tauxDouteExo;
        return $this;
    }

    /**
     * Set the tx t v a creance.
     *
     * @param float $txTVACreance The tx t v a creance.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setTxTVACreance($txTVACreance) {
        $this->txTVACreance = $txTVACreance;
        return $this;
    }

    /**
     * Set the tx t v a creance force.
     *
     * @param bool $txTVACreanceForce The tx t v a creance force.
     * @return ClientsDouteux Returns this clients douteux.
     */
    public function setTxTVACreanceForce($txTVACreanceForce) {
        $this->txTVACreanceForce = $txTVACreanceForce;
        return $this;
    }
}
