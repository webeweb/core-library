<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Caisse attestation.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class CaisseAttestation {

    /**
     * Collaborateur.
     *
     * @var string
     */
    private $collaborateur;

    /**
     * Date acquisition.
     *
     * @var DateTime|null
     */
    private $dateAcquisition;

    /**
     * Date application.
     *
     * @var DateTime|null
     */
    private $dateApplication;

    /**
     * Date attestation.
     *
     * @var DateTime|null
     */
    private $dateAttestation;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Info fichier.
     *
     * @var string
     */
    private $infoFichier;

    /**
     * Licence.
     *
     * @var string
     */
    private $licence;

    /**
     * Nom responsable.
     *
     * @var string
     */
    private $nomResponsable;

    /**
     * Nom ville.
     *
     * @var string
     */
    private $nomVille;

    /**
     * Num version.
     *
     * @var string
     */
    private $numVersion;

    /**
     * Ordinateur.
     *
     * @var string
     */
    private $ordinateur;

    /**
     * Origine.
     *
     * @var string
     */
    private $origine;

    /**
     * Prenom responsable.
     *
     * @var string
     */
    private $prenomResponsable;

    /**
     * Raison sociale distri.
     *
     * @var string
     */
    private $raisonSocialeDistri;

    /**
     * Raison sociale societe.
     *
     * @var string
     */
    private $raisonSocialeSociete;

    /**
     * Uniq id.
     *
     * @var int
     */
    private $uniqId;

    /**
     * Utilisateur.
     *
     * @var string
     */
    private $utilisateur;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the collaborateur.
     *
     * @return string Returns the collaborateur.
     */
    public function getCollaborateur() {
        return $this->collaborateur;
    }

    /**
     * Get the date acquisition.
     *
     * @return DateTime|null Returns the date acquisition.
     */
    public function getDateAcquisition() {
        return $this->dateAcquisition;
    }

    /**
     * Get the date application.
     *
     * @return DateTime|null Returns the date application.
     */
    public function getDateApplication() {
        return $this->dateApplication;
    }

    /**
     * Get the date attestation.
     *
     * @return DateTime|null Returns the date attestation.
     */
    public function getDateAttestation() {
        return $this->dateAttestation;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime|null Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the info fichier.
     *
     * @return string Returns the info fichier.
     */
    public function getInfoFichier() {
        return $this->infoFichier;
    }

    /**
     * Get the licence.
     *
     * @return string Returns the licence.
     */
    public function getLicence() {
        return $this->licence;
    }

    /**
     * Get the nom responsable.
     *
     * @return string Returns the nom responsable.
     */
    public function getNomResponsable() {
        return $this->nomResponsable;
    }

    /**
     * Get the nom ville.
     *
     * @return string Returns the nom ville.
     */
    public function getNomVille() {
        return $this->nomVille;
    }

    /**
     * Get the num version.
     *
     * @return string Returns the num version.
     */
    public function getNumVersion() {
        return $this->numVersion;
    }

    /**
     * Get the ordinateur.
     *
     * @return string Returns the ordinateur.
     */
    public function getOrdinateur() {
        return $this->ordinateur;
    }

    /**
     * Get the origine.
     *
     * @return string Returns the origine.
     */
    public function getOrigine() {
        return $this->origine;
    }

    /**
     * Get the prenom responsable.
     *
     * @return string Returns the prenom responsable.
     */
    public function getPrenomResponsable() {
        return $this->prenomResponsable;
    }

    /**
     * Get the raison sociale distri.
     *
     * @return string Returns the raison sociale distri.
     */
    public function getRaisonSocialeDistri() {
        return $this->raisonSocialeDistri;
    }

    /**
     * Get the raison sociale societe.
     *
     * @return string Returns the raison sociale societe.
     */
    public function getRaisonSocialeSociete() {
        return $this->raisonSocialeSociete;
    }

    /**
     * Get the uniq id.
     *
     * @return int Returns the uniq id.
     */
    public function getUniqId() {
        return $this->uniqId;
    }

    /**
     * Get the utilisateur.
     *
     * @return string Returns the utilisateur.
     */
    public function getUtilisateur() {
        return $this->utilisateur;
    }

    /**
     * Set the collaborateur.
     *
     * @param string $collaborateur The collaborateur.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setCollaborateur($collaborateur) {
        $this->collaborateur = $collaborateur;
        return $this;
    }

    /**
     * Set the date acquisition.
     *
     * @param DateTime|null $dateAcquisition The date acquisition.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateAcquisition(DateTime $dateAcquisition = null) {
        $this->dateAcquisition = $dateAcquisition;
        return $this;
    }

    /**
     * Set the date application.
     *
     * @param DateTime|null $dateApplication The date application.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateApplication(DateTime $dateApplication = null) {
        $this->dateApplication = $dateApplication;
        return $this;
    }

    /**
     * Set the date attestation.
     *
     * @param DateTime|null $dateAttestation The date attestation.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateAttestation(DateTime $dateAttestation = null) {
        $this->dateAttestation = $dateAttestation;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the info fichier.
     *
     * @param string $infoFichier The info fichier.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setInfoFichier($infoFichier) {
        $this->infoFichier = $infoFichier;
        return $this;
    }

    /**
     * Set the licence.
     *
     * @param string $licence The licence.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setLicence($licence) {
        $this->licence = $licence;
        return $this;
    }

    /**
     * Set the nom responsable.
     *
     * @param string $nomResponsable The nom responsable.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setNomResponsable($nomResponsable) {
        $this->nomResponsable = $nomResponsable;
        return $this;
    }

    /**
     * Set the nom ville.
     *
     * @param string $nomVille The nom ville.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setNomVille($nomVille) {
        $this->nomVille = $nomVille;
        return $this;
    }

    /**
     * Set the num version.
     *
     * @param string $numVersion The num version.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setNumVersion($numVersion) {
        $this->numVersion = $numVersion;
        return $this;
    }

    /**
     * Set the ordinateur.
     *
     * @param string $ordinateur The ordinateur.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setOrdinateur($ordinateur) {
        $this->ordinateur = $ordinateur;
        return $this;
    }

    /**
     * Set the origine.
     *
     * @param string $origine The origine.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setOrigine($origine) {
        $this->origine = $origine;
        return $this;
    }

    /**
     * Set the prenom responsable.
     *
     * @param string $prenomResponsable The prenom responsable.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setPrenomResponsable($prenomResponsable) {
        $this->prenomResponsable = $prenomResponsable;
        return $this;
    }

    /**
     * Set the raison sociale distri.
     *
     * @param string $raisonSocialeDistri The raison sociale distri.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setRaisonSocialeDistri($raisonSocialeDistri) {
        $this->raisonSocialeDistri = $raisonSocialeDistri;
        return $this;
    }

    /**
     * Set the raison sociale societe.
     *
     * @param string $raisonSocialeSociete The raison sociale societe.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setRaisonSocialeSociete($raisonSocialeSociete) {
        $this->raisonSocialeSociete = $raisonSocialeSociete;
        return $this;
    }

    /**
     * Set the uniq id.
     *
     * @param int $uniqId The uniq id.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setUniqId($uniqId) {
        $this->uniqId = $uniqId;
        return $this;
    }

    /**
     * Set the utilisateur.
     *
     * @param string $utilisateur The utilisateur.
     * @return CaisseAttestation Returns this Caisse attestation.
     */
    public function setUtilisateur($utilisateur) {
        $this->utilisateur = $utilisateur;
        return $this;
    }
}
