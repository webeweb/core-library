<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Regul tva.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class RegulTva {

    /**
     * Code tva.
     *
     * @var string
     */
    private $codeTva;

    /**
     * Ht.
     *
     * @var float
     */
    private $ht;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Ligne.
     *
     * @var int
     */
    private $ligne;

    /**
     * Periode.
     *
     * @var DateTime|null
     */
    private $periode;

    /**
     * Ttc.
     *
     * @var float
     */
    private $ttc;

    /**
     * Tva.
     *
     * @var float
     */
    private $tva;

    /**
     * Type.
     *
     * @var int
     */
    private $type;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code tva.
     *
     * @return string Returns the code tva.
     */
    public function getCodeTva() {
        return $this->codeTva;
    }

    /**
     * Get the ht.
     *
     * @return float Returns the ht.
     */
    public function getHt() {
        return $this->ht;
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
     * Get the ligne.
     *
     * @return int Returns the ligne.
     */
    public function getLigne() {
        return $this->ligne;
    }

    /**
     * Get the periode.
     *
     * @return DateTime|null Returns the periode.
     */
    public function getPeriode() {
        return $this->periode;
    }

    /**
     * Get the ttc.
     *
     * @return float Returns the ttc.
     */
    public function getTtc() {
        return $this->ttc;
    }

    /**
     * Get the tva.
     *
     * @return float Returns the tva.
     */
    public function getTva() {
        return $this->tva;
    }

    /**
     * Get the type.
     *
     * @return int Returns the type.
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set the code tva.
     *
     * @param string $codeTva The code tva.
     */
    public function setCodeTva($codeTva) {
        $this->codeTva = $codeTva;
        return $this;
    }

    /**
     * Set the ht.
     *
     * @param float $ht The ht.
     */
    public function setHt($ht) {
        $this->ht = $ht;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the ligne.
     *
     * @param int $ligne The ligne.
     */
    public function setLigne($ligne) {
        $this->ligne = $ligne;
        return $this;
    }

    /**
     * Set the periode.
     *
     * @param DateTime|null $periode The periode.
     */
    public function setPeriode(DateTime $periode = null) {
        $this->periode = $periode;
        return $this;
    }

    /**
     * Set the ttc.
     *
     * @param float $ttc The ttc.
     */
    public function setTtc($ttc) {
        $this->ttc = $ttc;
        return $this;
    }

    /**
     * Set the tva.
     *
     * @param float $tva The tva.
     */
    public function setTva($tva) {
        $this->tva = $tva;
        return $this;
    }

    /**
     * Set the type.
     *
     * @param int $type The type.
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}
