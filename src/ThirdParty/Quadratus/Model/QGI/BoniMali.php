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
 * Boni mali.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class BoniMali {

    /**
     * Bm calcule.
     *
     * @var bool
     */
    private $bmCalcule;

    /**
     * Bonus.
     *
     * @var float
     */
    private $bonus;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code mission.
     *
     * @var string
     */
    private $codeMission;

    /**
     * Date bm.
     *
     * @var DateTime|null
     */
    private $dateBm;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Malus.
     *
     * @var float
     */
    private $malus;

    /**
     * Monnaie.
     *
     * @var string
     */
    private $monnaie;

    /**
     * Numero bm.
     *
     * @var string
     */
    private $numeroBm;

    /**
     * Numero ligne.
     *
     * @var int
     */
    private $numeroLigne;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the bm calcule.
     *
     * @return bool Returns the bm calcule.
     */
    public function getBmCalcule() {
        return $this->bmCalcule;
    }

    /**
     * Get the bonus.
     *
     * @return float Returns the bonus.
     */
    public function getBonus() {
        return $this->bonus;
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
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code mission.
     *
     * @return string Returns the code mission.
     */
    public function getCodeMission() {
        return $this->codeMission;
    }

    /**
     * Get the date bm.
     *
     * @return DateTime|null Returns the date bm.
     */
    public function getDateBm() {
        return $this->dateBm;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the malus.
     *
     * @return float Returns the malus.
     */
    public function getMalus() {
        return $this->malus;
    }

    /**
     * Get the monnaie.
     *
     * @return string Returns the monnaie.
     */
    public function getMonnaie() {
        return $this->monnaie;
    }

    /**
     * Get the numero bm.
     *
     * @return string Returns the numero bm.
     */
    public function getNumeroBm() {
        return $this->numeroBm;
    }

    /**
     * Get the numero ligne.
     *
     * @return int Returns the numero ligne.
     */
    public function getNumeroLigne() {
        return $this->numeroLigne;
    }

    /**
     * Set the bm calcule.
     *
     * @param bool $bmCalcule The bm calcule.
     * @return BoniMali Returns this Boni mali.
     */
    public function setBmCalcule($bmCalcule) {
        $this->bmCalcule = $bmCalcule;
        return $this;
    }

    /**
     * Set the bonus.
     *
     * @param float $bonus The bonus.
     * @return BoniMali Returns this Boni mali.
     */
    public function setBonus($bonus) {
        $this->bonus = $bonus;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return BoniMali Returns this Boni mali.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return BoniMali Returns this Boni mali.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return BoniMali Returns this Boni mali.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the date bm.
     *
     * @param DateTime|null $dateBm The date bm.
     * @return BoniMali Returns this Boni mali.
     */
    public function setDateBm(DateTime $dateBm = null) {
        $this->dateBm = $dateBm;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return BoniMali Returns this Boni mali.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the malus.
     *
     * @param float $malus The malus.
     * @return BoniMali Returns this Boni mali.
     */
    public function setMalus($malus) {
        $this->malus = $malus;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     * @return BoniMali Returns this Boni mali.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the numero bm.
     *
     * @param string $numeroBm The numero bm.
     * @return BoniMali Returns this Boni mali.
     */
    public function setNumeroBm($numeroBm) {
        $this->numeroBm = $numeroBm;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return BoniMali Returns this Boni mali.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }
}
