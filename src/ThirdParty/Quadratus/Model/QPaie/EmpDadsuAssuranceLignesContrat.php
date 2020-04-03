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

/**
 * Emp dadsu assurance lignes contrat.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuAssuranceLignesContrat {

    /**
     * Code etablissement.
     *
     * @var int
     */
    private $codeEtablissement;

    /**
     * Code organisme.
     *
     * @var string
     */
    private $codeOrganisme;

    /**
     * Nb enfants.
     *
     * @var string
     */
    private $nbEnfants;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Ref contrat.
     *
     * @var string
     */
    private $refContrat;

    /**
     * Unite gestion.
     *
     * @var string
     */
    private $uniteGestion;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code organisme.
     *
     * @return string Returns the code organisme.
     */
    public function getCodeOrganisme() {
        return $this->codeOrganisme;
    }

    /**
     * Get the nb enfants.
     *
     * @return string Returns the nb enfants.
     */
    public function getNbEnfants() {
        return $this->nbEnfants;
    }

    /**
     * Get the numero employe.
     *
     * @return string Returns the numero employe.
     */
    public function getNumeroEmploye() {
        return $this->numeroEmploye;
    }

    /**
     * Get the ref contrat.
     *
     * @return string Returns the ref contrat.
     */
    public function getRefContrat() {
        return $this->refContrat;
    }

    /**
     * Get the unite gestion.
     *
     * @return string Returns the unite gestion.
     */
    public function getUniteGestion() {
        return $this->uniteGestion;
    }

    /**
     * Set the code etablissement.
     *
     * @param int $codeEtablissement The code etablissement.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setCodeEtablissement($codeEtablissement) {
        $this->codeEtablissement = $codeEtablissement;
        return $this;
    }

    /**
     * Set the code organisme.
     *
     * @param string $codeOrganisme The code organisme.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setCodeOrganisme($codeOrganisme) {
        $this->codeOrganisme = $codeOrganisme;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string $nbEnfants The nb enfants.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setNbEnfants($nbEnfants) {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }

    /**
     * Set the unite gestion.
     *
     * @param string $uniteGestion The unite gestion.
     * @return EmpDadsuAssuranceLignesContrat Returns this Emp dadsu assurance lignes contrat.
     */
    public function setUniteGestion($uniteGestion) {
        $this->uniteGestion = $uniteGestion;
        return $this;
    }
}
