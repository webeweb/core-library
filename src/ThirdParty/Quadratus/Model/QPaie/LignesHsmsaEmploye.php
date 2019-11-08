<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie;

use DateTime;

/**
 * Lignes hsmsa employe.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class LignesHsmsaEmploye {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code unite.
     *
     * @var string
     */
    private $codeUnite;

    /**
     * Mt hs.
     *
     * @var int
     */
    private $mtHs;

    /**
     * Nb hs.
     *
     * @var float
     */
    private $nbHs;

    /**
     * Num ligne.
     *
     * @var string
     */
    private $numLigne;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Numero employe2.
     *
     * @var string
     */
    private $numeroEmploye2;

    /**
     * Per deb.
     *
     * @var DateTime|null
     */
    private $perDeb;

    /**
     * Periode decla.
     *
     * @var DateTime|null
     */
    private $periodeDecla;

    /**
     * Taux hs.
     *
     * @var int
     */
    private $tauxHs;

    /**
     * Type remun hs.
     *
     * @var string
     */
    private $typeRemunHs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code etablissement.
     *
     * @return int Returns the code etablissement.
     */
    public function getCodeEtablissement() {
        return $this->codeEtablissement;
    }

    /**
     * Get the code unite.
     *
     * @return string Returns the code unite.
     */
    public function getCodeUnite() {
        return $this->codeUnite;
    }

    /**
     * Get the mt hs.
     *
     * @return int Returns the mt hs.
     */
    public function getMtHs() {
        return $this->mtHs;
    }

    /**
     * Get the nb hs.
     *
     * @return float Returns the nb hs.
     */
    public function getNbHs() {
        return $this->nbHs;
    }

    /**
     * Get the num ligne.
     *
     * @return string Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the numero employe2.
     *
     * @return string Returns the numero employe2.
     */
    public function getNumeroEmploye2() {
        return $this->numeroEmploye2;
    }

    /**
     * Get the per deb.
     *
     * @return DateTime|null Returns the per deb.
     */
    public function getPerDeb() {
        return $this->perDeb;
    }

    /**
     * Get the periode decla.
     *
     * @return DateTime|null Returns the periode decla.
     */
    public function getPeriodeDecla() {
        return $this->periodeDecla;
    }

    /**
     * Get the taux hs.
     *
     * @return int Returns the taux hs.
     */
    public function getTauxHs() {
        return $this->tauxHs;
    }

    /**
     * Get the type remun hs.
     *
     * @return string Returns the type remun hs.
     */
    public function getTypeRemunHs() {
        return $this->typeRemunHs;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code unite.
     *
     * @param string $codeUnite The code unite.
     */
    public function setCodeUnite($codeUnite) {
        $this->codeUnite = $codeUnite;
        return $this;
    }

    /**
     * Set the mt hs.
     *
     * @param int $mtHs The mt hs.
     */
    public function setMtHs($mtHs) {
        $this->mtHs = $mtHs;
        return $this;
    }

    /**
     * Set the nb hs.
     *
     * @param float $nbHs The nb hs.
     */
    public function setNbHs($nbHs) {
        $this->nbHs = $nbHs;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param string $numLigne The num ligne.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the numero employe2.
     *
     * @param string $numeroEmploye2 The numero employe2.
     */
    public function setNumeroEmploye2($numeroEmploye2) {
        $this->numeroEmploye2 = $numeroEmploye2;
        return $this;
    }

    /**
     * Set the per deb.
     *
     * @param DateTime|null $perDeb The per deb.
     */
    public function setPerDeb(DateTime $perDeb = null) {
        $this->perDeb = $perDeb;
        return $this;
    }

    /**
     * Set the periode decla.
     *
     * @param DateTime|null $periodeDecla The periode decla.
     */
    public function setPeriodeDecla(DateTime $periodeDecla = null) {
        $this->periodeDecla = $periodeDecla;
        return $this;
    }

    /**
     * Set the taux hs.
     *
     * @param int $tauxHs The taux hs.
     */
    public function setTauxHs($tauxHs) {
        $this->tauxHs = $tauxHs;
        return $this;
    }

    /**
     * Set the type remun hs.
     *
     * @param string $typeRemunHs The type remun hs.
     */
    public function setTypeRemunHs($typeRemunHs) {
        $this->typeRemunHs = $typeRemunHs;
        return $this;
    }
}
