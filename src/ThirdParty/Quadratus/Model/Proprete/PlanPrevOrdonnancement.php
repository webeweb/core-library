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
 * Plan prev ordonnancement.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class PlanPrevOrdonnancement {

    /**
     * Code affaire.
     *
     * @var string
     */
    private $codeAffaire;

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
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Code tache.
     *
     * @var string
     */
    private $codeTache;

    /**
     * Date.
     *
     * @var DateTime|null
     */
    private $date;

    /**
     * Descriptif.
     *
     * @var string
     */
    private $descriptif;

    /**
     * Discr tache.
     *
     * @var int
     */
    private $discrTache;

    /**
     * Num bt.
     *
     * @var int
     */
    private $numBt;

    /**
     * Num ordre.
     *
     * @var int
     */
    private $numOrdre;

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
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the code tache.
     *
     * @return string Returns the code tache.
     */
    public function getCodeTache() {
        return $this->codeTache;
    }

    /**
     * Get the date.
     *
     * @return DateTime|null Returns the date.
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Get the descriptif.
     *
     * @return string Returns the descriptif.
     */
    public function getDescriptif() {
        return $this->descriptif;
    }

    /**
     * Get the discr tache.
     *
     * @return int Returns the discr tache.
     */
    public function getDiscrTache() {
        return $this->discrTache;
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
     * Get the num ordre.
     *
     * @return int Returns the num ordre.
     */
    public function getNumOrdre() {
        return $this->numOrdre;
    }

    /**
     * Set the code affaire.
     *
     * @param string $codeAffaire The code affaire.
     */
    public function setCodeAffaire($codeAffaire) {
        $this->codeAffaire = $codeAffaire;
        return $this;
    }

    /**
     * Set the code chantier.
     *
     * @param string $codeChantier The code chantier.
     */
    public function setCodeChantier($codeChantier) {
        $this->codeChantier = $codeChantier;
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
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the code tache.
     *
     * @param string $codeTache The code tache.
     */
    public function setCodeTache($codeTache) {
        $this->codeTache = $codeTache;
        return $this;
    }

    /**
     * Set the date.
     *
     * @param DateTime|null $date The date.
     */
    public function setDate(DateTime $date = null) {
        $this->date = $date;
        return $this;
    }

    /**
     * Set the descriptif.
     *
     * @param string $descriptif The descriptif.
     */
    public function setDescriptif($descriptif) {
        $this->descriptif = $descriptif;
        return $this;
    }

    /**
     * Set the discr tache.
     *
     * @param int $discrTache The discr tache.
     */
    public function setDiscrTache($discrTache) {
        $this->discrTache = $discrTache;
        return $this;
    }

    /**
     * Set the num bt.
     *
     * @param int $numBt The num bt.
     */
    public function setNumBt($numBt) {
        $this->numBt = $numBt;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int $numOrdre The num ordre.
     */
    public function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
        return $this;
    }
}
