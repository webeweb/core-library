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

/**
 * Phases model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Phases {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code regroupement.
     *
     * @var string
     */
    private $codeRegroupement;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Num ordre.
     *
     * @var int
     */
    private $numOrdre;

    /**
     * Saisie fact.
     *
     * @var bool
     */
    private $saisieFact;

    /**
     * Saisie temps.
     *
     * @var bool
     */
    private $saisieTemps;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
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
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
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
     * Get the saisie fact.
     *
     * @return bool Returns the saisie fact.
     */
    public function getSaisieFact() {
        return $this->saisieFact;
    }

    /**
     * Get the saisie temps.
     *
     * @return bool Returns the saisie temps.
     */
    public function getSaisieTemps() {
        return $this->saisieTemps;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Phases Returns this phases.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code regroupement.
     *
     * @param string $codeRegroupement The code regroupement.
     * @return Phases Returns this phases.
     */
    public function setCodeRegroupement($codeRegroupement) {
        $this->codeRegroupement = $codeRegroupement;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return Phases Returns this phases.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int $numOrdre The num ordre.
     * @return Phases Returns this phases.
     */
    public function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
        return $this;
    }

    /**
     * Set the saisie fact.
     *
     * @param bool $saisieFact The saisie fact.
     * @return Phases Returns this phases.
     */
    public function setSaisieFact($saisieFact) {
        $this->saisieFact = $saisieFact;
        return $this;
    }

    /**
     * Set the saisie temps.
     *
     * @param bool $saisieTemps The saisie temps.
     * @return Phases Returns this phases.
     */
    public function setSaisieTemps($saisieTemps) {
        $this->saisieTemps = $saisieTemps;
        return $this;
    }
}
