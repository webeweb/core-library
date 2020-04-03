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
 * Qualifiant2.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Qualifiant2 {

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code liaison.
     *
     * @var string
     */
    private $codeLiaison;

    /**
     * Code libelle.
     *
     * @var string
     */
    private $codeLibelle;

    /**
     * Colonne.
     *
     * @var string
     */
    private $colonne;

    /**
     * Num lig.
     *
     * @var int
     */
    private $numLig;

    /**
     * Objet ref.
     *
     * @var string
     */
    private $objetRef;

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
     * Get the code liaison.
     *
     * @return string Returns the code liaison.
     */
    public function getCodeLiaison() {
        return $this->codeLiaison;
    }

    /**
     * Get the code libelle.
     *
     * @return string Returns the code libelle.
     */
    public function getCodeLibelle() {
        return $this->codeLibelle;
    }

    /**
     * Get the colonne.
     *
     * @return string Returns the colonne.
     */
    public function getColonne() {
        return $this->colonne;
    }

    /**
     * Get the num lig.
     *
     * @return int Returns the num lig.
     */
    public function getNumLig() {
        return $this->numLig;
    }

    /**
     * Get the objet ref.
     *
     * @return string Returns the objet ref.
     */
    public function getObjetRef() {
        return $this->objetRef;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code liaison.
     *
     * @param string $codeLiaison The code liaison.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setCodeLiaison($codeLiaison) {
        $this->codeLiaison = $codeLiaison;
        return $this;
    }

    /**
     * Set the code libelle.
     *
     * @param string $codeLibelle The code libelle.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setCodeLibelle($codeLibelle) {
        $this->codeLibelle = $codeLibelle;
        return $this;
    }

    /**
     * Set the colonne.
     *
     * @param string $colonne The colonne.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setColonne($colonne) {
        $this->colonne = $colonne;
        return $this;
    }

    /**
     * Set the num lig.
     *
     * @param int $numLig The num lig.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setNumLig($numLig) {
        $this->numLig = $numLig;
        return $this;
    }

    /**
     * Set the objet ref.
     *
     * @param string $objetRef The objet ref.
     * @return Qualifiant2 Returns this Qualifiant2.
     */
    public function setObjetRef($objetRef) {
        $this->objetRef = $objetRef;
        return $this;
    }
}
