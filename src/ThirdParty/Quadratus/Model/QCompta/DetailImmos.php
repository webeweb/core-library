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
 * Detail immos model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class DetailImmos {

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

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
     * Numero compte.
     *
     * @var string
     */
    private $numeroCompte;

    /**
     * Numero deux.
     *
     * @var int
     */
    private $numeroDeux;

    /**
     * Quantite.
     *
     * @var float
     */
    private $quantite;

    /**
     * Valeur.
     *
     * @var float
     */
    private $valeur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
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
     * Get the numero compte.
     *
     * @return string Returns the numero compte.
     */
    public function getNumeroCompte() {
        return $this->numeroCompte;
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
     * Get the quantite.
     *
     * @return float Returns the quantite.
     */
    public function getQuantite() {
        return $this->quantite;
    }

    /**
     * Get the valeur.
     *
     * @return float Returns the valeur.
     */
    public function getValeur() {
        return $this->valeur;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return DetailImmos Returns this detail immos.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return DetailImmos Returns this detail immos.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return DetailImmos Returns this detail immos.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Set the numero compte.
     *
     * @param string $numeroCompte The numero compte.
     * @return DetailImmos Returns this detail immos.
     */
    public function setNumeroCompte($numeroCompte) {
        $this->numeroCompte = $numeroCompte;
        return $this;
    }

    /**
     * Set the numero deux.
     *
     * @param int $numeroDeux The numero deux.
     * @return DetailImmos Returns this detail immos.
     */
    public function setNumeroDeux($numeroDeux) {
        $this->numeroDeux = $numeroDeux;
        return $this;
    }

    /**
     * Set the quantite.
     *
     * @param float $quantite The quantite.
     * @return DetailImmos Returns this detail immos.
     */
    public function setQuantite($quantite) {
        $this->quantite = $quantite;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float $valeur The valeur.
     * @return DetailImmos Returns this detail immos.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }
}
