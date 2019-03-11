<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

use DateTime;

/**
 * Employes pointages model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class EmployesPointages {

    /**
     * Code collabo valid.
     *
     * @var string
     */
    private $codeCollaboValid;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code employe.
     *
     * @var string
     */
    private $codeEmploye;

    /**
     * Date validation synchro.
     *
     * @var DateTime
     */
    private $dateValidationSynchro;

    /**
     * Etat.
     *
     * @var string
     */
    private $etat;

    /**
     * Periode pointage cloturee.
     *
     * @var DateTime
     */
    private $periodePointageCloturee;

    /**
     * Periode previsionnel generee.
     *
     * @var DateTime
     */
    private $periodePrevisionnelGeneree;

    /**
     * Uniq i d synchro.
     *
     * @var string
     */
    private $uniqIDSynchro;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code collabo valid.
     *
     * @return string Returns the code collabo valid.
     */
    public function getCodeCollaboValid() {
        return $this->codeCollaboValid;
    }

    /**
     * Get the code collaborateur.
     *
     * @return string Returns the code collaborateur.
     */
    public function getCodeCollaborateur() {
        return $this->codeCollaborateur;
    }

    /**
     * Get the code employe.
     *
     * @return string Returns the code employe.
     */
    public function getCodeEmploye() {
        return $this->codeEmploye;
    }

    /**
     * Get the date validation synchro.
     *
     * @return DateTime Returns the date validation synchro.
     */
    public function getDateValidationSynchro() {
        return $this->dateValidationSynchro;
    }

    /**
     * Get the etat.
     *
     * @return string Returns the etat.
     */
    public function getEtat() {
        return $this->etat;
    }

    /**
     * Get the periode pointage cloturee.
     *
     * @return DateTime Returns the periode pointage cloturee.
     */
    public function getPeriodePointageCloturee() {
        return $this->periodePointageCloturee;
    }

    /**
     * Get the periode previsionnel generee.
     *
     * @return DateTime Returns the periode previsionnel generee.
     */
    public function getPeriodePrevisionnelGeneree() {
        return $this->periodePrevisionnelGeneree;
    }

    /**
     * Get the uniq i d synchro.
     *
     * @return string Returns the uniq i d synchro.
     */
    public function getUniqIDSynchro() {
        return $this->uniqIDSynchro;
    }

    /**
     * Set the code collabo valid.
     *
     * @param string $codeCollaboValid The code collabo valid.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setCodeCollaboValid($codeCollaboValid) {
        $this->codeCollaboValid = $codeCollaboValid;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code employe.
     *
     * @param string $codeEmploye The code employe.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setCodeEmploye($codeEmploye) {
        $this->codeEmploye = $codeEmploye;
        return $this;
    }

    /**
     * Set the date validation synchro.
     *
     * @param DateTime $dateValidationSynchro The date validation synchro.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setDateValidationSynchro(DateTime $dateValidationSynchro = null) {
        $this->dateValidationSynchro = $dateValidationSynchro;
        return $this;
    }

    /**
     * Set the etat.
     *
     * @param string $etat The etat.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setEtat($etat) {
        $this->etat = $etat;
        return $this;
    }

    /**
     * Set the periode pointage cloturee.
     *
     * @param DateTime $periodePointageCloturee The periode pointage cloturee.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setPeriodePointageCloturee(DateTime $periodePointageCloturee = null) {
        $this->periodePointageCloturee = $periodePointageCloturee;
        return $this;
    }

    /**
     * Set the periode previsionnel generee.
     *
     * @param DateTime $periodePrevisionnelGeneree The periode previsionnel generee.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setPeriodePrevisionnelGeneree(DateTime $periodePrevisionnelGeneree = null) {
        $this->periodePrevisionnelGeneree = $periodePrevisionnelGeneree;
        return $this;
    }

    /**
     * Set the uniq i d synchro.
     *
     * @param string $uniqIDSynchro The uniq i d synchro.
     * @return EmployesPointages Returns this employes pointages.
     */
    public function setUniqIDSynchro($uniqIDSynchro) {
        $this->uniqIDSynchro = $uniqIDSynchro;
        return $this;
    }
}
