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
 * Historique.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class Historique {

    /**
     * Annees.
     *
     * @var int
     */
    private $annees;

    /**
     * Annees plus.
     *
     * @var int
     */
    private $anneesPlus;

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Cs valide.
     *
     * @var DateTime|null
     */
    private $csValide;

    /**
     * Ct valide.
     *
     * @var DateTime|null
     */
    private $ctValide;

    /**
     * Rub.
     *
     * @var string
     */
    private $rub;

    /**
     * Service.
     *
     * @var string
     */
    private $service;

    /**
     * Visite medicale.
     *
     * @var DateTime|null
     */
    private $visiteMedicale;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the annees.
     *
     * @return int Returns the annees.
     */
    public function getAnnees() {
        return $this->annees;
    }

    /**
     * Get the annees plus.
     *
     * @return int Returns the annees plus.
     */
    public function getAnneesPlus() {
        return $this->anneesPlus;
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
     * Get the cs valide.
     *
     * @return DateTime|null Returns the cs valide.
     */
    public function getCsValide() {
        return $this->csValide;
    }

    /**
     * Get the ct valide.
     *
     * @return DateTime|null Returns the ct valide.
     */
    public function getCtValide() {
        return $this->ctValide;
    }

    /**
     * Get the rub.
     *
     * @return string Returns the rub.
     */
    public function getRub() {
        return $this->rub;
    }

    /**
     * Get the service.
     *
     * @return string Returns the service.
     */
    public function getService() {
        return $this->service;
    }

    /**
     * Get the visite medicale.
     *
     * @return DateTime|null Returns the visite medicale.
     */
    public function getVisiteMedicale() {
        return $this->visiteMedicale;
    }

    /**
     * Set the annees.
     *
     * @param int $annees The annees.
     */
    public function setAnnees($annees) {
        $this->annees = $annees;
        return $this;
    }

    /**
     * Set the annees plus.
     *
     * @param int $anneesPlus The annees plus.
     */
    public function setAnneesPlus($anneesPlus) {
        $this->anneesPlus = $anneesPlus;
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
     * Set the cs valide.
     *
     * @param DateTime|null $csValide The cs valide.
     */
    public function setCsValide(DateTime $csValide = null) {
        $this->csValide = $csValide;
        return $this;
    }

    /**
     * Set the ct valide.
     *
     * @param DateTime|null $ctValide The ct valide.
     */
    public function setCtValide(DateTime $ctValide = null) {
        $this->ctValide = $ctValide;
        return $this;
    }

    /**
     * Set the rub.
     *
     * @param string $rub The rub.
     */
    public function setRub($rub) {
        $this->rub = $rub;
        return $this;
    }

    /**
     * Set the service.
     *
     * @param string $service The service.
     */
    public function setService($service) {
        $this->service = $service;
        return $this;
    }

    /**
     * Set the visite medicale.
     *
     * @param DateTime|null $visiteMedicale The visite medicale.
     */
    public function setVisiteMedicale(DateTime $visiteMedicale = null) {
        $this->visiteMedicale = $visiteMedicale;
        return $this;
    }
}
