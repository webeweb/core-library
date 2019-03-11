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
 * H sup t e p a bul model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class HSupTEPABul {

    /**
     * Indice periode.
     *
     * @var int
     */
    private $indicePeriode;

    /**
     * Mt brut exo.
     *
     * @var float
     */
    private $mtBrutExo;

    /**
     * Mt brut exo abat.
     *
     * @var float
     */
    private $mtBrutExoAbat;

    /**
     * Nb j h exo.
     *
     * @var float
     */
    private $nbJHExo;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Periode.
     *
     * @var DateTime
     */
    private $periode;

    /**
     * Pourcent majo.
     *
     * @var float
     */
    private $pourcentMajo;

    /**
     * Type exo.
     *
     * @var string
     */
    private $typeExo;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the indice periode.
     *
     * @return int Returns the indice periode.
     */
    public function getIndicePeriode() {
        return $this->indicePeriode;
    }

    /**
     * Get the mt brut exo.
     *
     * @return float Returns the mt brut exo.
     */
    public function getMtBrutExo() {
        return $this->mtBrutExo;
    }

    /**
     * Get the mt brut exo abat.
     *
     * @return float Returns the mt brut exo abat.
     */
    public function getMtBrutExoAbat() {
        return $this->mtBrutExoAbat;
    }

    /**
     * Get the nb j h exo.
     *
     * @return float Returns the nb j h exo.
     */
    public function getNbJHExo() {
        return $this->nbJHExo;
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
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the periode.
     *
     * @return DateTime Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the pourcent majo.
     *
     * @return float Returns the pourcent majo.
     */
    public function getPourcentMajo() {
        return $this->pourcentMajo;
    }

    /**
     * Get the type exo.
     *
     * @return string Returns the type exo.
     */
    public function getTypeExo() {
        return $this->typeExo;
    }

    /**
     * Set the indice periode.
     *
     * @param int $indicePeriode The indice periode.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setIndicePeriode($indicePeriode) {
        $this->indicePeriode = $indicePeriode;
        return $this;
    }

    /**
     * Set the mt brut exo.
     *
     * @param float $mtBrutExo The mt brut exo.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setMtBrutExo($mtBrutExo) {
        $this->mtBrutExo = $mtBrutExo;
        return $this;
    }

    /**
     * Set the mt brut exo abat.
     *
     * @param float $mtBrutExoAbat The mt brut exo abat.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setMtBrutExoAbat($mtBrutExoAbat) {
        $this->mtBrutExoAbat = $mtBrutExoAbat;
        return $this;
    }

    /**
     * Set the nb j h exo.
     *
     * @param float $nbJHExo The nb j h exo.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setNbJHExo($nbJHExo) {
        $this->nbJHExo = $nbJHExo;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime $periode The periode.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the pourcent majo.
     *
     * @param float $pourcentMajo The pourcent majo.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setPourcentMajo($pourcentMajo) {
        $this->pourcentMajo = $pourcentMajo;
        return $this;
    }

    /**
     * Set the type exo.
     *
     * @param string $typeExo The type exo.
     * @return HSupTEPABul Returns this h sup t e p a bul.
     */
    public function setTypeExo($typeExo) {
        $this->typeExo = $typeExo;
        return $this;
    }
}
