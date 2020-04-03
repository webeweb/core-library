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
 * Historique notes.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class HistoriqueNotes {

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
     * Date cloture.
     *
     * @var DateTime|null
     */
    private $dateCloture;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

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
     * Get the date cloture.
     *
     * @return DateTime|null Returns the date cloture.
     */
    public function getDateCloture() {
        return $this->dateCloture;
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
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setCodeCategorie($codeCategorie) {
        $this->codeCategorie = $codeCategorie;
        return $this;
    }

    /**
     * Set the code collaborateur.
     *
     * @param string $codeCollaborateur The code collaborateur.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setCodeCollaborateur($codeCollaborateur) {
        $this->codeCollaborateur = $codeCollaborateur;
        return $this;
    }

    /**
     * Set the date cloture.
     *
     * @param DateTime|null $dateCloture The date cloture.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setDateCloture(DateTime $dateCloture = null) {
        $this->dateCloture = $dateCloture;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the intitule.
     *
     * @param string $intitule The intitule.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setIntitule($intitule) {
        $this->intitule = $intitule;
        return $this;
    }

    /**
     * Set the num uniq.
     *
     * @param string $numUniq The num uniq.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setNumUniq($numUniq) {
        $this->numUniq = $numUniq;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return HistoriqueNotes Returns this Historique notes.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }
}
