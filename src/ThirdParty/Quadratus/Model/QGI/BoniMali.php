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
 * Boni mali model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class BoniMali {

    /**
     * B m calcule.
     *
     * @var bool
     */
    private $bMCalcule;

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
     * Date b m.
     *
     * @var DateTime
     */
    private $dateBM;

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
     * Numero b m.
     *
     * @var string
     */
    private $numeroBM;

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
     * Get the b m calcule.
     *
     * @return bool Returns the b m calcule.
     */
    public function getBMCalcule() {
        return $this->bMCalcule;
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
     * Get the date b m.
     *
     * @return DateTime Returns the date b m.
     */
    public function getDateBM() {
        return $this->dateBM;
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
     * Get the numero b m.
     *
     * @return string Returns the numero b m.
     */
    public function getNumeroBM() {
        return $this->numeroBM;
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
     * Set the b m calcule.
     *
     * @param bool $bMCalcule The b m calcule.
     * @return BoniMali Returns this boni mali.
     */
    public function setBMCalcule($bMCalcule) {
        $this->bMCalcule = $bMCalcule;
        return $this;
    }

    /**
     * Set the bonus.
     *
     * @param float $bonus The bonus.
     * @return BoniMali Returns this boni mali.
     */
    public function setBonus($bonus) {
        $this->bonus = $bonus;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return BoniMali Returns this boni mali.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return BoniMali Returns this boni mali.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code mission.
     *
     * @param string $codeMission The code mission.
     * @return BoniMali Returns this boni mali.
     */
    public function setCodeMission($codeMission) {
        $this->codeMission = $codeMission;
        return $this;
    }

    /**
     * Set the date b m.
     *
     * @param DateTime $dateBM The date b m.
     * @return BoniMali Returns this boni mali.
     */
    public function setDateBM(DateTime $dateBM = null) {
        $this->dateBM = $dateBM;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return BoniMali Returns this boni mali.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the malus.
     *
     * @param float $malus The malus.
     * @return BoniMali Returns this boni mali.
     */
    public function setMalus($malus) {
        $this->malus = $malus;
        return $this;
    }

    /**
     * Set the monnaie.
     *
     * @param string $monnaie The monnaie.
     * @return BoniMali Returns this boni mali.
     */
    public function setMonnaie($monnaie) {
        $this->monnaie = $monnaie;
        return $this;
    }

    /**
     * Set the numero b m.
     *
     * @param string $numeroBM The numero b m.
     * @return BoniMali Returns this boni mali.
     */
    public function setNumeroBM($numeroBM) {
        $this->numeroBM = $numeroBM;
        return $this;
    }

    /**
     * Set the numero ligne.
     *
     * @param int $numeroLigne The numero ligne.
     * @return BoniMali Returns this boni mali.
     */
    public function setNumeroLigne($numeroLigne) {
        $this->numeroLigne = $numeroLigne;
        return $this;
    }
}
