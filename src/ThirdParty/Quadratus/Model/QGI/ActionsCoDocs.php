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
 * Actions co docs.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ActionsCoDocs {

    /**
     * Auteur.
     *
     * @var string
     */
    private $auteur;

    /**
     * Code action.
     *
     * @var string
     */
    private $codeAction;

    /**
     * Code client.
     *
     * @var string
     */
    private $codeClient;

    /**
     * Code doc.
     *
     * @var string
     */
    private $codeDoc;

    /**
     * Code manif.
     *
     * @var string
     */
    private $codeManif;

    /**
     * Date creation.
     *
     * @var DateTime|null
     */
    private $dateCreation;

    /**
     * Date modification.
     *
     * @var DateTime|null
     */
    private $dateModification;

    /**
     * Emplacement fichier.
     *
     * @var string
     */
    private $emplacementFichier;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Numero.
     *
     * @var int
     */
    private $numero;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO;
    }

    /**
     * Get the auteur.
     *
     * @return string Returns the auteur.
     */
    public function getAuteur() {
        return $this->auteur;
    }

    /**
     * Get the code action.
     *
     * @return string Returns the code action.
     */
    public function getCodeAction() {
        return $this->codeAction;
    }

    /**
     * Get the code client.
     *
     * @return string Returns the code client.
     */
    public function getCodeClient() {
        return $this->codeClient;
    }

    /**
     * Get the code doc.
     *
     * @return string Returns the code doc.
     */
    public function getCodeDoc() {
        return $this->codeDoc;
    }

    /**
     * Get the code manif.
     *
     * @return string Returns the code manif.
     */
    public function getCodeManif() {
        return $this->codeManif;
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
     * Get the date modification.
     *
     * @return DateTime|null Returns the date modification.
     */
    public function getDateModification() {
        return $this->dateModification;
    }

    /**
     * Get the emplacement fichier.
     *
     * @return string Returns the emplacement fichier.
     */
    public function getEmplacementFichier() {
        return $this->emplacementFichier;
    }

    /**
     * Get the libelle.
     *
     * @return string Returns the libelle.
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Get the numero.
     *
     * @return int Returns the numero.
     */
    public function getNumero() {
        return $this->numero;
    }

    /**
     * Set the auteur.
     *
     * @param string $auteur The auteur.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the code action.
     *
     * @param string $codeAction The code action.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeAction($codeAction) {
        $this->codeAction = $codeAction;
        return $this;
    }

    /**
     * Set the code client.
     *
     * @param string $codeClient The code client.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeClient($codeClient) {
        $this->codeClient = $codeClient;
        return $this;
    }

    /**
     * Set the code doc.
     *
     * @param string $codeDoc The code doc.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeDoc($codeDoc) {
        $this->codeDoc = $codeDoc;
        return $this;
    }

    /**
     * Set the code manif.
     *
     * @param string $codeManif The code manif.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setCodeManif($codeManif) {
        $this->codeManif = $codeManif;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime|null $dateCreation The date creation.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the date modification.
     *
     * @param DateTime|null $dateModification The date modification.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setDateModification(DateTime $dateModification = null) {
        $this->dateModification = $dateModification;
        return $this;
    }

    /**
     * Set the emplacement fichier.
     *
     * @param string $emplacementFichier The emplacement fichier.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setEmplacementFichier($emplacementFichier) {
        $this->emplacementFichier = $emplacementFichier;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the numero.
     *
     * @param int $numero The numero.
     * @return ActionsCoDocs Returns this Actions co docs.
     */
    public function setNumero($numero) {
        $this->numero = $numero;
        return $this;
    }
}
