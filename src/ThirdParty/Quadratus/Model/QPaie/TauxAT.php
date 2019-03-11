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
 * Taux a t model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxAT {

    /**
     * A partir de.
     *
     * @var DateTime
     */
    private $aPartirDe;

    /**
     * Bureau.
     *
     * @var string
     */
    private $bureau;

    /**
     * Code a t.
     *
     * @var int
     */
    private $codeAT;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Risque.
     *
     * @var string
     */
    private $risque;

    /**
     * Section.
     *
     * @var string
     */
    private $section;

    /**
     * Taux.
     *
     * @var float
     */
    private $taux;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the a partir de.
     *
     * @return DateTime Returns the a partir de.
     */
    public function getAPartirDe() {
        return $this->aPartirDe;
    }

    /**
     * Get the bureau.
     *
     * @return string Returns the bureau.
     */
    public function getBureau() {
        return $this->bureau;
    }

    /**
     * Get the code a t.
     *
     * @return int Returns the code a t.
     */
    public function getCodeAT() {
        return $this->codeAT;
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
     * Get the risque.
     *
     * @return string Returns the risque.
     */
    public function getRisque() {
        return $this->risque;
    }

    /**
     * Get the section.
     *
     * @return string Returns the section.
     */
    public function getSection() {
        return $this->section;
    }

    /**
     * Get the taux.
     *
     * @return float Returns the taux.
     */
    public function getTaux() {
        return $this->taux;
    }

    /**
     * Set the a partir de.
     *
     * @param DateTime $aPartirDe The a partir de.
     * @return TauxAT Returns this taux a t.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string $bureau The bureau.
     * @return TauxAT Returns this taux a t.
     */
    public function setBureau($bureau) {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the code a t.
     *
     * @param int $codeAT The code a t.
     * @return TauxAT Returns this taux a t.
     */
    public function setCodeAT($codeAT) {
        $this->codeAT = $codeAT;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return TauxAT Returns this taux a t.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the risque.
     *
     * @param string $risque The risque.
     * @return TauxAT Returns this taux a t.
     */
    public function setRisque($risque) {
        $this->risque = $risque;
        return $this;
    }

    /**
     * Set the section.
     *
     * @param string $section The section.
     * @return TauxAT Returns this taux a t.
     */
    public function setSection($section) {
        $this->section = $section;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     * @return TauxAT Returns this taux a t.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }
}
