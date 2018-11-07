<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QGI;

use DateTime;

/**
 * Notes fichiers model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class NotesFichiers {

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Nom fichier.
     *
     * @var string
     */
    private $nomFichier;

    /**
     * Num note.
     *
     * @var string
     */
    private $numNote;

    /**
     * Origine fichier.
     *
     * @var string
     */
    private $origineFichier;

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
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the nom fichier.
     *
     * @return string Returns the nom fichier.
     */
    public function getNomFichier() {
        return $this->nomFichier;
    }

    /**
     * Get the num note.
     *
     * @return string Returns the num note.
     */
    public function getNumNote() {
        return $this->numNote;
    }

    /**
     * Get the origine fichier.
     *
     * @return string Returns the origine fichier.
     */
    public function getOrigineFichier() {
        return $this->origineFichier;
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
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return NotesFichiers Returns this notes fichiers.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the nom fichier.
     *
     * @param string $nomFichier The nom fichier.
     * @return NotesFichiers Returns this notes fichiers.
     */
    public function setNomFichier($nomFichier) {
        $this->nomFichier = $nomFichier;
        return $this;
    }

    /**
     * Set the num note.
     *
     * @param string $numNote The num note.
     * @return NotesFichiers Returns this notes fichiers.
     */
    public function setNumNote($numNote) {
        $this->numNote = $numNote;
        return $this;
    }

    /**
     * Set the origine fichier.
     *
     * @param string $origineFichier The origine fichier.
     * @return NotesFichiers Returns this notes fichiers.
     */
    public function setOrigineFichier($origineFichier) {
        $this->origineFichier = $origineFichier;
        return $this;
    }

    /**
     * Set the titre.
     *
     * @param string $titre The titre.
     * @return NotesFichiers Returns this notes fichiers.
     */
    public function setTitre($titre) {
        $this->titre = $titre;
        return $this;
    }

}
