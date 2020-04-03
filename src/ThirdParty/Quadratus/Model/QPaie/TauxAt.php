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
 * Taux at.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class TauxAt {

    /**
     * A partir de.
     *
     * @var DateTime|null
     */
    private $aPartirDe;

    /**
     * Bureau.
     *
     * @var string
     */
    private $bureau;

    /**
     * Code at.
     *
     * @var int
     */
    private $codeAt;

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
     * @return DateTime|null Returns the a partir de.
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
     * Get the code at.
     *
     * @return int Returns the code at.
     */
    public function getCodeAt() {
        return $this->codeAt;
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
     * @param DateTime|null $aPartirDe The a partir de.
     * @return TauxAt Returns this Taux at.
     */
    public function setAPartirDe(DateTime $aPartirDe = null) {
        $this->aPartirDe = $aPartirDe;
        return $this;
    }

    /**
     * Set the bureau.
     *
     * @param string $bureau The bureau.
     * @return TauxAt Returns this Taux at.
     */
    public function setBureau($bureau) {
        $this->bureau = $bureau;
        return $this;
    }

    /**
     * Set the code at.
     *
     * @param int $codeAt The code at.
     * @return TauxAt Returns this Taux at.
     */
    public function setCodeAt($codeAt) {
        $this->codeAt = $codeAt;
        return $this;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return TauxAt Returns this Taux at.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the risque.
     *
     * @param string $risque The risque.
     * @return TauxAt Returns this Taux at.
     */
    public function setRisque($risque) {
        $this->risque = $risque;
        return $this;
    }

    /**
     * Set the section.
     *
     * @param string $section The section.
     * @return TauxAt Returns this Taux at.
     */
    public function setSection($section) {
        $this->section = $section;
        return $this;
    }

    /**
     * Set the taux.
     *
     * @param float $taux The taux.
     * @return TauxAt Returns this Taux at.
     */
    public function setTaux($taux) {
        $this->taux = $taux;
        return $this;
    }
}
