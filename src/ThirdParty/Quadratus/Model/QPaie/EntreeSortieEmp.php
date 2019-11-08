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
 * Entree sortie emp.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class EntreeSortieEmp {

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code motif rupture.
     *
     * @var string
     */
    private $codeMotifRupture;

    /**
     * Date es.
     *
     * @var DateTime|null
     */
    private $dateEs;

    /**
     * Date fin periode essai.
     *
     * @var DateTime|null
     */
    private $dateFinPeriodeEssai;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Date notification.
     *
     * @var DateTime|null
     */
    private $dateNotification;

    /**
     * Date renouv cdd1.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd1;

    /**
     * Date renouv cdd2.
     *
     * @var DateTime|null
     */
    private $dateRenouvCdd2;

    /**
     * Entreprise travail temp.
     *
     * @var string
     */
    private $entrepriseTravailTemp;

    /**
     * Numero employe.
     *
     * @var string
     */
    private $numeroEmploye;

    /**
     * Transfert es.
     *
     * @var bool
     */
    private $transfertEs;

    /**
     * Travail temp.
     *
     * @var bool
     */
    private $travailTemp;

    /**
     * Type es.
     *
     * @var string
     */
    private $typeEs;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
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
     * Get the code motif rupture.
     *
     * @return string Returns the code motif rupture.
     */
    public function getCodeMotifRupture() {
        return $this->codeMotifRupture;
    }

    /**
     * Get the date es.
     *
     * @return DateTime|null Returns the date es.
     */
    public function getDateEs() {
        return $this->dateEs;
    }

    /**
     * Get the date fin periode essai.
     *
     * @return DateTime|null Returns the date fin periode essai.
     */
    public function getDateFinPeriodeEssai() {
        return $this->dateFinPeriodeEssai;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date notification.
     *
     * @return DateTime|null Returns the date notification.
     */
    public function getDateNotification() {
        return $this->dateNotification;
    }

    /**
     * Get the date renouv cdd1.
     *
     * @return DateTime|null Returns the date renouv cdd1.
     */
    public function getDateRenouvCdd1() {
        return $this->dateRenouvCdd1;
    }

    /**
     * Get the date renouv cdd2.
     *
     * @return DateTime|null Returns the date renouv cdd2.
     */
    public function getDateRenouvCdd2() {
        return $this->dateRenouvCdd2;
    }

    /**
     * Get the entreprise travail temp.
     *
     * @return string Returns the entreprise travail temp.
     */
    public function getEntrepriseTravailTemp() {
        return $this->entrepriseTravailTemp;
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
     * Get the transfert es.
     *
     * @return bool Returns the transfert es.
     */
    public function getTransfertEs() {
        return $this->transfertEs;
    }

    /**
     * Get the travail temp.
     *
     * @return bool Returns the travail temp.
     */
    public function getTravailTemp() {
        return $this->travailTemp;
    }

    /**
     * Get the type es.
     *
     * @return string Returns the type es.
     */
    public function getTypeEs() {
        return $this->typeEs;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the date es.
     *
     * @param DateTime|null $dateEs The date es.
     */
    public function setDateEs(DateTime $dateEs = null) {
        $this->dateEs = $dateEs;
        return $this;
    }

    /**
     * Set the date fin periode essai.
     *
     * @param DateTime|null $dateFinPeriodeEssai The date fin periode essai.
     */
    public function setDateFinPeriodeEssai(DateTime $dateFinPeriodeEssai = null) {
        $this->dateFinPeriodeEssai = $dateFinPeriodeEssai;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime|null $dateNotification The date notification.
     */
    public function setDateNotification(DateTime $dateNotification = null) {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date renouv cdd1.
     *
     * @param DateTime|null $dateRenouvCdd1 The date renouv cdd1.
     */
    public function setDateRenouvCdd1(DateTime $dateRenouvCdd1 = null) {
        $this->dateRenouvCdd1 = $dateRenouvCdd1;
        return $this;
    }

    /**
     * Set the date renouv cdd2.
     *
     * @param DateTime|null $dateRenouvCdd2 The date renouv cdd2.
     */
    public function setDateRenouvCdd2(DateTime $dateRenouvCdd2 = null) {
        $this->dateRenouvCdd2 = $dateRenouvCdd2;
        return $this;
    }

    /**
     * Set the entreprise travail temp.
     *
     * @param string $entrepriseTravailTemp The entreprise travail temp.
     */
    public function setEntrepriseTravailTemp($entrepriseTravailTemp) {
        $this->entrepriseTravailTemp = $entrepriseTravailTemp;
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
     * Set the transfert es.
     *
     * @param bool $transfertEs The transfert es.
     */
    public function setTransfertEs($transfertEs) {
        $this->transfertEs = $transfertEs;
        return $this;
    }

    /**
     * Set the travail temp.
     *
     * @param bool $travailTemp The travail temp.
     */
    public function setTravailTemp($travailTemp) {
        $this->travailTemp = $travailTemp;
        return $this;
    }

    /**
     * Set the type es.
     *
     * @param string $typeEs The type es.
     */
    public function setTypeEs($typeEs) {
        $this->typeEs = $typeEs;
        return $this;
    }
}
