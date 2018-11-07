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
 * Visite medicale entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class VisiteMedicaleEntete {

    /**
     * Adresse m t.
     *
     * @var string
     */
    private $adresseMT;

    /**
     * Code.
     *
     * @var string
     */
    private $code;

    /**
     * Code medecine travail.
     *
     * @var string
     */
    private $codeMedecineTravail;

    /**
     * Code postal m t.
     *
     * @var string
     */
    private $codePostalMT;

    /**
     * Debut1.
     *
     * @var DateTime
     */
    private $debut1;

    /**
     * Debut2.
     *
     * @var DateTime
     */
    private $debut2;

    /**
     * Debut session.
     *
     * @var DateTime
     */
    private $debutSession;

    /**
     * Description.
     *
     * @var string
     */
    private $description;

    /**
     * Duree visite.
     *
     * @var string
     */
    private $dureeVisite;

    /**
     * Fin1.
     *
     * @var DateTime
     */
    private $fin1;

    /**
     * Fin2.
     *
     * @var DateTime
     */
    private $fin2;

    /**
     * Fin session.
     *
     * @var DateTime
     */
    private $finSession;

    /**
     * Lient document.
     *
     * @var string
     */
    private $lientDocument;

    /**
     * Medecin responsable.
     *
     * @var string
     */
    private $medecinResponsable;

    /**
     * Nom m t.
     *
     * @var string
     */
    private $nomMT;

    /**
     * R d v jour1.
     *
     * @var boolean
     */
    private $rDVJour1;

    /**
     * R d v jour2.
     *
     * @var boolean
     */
    private $rDVJour2;

    /**
     * R d v jour3.
     *
     * @var boolean
     */
    private $rDVJour3;

    /**
     * R d v jour4.
     *
     * @var boolean
     */
    private $rDVJour4;

    /**
     * R d v jour5.
     *
     * @var boolean
     */
    private $rDVJour5;

    /**
     * R d v jour6.
     *
     * @var boolean
     */
    private $rDVJour6;

    /**
     * R d v jour7.
     *
     * @var boolean
     */
    private $rDVJour7;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Ville m t.
     *
     * @var string
     */
    private $villeMT;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse m t.
     *
     * @return string Returns the adresse m t.
     */
    public function getAdresseMT() {
        return $this->adresseMT;
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
     * Get the code medecine travail.
     *
     * @return string Returns the code medecine travail.
     */
    public function getCodeMedecineTravail() {
        return $this->codeMedecineTravail;
    }

    /**
     * Get the code postal m t.
     *
     * @return string Returns the code postal m t.
     */
    public function getCodePostalMT() {
        return $this->codePostalMT;
    }

    /**
     * Get the debut1.
     *
     * @return DateTime Returns the debut1.
     */
    public function getDebut1() {
        return $this->debut1;
    }

    /**
     * Get the debut2.
     *
     * @return DateTime Returns the debut2.
     */
    public function getDebut2() {
        return $this->debut2;
    }

    /**
     * Get the debut session.
     *
     * @return DateTime Returns the debut session.
     */
    public function getDebutSession() {
        return $this->debutSession;
    }

    /**
     * Get the description.
     *
     * @return string Returns the description.
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Get the duree visite.
     *
     * @return string Returns the duree visite.
     */
    public function getDureeVisite() {
        return $this->dureeVisite;
    }

    /**
     * Get the fin1.
     *
     * @return DateTime Returns the fin1.
     */
    public function getFin1() {
        return $this->fin1;
    }

    /**
     * Get the fin2.
     *
     * @return DateTime Returns the fin2.
     */
    public function getFin2() {
        return $this->fin2;
    }

    /**
     * Get the fin session.
     *
     * @return DateTime Returns the fin session.
     */
    public function getFinSession() {
        return $this->finSession;
    }

    /**
     * Get the lient document.
     *
     * @return string Returns the lient document.
     */
    public function getLientDocument() {
        return $this->lientDocument;
    }

    /**
     * Get the medecin responsable.
     *
     * @return string Returns the medecin responsable.
     */
    public function getMedecinResponsable() {
        return $this->medecinResponsable;
    }

    /**
     * Get the nom m t.
     *
     * @return string Returns the nom m t.
     */
    public function getNomMT() {
        return $this->nomMT;
    }

    /**
     * Get the r d v jour1.
     *
     * @return boolean Returns the r d v jour1.
     */
    public function getRDVJour1() {
        return $this->rDVJour1;
    }

    /**
     * Get the r d v jour2.
     *
     * @return boolean Returns the r d v jour2.
     */
    public function getRDVJour2() {
        return $this->rDVJour2;
    }

    /**
     * Get the r d v jour3.
     *
     * @return boolean Returns the r d v jour3.
     */
    public function getRDVJour3() {
        return $this->rDVJour3;
    }

    /**
     * Get the r d v jour4.
     *
     * @return boolean Returns the r d v jour4.
     */
    public function getRDVJour4() {
        return $this->rDVJour4;
    }

    /**
     * Get the r d v jour5.
     *
     * @return boolean Returns the r d v jour5.
     */
    public function getRDVJour5() {
        return $this->rDVJour5;
    }

    /**
     * Get the r d v jour6.
     *
     * @return boolean Returns the r d v jour6.
     */
    public function getRDVJour6() {
        return $this->rDVJour6;
    }

    /**
     * Get the r d v jour7.
     *
     * @return boolean Returns the r d v jour7.
     */
    public function getRDVJour7() {
        return $this->rDVJour7;
    }

    /**
     * Get the tel1.
     *
     * @return string Returns the tel1.
     */
    public function getTel1() {
        return $this->tel1;
    }

    /**
     * Get the ville m t.
     *
     * @return string Returns the ville m t.
     */
    public function getVilleMT() {
        return $this->villeMT;
    }

    /**
     * Set the adresse m t.
     *
     * @param string $adresseMT The adresse m t.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setAdresseMT($adresseMT) {
        $this->adresseMT = $adresseMT;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code medecine travail.
     *
     * @param string $codeMedecineTravail The code medecine travail.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setCodeMedecineTravail($codeMedecineTravail) {
        $this->codeMedecineTravail = $codeMedecineTravail;
        return $this;
    }

    /**
     * Set the code postal m t.
     *
     * @param string $codePostalMT The code postal m t.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setCodePostalMT($codePostalMT) {
        $this->codePostalMT = $codePostalMT;
        return $this;
    }

    /**
     * Set the debut1.
     *
     * @param DateTime $debut1 The debut1.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setDebut1(DateTime $debut1 = null) {
        $this->debut1 = $debut1;
        return $this;
    }

    /**
     * Set the debut2.
     *
     * @param DateTime $debut2 The debut2.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setDebut2(DateTime $debut2 = null) {
        $this->debut2 = $debut2;
        return $this;
    }

    /**
     * Set the debut session.
     *
     * @param DateTime $debutSession The debut session.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setDebutSession(DateTime $debutSession = null) {
        $this->debutSession = $debutSession;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the duree visite.
     *
     * @param string $dureeVisite The duree visite.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setDureeVisite($dureeVisite) {
        $this->dureeVisite = $dureeVisite;
        return $this;
    }

    /**
     * Set the fin1.
     *
     * @param DateTime $fin1 The fin1.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setFin1(DateTime $fin1 = null) {
        $this->fin1 = $fin1;
        return $this;
    }

    /**
     * Set the fin2.
     *
     * @param DateTime $fin2 The fin2.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setFin2(DateTime $fin2 = null) {
        $this->fin2 = $fin2;
        return $this;
    }

    /**
     * Set the fin session.
     *
     * @param DateTime $finSession The fin session.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setFinSession(DateTime $finSession = null) {
        $this->finSession = $finSession;
        return $this;
    }

    /**
     * Set the lient document.
     *
     * @param string $lientDocument The lient document.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setLientDocument($lientDocument) {
        $this->lientDocument = $lientDocument;
        return $this;
    }

    /**
     * Set the medecin responsable.
     *
     * @param string $medecinResponsable The medecin responsable.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setMedecinResponsable($medecinResponsable) {
        $this->medecinResponsable = $medecinResponsable;
        return $this;
    }

    /**
     * Set the nom m t.
     *
     * @param string $nomMT The nom m t.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setNomMT($nomMT) {
        $this->nomMT = $nomMT;
        return $this;
    }

    /**
     * Set the r d v jour1.
     *
     * @param boolean $rDVJour1 The r d v jour1.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour1($rDVJour1) {
        $this->rDVJour1 = $rDVJour1;
        return $this;
    }

    /**
     * Set the r d v jour2.
     *
     * @param boolean $rDVJour2 The r d v jour2.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour2($rDVJour2) {
        $this->rDVJour2 = $rDVJour2;
        return $this;
    }

    /**
     * Set the r d v jour3.
     *
     * @param boolean $rDVJour3 The r d v jour3.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour3($rDVJour3) {
        $this->rDVJour3 = $rDVJour3;
        return $this;
    }

    /**
     * Set the r d v jour4.
     *
     * @param boolean $rDVJour4 The r d v jour4.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour4($rDVJour4) {
        $this->rDVJour4 = $rDVJour4;
        return $this;
    }

    /**
     * Set the r d v jour5.
     *
     * @param boolean $rDVJour5 The r d v jour5.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour5($rDVJour5) {
        $this->rDVJour5 = $rDVJour5;
        return $this;
    }

    /**
     * Set the r d v jour6.
     *
     * @param boolean $rDVJour6 The r d v jour6.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour6($rDVJour6) {
        $this->rDVJour6 = $rDVJour6;
        return $this;
    }

    /**
     * Set the r d v jour7.
     *
     * @param boolean $rDVJour7 The r d v jour7.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setRDVJour7($rDVJour7) {
        $this->rDVJour7 = $rDVJour7;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the ville m t.
     *
     * @param string $villeMT The ville m t.
     * @return VisiteMedicaleEntete Returns this visite medicale entete.
     */
    public function setVilleMT($villeMT) {
        $this->villeMT = $villeMT;
        return $this;
    }

}
