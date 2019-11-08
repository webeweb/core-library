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

/**
 * Dadsu etablissements rectif.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class DadsuEtablissementsRectif {

    /**
     * Actif.
     *
     * @var bool
     */
    private $actif;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Forma pro base.
     *
     * @var float
     */
    private $formaProBase;

    /**
     * Forma pro base cdd.
     *
     * @var float
     */
    private $formaProBaseCdd;

    /**
     * Indice rectif.
     *
     * @var int
     */
    private $indiceRectif;

    /**
     * Taxe apprentissage base.
     *
     * @var float
     */
    private $taxeApprentissageBase;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the actif.
     *
     * @return bool Returns the actif.
     */
    public function getActif() {
        return $this->actif;
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
     * Get the forma pro base.
     *
     * @return float Returns the forma pro base.
     */
    public function getFormaProBase() {
        return $this->formaProBase;
    }

    /**
     * Get the forma pro base cdd.
     *
     * @return float Returns the forma pro base cdd.
     */
    public function getFormaProBaseCdd() {
        return $this->formaProBaseCdd;
    }

    /**
     * Get the indice rectif.
     *
     * @return int Returns the indice rectif.
     */
    public function getIndiceRectif() {
        return $this->indiceRectif;
    }

    /**
     * Get the taxe apprentissage base.
     *
     * @return float Returns the taxe apprentissage base.
     */
    public function getTaxeApprentissageBase() {
        return $this->taxeApprentissageBase;
    }

    /**
     * Set the actif.
     *
     * @param bool $actif The actif.
     */
    public function setActif($actif) {
        $this->actif = $actif;
        return $this;
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
     * Set the forma pro base.
     *
     * @param float $formaProBase The forma pro base.
     */
    public function setFormaProBase($formaProBase) {
        $this->formaProBase = $formaProBase;
        return $this;
    }

    /**
     * Set the forma pro base cdd.
     *
     * @param float $formaProBaseCdd The forma pro base cdd.
     */
    public function setFormaProBaseCdd($formaProBaseCdd) {
        $this->formaProBaseCdd = $formaProBaseCdd;
        return $this;
    }

    /**
     * Set the indice rectif.
     *
     * @param int $indiceRectif The indice rectif.
     */
    public function setIndiceRectif($indiceRectif) {
        $this->indiceRectif = $indiceRectif;
        return $this;
    }

    /**
     * Set the taxe apprentissage base.
     *
     * @param float $taxeApprentissageBase The taxe apprentissage base.
     */
    public function setTaxeApprentissageBase($taxeApprentissageBase) {
        $this->taxeApprentissageBase = $taxeApprentissageBase;
        return $this;
    }
}
