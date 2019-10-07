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
 * Cle repartition lignes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CleRepartitionLignes {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code centre.
     *
     * @var string
     */
    private $codeCentre;

    /**
     * Num ligne.
     *
     * @var int
     */
    private $numLigne;

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
     * Get the code.
     *
     * @return string Returns the code.
     */
    public function getCode() {
        return $this->code;
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
     * Get the num ligne.
     *
     * @return int Returns the num ligne.
     */
    public function getNumLigne() {
        return $this->numLigne;
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
     * Set the code.
     *
     * @param string $code The code.
     * @return CleRepartitionLignes Returns this cle repartition lignes.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code centre.
     *
     * @param string $codeCentre The code centre.
     * @return CleRepartitionLignes Returns this cle repartition lignes.
     */
    public function setCodeCentre($codeCentre) {
        $this->codeCentre = $codeCentre;
        return $this;
    }

    /**
     * Set the num ligne.
     *
     * @param int $numLigne The num ligne.
     * @return CleRepartitionLignes Returns this cle repartition lignes.
     */
    public function setNumLigne($numLigne) {
        $this->numLigne = $numLigne;
        return $this;
    }

    /**
     * Set the valeur.
     *
     * @param float $valeur The valeur.
     * @return CleRepartitionLignes Returns this cle repartition lignes.
     */
    public function setValeur($valeur) {
        $this->valeur = $valeur;
        return $this;
    }
}
