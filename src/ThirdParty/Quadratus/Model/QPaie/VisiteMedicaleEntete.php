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
 * Visite medicale entete.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QPaie
 */
class VisiteMedicaleEntete {

    /**
     * Adresse mt.
     *
     * @var string
     */
    private $adresseMt;

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
     * Code postal mt.
     *
     * @var string
     */
    private $codePostalMt;

    /**
     * Debut1.
     *
     * @var DateTime|null
     */
    private $debut1;

    /**
     * Debut2.
     *
     * @var DateTime|null
     */
    private $debut2;

    /**
     * Debut session.
     *
     * @var DateTime|null
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
     * @var DateTime|null
     */
    private $fin1;

    /**
     * Fin2.
     *
     * @var DateTime|null
     */
    private $fin2;

    /**
     * Fin session.
     *
     * @var DateTime|null
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
     * Nom mt.
     *
     * @var string
     */
    private $nomMt;

    /**
     * Rdv jour1.
     *
     * @var bool
     */
    private $rdvJour1;

    /**
     * Rdv jour2.
     *
     * @var bool
     */
    private $rdvJour2;

    /**
     * Rdv jour3.
     *
     * @var bool
     */
    private $rdvJour3;

    /**
     * Rdv jour4.
     *
     * @var bool
     */
    private $rdvJour4;

    /**
     * Rdv jour5.
     *
     * @var bool
     */
    private $rdvJour5;

    /**
     * Rdv jour6.
     *
     * @var bool
     */
    private $rdvJour6;

    /**
     * Rdv jour7.
     *
     * @var bool
     */
    private $rdvJour7;

    /**
     * Tel1.
     *
     * @var string
     */
    private $tel1;

