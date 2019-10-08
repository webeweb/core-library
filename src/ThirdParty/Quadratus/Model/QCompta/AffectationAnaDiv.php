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
 * Affectation ana div model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class AffectationAnaDiv {

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
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Numero deux.
     *
     * @var int
     */
    private $numeroDeux;

    /**
     * Pourcentage.
     *
     * @var float
     */
    private $pourcentage;

    /**
     * Type.
     *
     * @var string
     */
    private $type;

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
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Get the numero deux.
     *
     * @return int Returns the numero deux.
     */
    public function getNumeroDeux() {
        return $this->numeroDeux;
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
     * Get the type.
     *
     * @return string Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the code nature.
     *
     * @param string $codeNature The code nature.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setCodeNature($codeNature) {
        $this->codeNature = $codeNature;
        return $this;
    }

    /**
     * Set the num compte.
     *
     * @param string $numCompte The num compte.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setNumCompte($numCompte) {
        $this->numCompte = $numCompte;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int $numeroDeux The numero deux.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setNumeroDeux($numeroDeux) {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the pourcentage.
     *
     * @param float $pourcentage The pourcentage.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setPourcentage($pourcentage) {
        $this->pourcentage = $pourcentage;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param string $type The type.
     * @return AffectationAnaDiv Returns this affectation ana div.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
