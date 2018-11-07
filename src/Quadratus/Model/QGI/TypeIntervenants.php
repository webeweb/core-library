<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

/**
 * Type intervenants model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class TypeIntervenants {

    /**
     * Acces libre.
     *
     * @var boolean
     */
    private $accesLibre;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Increment auto.
     *
     * @var boolean
     */
    private $incrementAuto;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Prefixe.
     *
     * @var string
     */
    private $prefixe;

    /**
     * Prochain numero.
     *
     * @var int
     */
    private $prochainNumero;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the acces libre.
     *
     * @return boolean Returns the acces libre.
     */
    public function getAccesLibre() {
        return $this->accesLibre;
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
     * Get the increment auto.
     *
     * @return boolean Returns the increment auto.
     */
    public function getIncrementAuto() {
        return $this->incrementAuto;
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
     * Get the prefixe.
     *
     * @return string Returns the prefixe.
     */
    public function getPrefixe() {
        return $this->prefixe;
    }

    /**
     * Get the prochain numero.
     *
     * @return int Returns the prochain numero.
     */
    public function getProchainNumero() {
        return $this->prochainNumero;
    }

    /**
     * Set the acces libre.
     *
     * @param boolean $accesLibre The acces libre.
     * @return TypeIntervenants Returns this type intervenants.
     */
    public function setAccesLibre($accesLibre) {
        $this->accesLibre = $accesLibre;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return TypeIntervenants Returns this type intervenants.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the increment auto.
     *
     * @param boolean $incrementAuto The increment auto.
     * @return TypeIntervenants Returns this type intervenants.
     */
    public function setIncrementAuto($incrementAuto) {
        $this->incrementAuto = $incrementAuto;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return TypeIntervenants Returns this type intervenants.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the prefixe.
     *
     * @param string $prefixe The prefixe.
     * @return TypeIntervenants Returns this type intervenants.
     */
    public function setPrefixe($prefixe) {
        $this->prefixe = $prefixe;
        return $this;
    }

    /**
     * Set the prochain numero.
     *
     * @param int $prochainNumero The prochain numero.
     * @return TypeIntervenants Returns this type intervenants.
     */
    public function setProchainNumero($prochainNumero) {
        $this->prochainNumero = $prochainNumero;
        return $this;
    }

}
