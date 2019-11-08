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
 * Emp dadsu prevoyance.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EmpDadsuPrevoyance {

    /**
     * Code affil secu.
     *
     * @var string
     */
    private $codeAffilSecu;

    /**
     * Date ancien branche.
     *
     * @var DateTime|null
     */
    private $dateAncienBranche;

    /**
     * Date ancien college.
     *
     * @var DateTime|null
     */
    private $dateAncienCollege;

    /**
     * Date ancien poste.
     *
     * @var DateTime|null
     */
    private $dateAncienPoste;

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
     * Prem date entree.
     *
     * @var DateTime|null
     */
    private $premDateEntree;

    /**
     * Rang naissance.
     *
     * @var string
     */
    private $rangNaissance;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code affil secu.
     *
     * @return string Returns the code affil secu.
     */
    public function getCodeAffilSecu() {
        return $this->codeAffilSecu;
    }

    /**
     * Get the date ancien branche.
     *
     * @return DateTime|null Returns the date ancien branche.
     */
    public function getDateAncienBranche() {
        return $this->dateAncienBranche;
    }

    /**
     * Get the date ancien college.
     *
     * @return DateTime|null Returns the date ancien college.
     */
    public function getDateAncienCollege() {
        return $this->dateAncienCollege;
    }

    /**
     * Get the date ancien poste.
     *
     * @return DateTime|null Returns the date ancien poste.
     */
    public function getDateAncienPoste() {
        return $this->dateAncienPoste;
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
     * Get the prem date entree.
     *
     * @return DateTime|null Returns the prem date entree.
     */
    public function getPremDateEntree() {
        return $this->premDateEntree;
    }

    /**
     * Get the rang naissance.
     *
     * @return string Returns the rang naissance.
     */
    public function getRangNaissance() {
        return $this->rangNaissance;
    }

    /**
     * Set the code affil secu.
     *
     * @param string $codeAffilSecu The code affil secu.
     */
    public function setCodeAffilSecu($codeAffilSecu) {
        $this->codeAffilSecu = $codeAffilSecu;
        return $this;
    }

    /**
     * Set the date ancien branche.
     *
     * @param DateTime|null $dateAncienBranche The date ancien branche.
     */
    public function setDateAncienBranche(DateTime $dateAncienBranche = null) {
        $this->dateAncienBranche = $dateAncienBranche;
        return $this;
    }

    /**
     * Set the date ancien college.
     *
     * @param DateTime|null $dateAncienCollege The date ancien college.
     */
    public function setDateAncienCollege(DateTime $dateAncienCollege = null) {
        $this->dateAncienCollege = $dateAncienCollege;
        return $this;
    }

    /**
     * Set the date ancien poste.
     *
     * @param DateTime|null $dateAncienPoste The date ancien poste.
     */
    public function setDateAncienPoste(DateTime $dateAncienPoste = null) {
        $this->dateAncienPoste = $dateAncienPoste;
        return $this;
    }

    /**
     * Set the nb enfants.
     *
     * @param string $nbEnfants The nb enfants.
     */
    public function setNbEnfants($nbEnfants) {
        $this->nbEnfants = $nbEnfants;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the prem date entree.
     *
     * @param DateTime|null $premDateEntree The prem date entree.
     */
    public function setPremDateEntree(DateTime $premDateEntree = null) {
        $this->premDateEntree = $premDateEntree;
        return $this;
    }

    /**
     * Set the rang naissance.
     *
     * @param string $rangNaissance The rang naissance.
     */
    public function setRangNaissance($rangNaissance) {
        $this->rangNaissance = $rangNaissance;
        return $this;
    }
}
