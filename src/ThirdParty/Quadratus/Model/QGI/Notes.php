<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

use DateTime;

/**
 * Notes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class Notes {

    /**
     * Code categorie.
     *
     * @var string
     */
    private $codeCategorie;

    /**
     * Code collaborateur.
     *
     * @var string
     */
    private $codeCollaborateur;

    /**
     * Code collaborateur modif.
     *
     * @var string
     */
    private $codeCollaborateurModif;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime
     */
    private $dateModification;

    /**
     * Date rappel.
     *
     * @var DateTime
     */
    private $dateRappel;

    /**
     * Envoi post it.
     *
     * @var bool
     */
    private $envoiPostIt;

    /**
     * Intitule.
     *
     * @var string
     */
    private $intitule;

    /**
     * Num uniq.
     *
     * @var string
     */
    private $numUniq;

    /**
     * Titre.
     *
     * @var string
     */
    private $titre;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the code categorie.
     *
     * @return string Returns the code categorie.
     */
    public function getCodeCategorie() {
        return $this->codeCategorie;
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
     * Get the code collaborateur modif.
     *
     * @return string Returns the code collaborateur modif.
     */
    public function getCodeCollaborateurModif() {
        return $this->codeCollaborateurModif;
    }

    /**
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
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
     * Get the date rappel.
     *
     * @return DateTime Returns the date rappel.
     */
    public function getDateRappel() {
        return $this->dateRappel;
    }

    /**
     * Get the envoi post it.
     *
     * @return bool Returns the envoi post it.
     */
    public function getEnvoiPostIt() {
        return $this->envoiPostIt;
    }

    /**
     * Get the intitule.
     *
     * @return string Returns the intitule.
     */
    public function getIntitule() {
        return $this->intitule;
    }

    /**
     * Get the num uniq.
     *
     * @return string Returns the num uniq.
     */
    public function getNumUniq() {
        return $this->numUniq;
    }

    /**
     * Get the titre.
     *
     * @return string Returns the titre.
     */
    public function getTitre() {
        return $this->titre;
    }

    /**
     * Set the code categorie.
     *
     * @param string $codeCategorie The code categorie.
     * @return Notes Returns this notes.
     */
    public function setCodeCategorie($codeCategorie) {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return Notes Returns this notes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the code collaborateur modif.
     *
     * @param string $codeCollaborateurModif The code collaborateur modif.
     * @return Notes Returns this notes.
     */
    public function setCodeCollaborateurModif($codeCollaborateurModif) {
        $this->codeCollaborateurModif = $codeCollaborateurModif;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return Notes Returns this notes.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime $dateModification The date modification.
     * @return Notes Returns this notes.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the date rappel.
     *
     * @param DateTime $dateRappel The date rappel.
     * @return Notes Returns this notes.
     */
    public function setDateRappel(DateTime $dateRappel = null) {
        $this->dateRappel = $dateRappel;
        return $this;
    }

    /**
     * Set the envoi post it.
     *
     * @param bool $envoiPostIt The envoi post it.
     * @return Notes Returns this notes.
     */
    public function setEnvoiPostIt($envoiPostIt) {
        $this->envoiPostIt = $envoiPostIt;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return Notes Returns this notes.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string $numUniq The num uniq.
     * @return Notes Returns this notes.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return Notes Returns this notes.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }
}
