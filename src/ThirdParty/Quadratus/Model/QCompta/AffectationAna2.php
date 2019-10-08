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

/**
 * Affectation ana2 model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class AffectationAna2 {

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Code nature.
     *
     * @var string
     */
    private $codeNature;

    /**
     * Num compte.
     *
     * @var string
     */
    private $numCompte;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

    /**
     * Pourcentage.
     *
     * @var float
     */
    private $pourcentage;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code centre.
     *
     * @return string Returns the code centre.
     */
    public function getCodeCentre() {
        return $this->codeCentre;
    }

    /**
     * Get the code nature.
     *
     * @return string Returns the code nature.
     */
    public function getCodeNature() {
        return $this->codeNature;
    }

    /**
     * Get the num compte.
     *
     * @return string Returns the num compte.
     */
    public function getNumCompte() {
        return $this->numCompte;
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
     * Get the pourcentage.
     *
     * @return float Returns the pourcentage.
     */
    public function getPourcentage() {
        return $this->pourcentage;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return AffectationAna2 Returns this affectation ana2.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return AffectationAna2 Returns this affectation ana2.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string $numCompte The num compte.
     * @return AffectationAna2 Returns this affectation ana2.
     */
    public function setNumCompte($numCompte) {
        $this->numCompte = $numCompte;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return AffectationAna2 Returns this affectation ana2.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float $pourcentage The pourcentage.
     * @return AffectationAna2 Returns this affectation ana2.
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
        return $this;
    }
}