    /**
     * Ville mt.
     *
     * @var string
     */
    private $villeMt;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the adresse mt.
     *
     * @return string Returns the adresse mt.
     */
    public function getAdresseMt() {
        return $this->adresseMt;
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
     * Get the code postal mt.
     *
     * @return string Returns the code postal mt.
     */
    public function getCodePostalMt() {
        return $this->codePostalMt;
    }

    /**
     * Get the debut1.
     *
     * @return DateTime|null Returns the debut1.
     */
    public function getDebut1() {
        return $this->debut1;
    }

    /**
     * Get the debut2.
     *
     * @return DateTime|null Returns the debut2.
     */
    public function getDebut2() {
        return $this->debut2;
    }

    /**
     * Get the debut session.
     *
     * @return DateTime|null Returns the debut session.
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
     * @return DateTime|null Returns the fin1.
     */
    public function getFin1() {
        return $this->fin1;
    }

    /**
     * Get the fin2.
     *
     * @return DateTime|null Returns the fin2.
     */
    public function getFin2() {
        return $this->fin2;
    }

    /**
     * Get the fin session.
     *
     * @return DateTime|null Returns the fin session.
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
     * Get the nom mt.
     *
     * @return string Returns the nom mt.
     */
    public function getNomMt() {
        return $this->nomMt;
    }

    /**
     * Get the rdv jour1.
     *
     * @return bool Returns the rdv jour1.
     */
    public function getRdvJour1() {
        return $this->rdvJour1;
    }

    /**
     * Get the rdv jour2.
     *
     * @return bool Returns the rdv jour2.
     */
    public function getRdvJour2() {
        return $this->rdvJour2;
    }

    /**
     * Get the rdv jour3.
     *
     * @return bool Returns the rdv jour3.
     */
    public function getRdvJour3() {
        return $this->rdvJour3;
    }

    /**
     * Get the rdv jour4.
     *
     * @return bool Returns the rdv jour4.
     */
    public function getRdvJour4() {
        return $this->rdvJour4;
    }

    /**
     * Get the rdv jour5.
     *
     * @return bool Returns the rdv jour5.
     */
    public function getRdvJour5() {
        return $this->rdvJour5;
    }

    /**
     * Get the rdv jour6.
     *
     * @return bool Returns the rdv jour6.
     */
    public function getRdvJour6() {
        return $this->rdvJour6;
    }

    /**
     * Get the rdv jour7.
     *
     * @return bool Returns the rdv jour7.
     */
    public function getRdvJour7() {
        return $this->rdvJour7;
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
     * Get the ville mt.
     *
     * @return string Returns the ville mt.
     */
    public function getVilleMt() {
        return $this->villeMt;
    }

    /**
     * Set the adresse mt.
     *
     * @param string $adresseMt The adresse mt.
     */
    public function setAdresseMt($adresseMt) {
        $this->adresseMt = $adresseMt;
        return $this;
    }

    /**
     * Set the code.
     *
     * @param string $code The code.
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * Set the code medecine travail.
     *
     * @param string $codeMedecineTravail The code medecine travail.
     */
    public function setCodeMedecineTravail($codeMedecineTravail) {
        $this->codeMedecineTravail = $codeMedecineTravail;
        return $this;
    }

    /**
     * Set the code postal mt.
     *
     * @param string $codePostalMt The code postal mt.
     */
    public function setCodePostalMt($codePostalMt) {
        $this->codePostalMt = $codePostalMt;
        return $this;
    }

    /**
     * Set the debut1.
     *
     * @param DateTime|null $debut1 The debut1.
     */
    public function setDebut1(DateTime $debut1 = null) {
        $this->debut1 = $debut1;
        return $this;
    }

    /**
     * Set the debut2.
     *
     * @param DateTime|null $debut2 The debut2.
     */
    public function setDebut2(DateTime $debut2 = null) {
        $this->debut2 = $debut2;
        return $this;
    }

    /**
     * Set the debut session.
     *
     * @param DateTime|null $debutSession The debut session.
     */
    public function setDebutSession(DateTime $debutSession = null) {
        $this->debutSession = $debutSession;
        return $this;
    }

    /**
     * Set the description.
     *
     * @param string $description The description.
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the duree visite.
     *
     * @param string $dureeVisite The duree visite.
     */
    public function setDureeVisite($dureeVisite) {
        $this->dureeVisite = $dureeVisite;
        return $this;
    }

    /**
     * Set the fin1.
     *
     * @param DateTime|null $fin1 The fin1.
     */
    public function setFin1(DateTime $fin1 = null) {
        $this->fin1 = $fin1;
        return $this;
    }

    /**
     * Set the fin2.
     *
     * @param DateTime|null $fin2 The fin2.
     */
    public function setFin2(DateTime $fin2 = null) {
        $this->fin2 = $fin2;
        return $this;
    }

    /**
     * Set the fin session.
     *
     * @param DateTime|null $finSession The fin session.
     */
    public function setFinSession(DateTime $finSession = null) {
        $this->finSession = $finSession;
        return $this;
    }

    /**
     * Set the lient document.
     *
     * @param string $lientDocument The lient document.
     */
    public function setLientDocument($lientDocument) {
        $this->lientDocument = $lientDocument;
        return $this;
    }

    /**
     * Set the medecin responsable.
     *
     * @param string $medecinResponsable The medecin responsable.
     */
    public function setMedecinResponsable($medecinResponsable) {
        $this->medecinResponsable = $medecinResponsable;
        return $this;
    }

    /**
     * Set the nom mt.
     *
     * @param string $nomMt The nom mt.
     */
    public function setNomMt($nomMt) {
        $this->nomMt = $nomMt;
        return $this;
    }

    /**
     * Set the rdv jour1.
     *
     * @param bool $rdvJour1 The rdv jour1.
     */
    public function setRdvJour1($rdvJour1) {
        $this->rdvJour1 = $rdvJour1;
        return $this;
    }

    /**
     * Set the rdv jour2.
     *
     * @param bool $rdvJour2 The rdv jour2.
     */
    public function setRdvJour2($rdvJour2) {
        $this->rdvJour2 = $rdvJour2;
        return $this;
    }

    /**
     * Set the rdv jour3.
     *
     * @param bool $rdvJour3 The rdv jour3.
     */
    public function setRdvJour3($rdvJour3) {
        $this->rdvJour3 = $rdvJour3;
        return $this;
    }

    /**
     * Set the rdv jour4.
     *
     * @param bool $rdvJour4 The rdv jour4.
     */
    public function setRdvJour4($rdvJour4) {
        $this->rdvJour4 = $rdvJour4;
        return $this;
    }

    /**
     * Set the rdv jour5.
     *
     * @param bool $rdvJour5 The rdv jour5.
     */
    public function setRdvJour5($rdvJour5) {
        $this->rdvJour5 = $rdvJour5;
        return $this;
    }

    /**
     * Set the rdv jour6.
     *
     * @param bool $rdvJour6 The rdv jour6.
     */
    public function setRdvJour6($rdvJour6) {
        $this->rdvJour6 = $rdvJour6;
        return $this;
    }

    /**
     * Set the rdv jour7.
     *
     * @param bool $rdvJour7 The rdv jour7.
     */
    public function setRdvJour7($rdvJour7) {
        $this->rdvJour7 = $rdvJour7;
        return $this;
    }

    /**
     * Set the tel1.
     *
     * @param string $tel1 The tel1.
     */
    public function setTel1($tel1) {
        $this->tel1 = $tel1;
        return $this;
    }

    /**
     * Set the ville mt.
     *
     * @param string $villeMt The ville mt.
     */
    public function setVilleMt($villeMt) {
        $this->villeMt = $villeMt;
        return $this;
    }
}
