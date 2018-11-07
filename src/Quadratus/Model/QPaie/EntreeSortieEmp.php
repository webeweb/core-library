<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;

use DateTime;

/**
 * Entree sortie emp model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
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
     * Date e s.
     *
     * @var DateTime
     */
    private $dateES;

    /**
     * Date fin periode essai.
     *
     * @var DateTime
     */
    private $dateFinPeriodeEssai;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Date notification.
     *
     * @var DateTime
     */
    private $dateNotification;

    /**
     * Date renouv c d d1.
     *
     * @var DateTime
     */
    private $dateRenouvCDD1;

    /**
     * Date renouv c d d2.
     *
     * @var DateTime
     */
    private $dateRenouvCDD2;

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
     * Transfert e s.
     *
     * @var boolean
     */
    private $transfertES;

    /**
     * Travail temp.
     *
     * @var boolean
     */
    private $travailTemp;

    /**
     * Type e s.
     *
     * @var string
     */
    private $typeES;

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
     * Get the date e s.
     *
     * @return DateTime Returns the date e s.
     */
    public function getDateES() {
        return $this->dateES;
    }

    /**
     * Get the date fin periode essai.
     *
     * @return DateTime Returns the date fin periode essai.
     */
    public function getDateFinPeriodeEssai() {
        return $this->dateFinPeriodeEssai;
    }

    /**
     * Get the date modification.
     *
     * @return DateTime Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the date notification.
     *
     * @return DateTime Returns the date notification.
     */
    public function getDateNotification() {
        return $this->dateNotification;
    }

    /**
     * Get the date renouv c d d1.
     *
     * @return DateTime Returns the date renouv c d d1.
     */
    public function getDateRenouvCDD1() {
        return $this->dateRenouvCDD1;
    }

    /**
     * Get the date renouv c d d2.
     *
     * @return DateTime Returns the date renouv c d d2.
     */
    public function getDateRenouvCDD2() {
        return $this->dateRenouvCDD2;
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
     * Get the transfert e s.
     *
     * @return boolean Returns the transfert e s.
     */
    public function getTransfertES() {
        return $this->transfertES;
    }

    /**
     * Get the travail temp.
     *
     * @return boolean Returns the travail temp.
     */
    public function getTravailTemp() {
        return $this->travailTemp;
    }

    /**
     * Get the type e s.
     *
     * @return string Returns the type e s.
     */
    public function getTypeES() {
        return $this->typeES;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code motif rupture.
     *
     * @param string $codeMotifRupture The code motif rupture.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setCodeMotifRupture($codeMotifRupture) {
        $this->codeMotifRupture = $codeMotifRupture;
        return $this;
    }

    /**
     * Set the date e s.
     *
     * @param DateTime $dateES The date e s.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setDateES(DateTime $dateES = null) {
        $this->dateES = $dateES;
        return $this;
    }

    /**
     * Set the date fin periode essai.
     *
     * @param DateTime $dateFinPeriodeEssai The date fin periode essai.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setDateFinPeriodeEssai(DateTime $dateFinPeriodeEssai = null) {
        $this->dateFinPeriodeEssai = $dateFinPeriodeEssai;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date notification.
     *
     * @param DateTime $dateNotification The date notification.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setDateNotification(DateTime $dateNotification = null) {
        $this->dateNotification = $dateNotification;
        return $this;
    }

    /**
     * Set the date renouv c d d1.
     *
     * @param DateTime $dateRenouvCDD1 The date renouv c d d1.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setDateRenouvCDD1(DateTime $dateRenouvCDD1 = null) {
        $this->dateRenouvCDD1 = $dateRenouvCDD1;
        return $this;
    }

    /**
     * Set the date renouv c d d2.
     *
     * @param DateTime $dateRenouvCDD2 The date renouv c d d2.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setDateRenouvCDD2(DateTime $dateRenouvCDD2 = null) {
        $this->dateRenouvCDD2 = $dateRenouvCDD2;
        return $this;
    }

    /**
     * Set the entreprise travail temp.
     *
     * @param string $entrepriseTravailTemp The entreprise travail temp.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setEntrepriseTravailTemp($entrepriseTravailTemp) {
        $this->entrepriseTravailTemp = $entrepriseTravailTemp;
        return $this;
    }

    /**
     * Set the numero employe.
     *
     * @param string $numeroEmploye The numero employe.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setNumeroEmploye($numeroEmploye) {
        $this->numeroEmploye = $numeroEmploye;
        return $this;
    }

    /**
     * Set the transfert e s.
     *
     * @param boolean $transfertES The transfert e s.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setTransfertES($transfertES) {
        $this->transfertES = $transfertES;
        return $this;
    }

    /**
     * Set the travail temp.
     *
     * @param boolean $travailTemp The travail temp.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setTravailTemp($travailTemp) {
        $this->travailTemp = $travailTemp;
        return $this;
    }

    /**
     * Set the type e s.
     *
     * @param string $typeES The type e s.
     * @return EntreeSortieEmp Returns this entree sortie emp.
     */
    public function setTypeES($typeES) {
        $this->typeES = $typeES;
        return $this;
    }

}
