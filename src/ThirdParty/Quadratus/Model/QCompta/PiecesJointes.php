<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta;

use DateTime;

/**
 * Pieces jointes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QCompta
 */
class PiecesJointes {

    /**
     * Auteur.
     *
     * @var string
     */
    private $auteur;

    /**
     * Date creation.
     *
     * @var DateTime
     */
    private $dateCreation;

    /**
     * Indice.
     *
     * @var int
     */
    private $indice;

    /**
     * Libelle.
     *
     * @var string
     */
    private $libelle;

    /**
     * Nom piece.
     *
     * @var string
     */
    private $nomPiece;

    /**
     * Num piece.
     *
     * @var int
     */
    private $numPiece;

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
     * Get the date creation.
     *
     * @return DateTime Returns the date creation.
     */
    public function getDateCreation() {
        return $this->dateCreation;
    }

    /**
     * Get the indice.
     *
     * @return int Returns the indice.
     */
    public function getIndice() {
        return $this->indice;
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
     * Get the nom piece.
     *
     * @return string Returns the nom piece.
     */
    public function getNomPiece() {
        return $this->nomPiece;
    }

    /**
     * Get the num piece.
     *
     * @return int Returns the num piece.
     */
    public function getNumPiece() {
        return $this->numPiece;
    }

    /**
     * Set the auteur.
     *
     * @param string $auteur The auteur.
     * @return PiecesJointes Returns this pieces jointes.
     */
    public function setAuteur($auteur) {
        $this->auteur = $auteur;
        return $this;
    }

    /**
     * Set the date creation.
     *
     * @param DateTime $dateCreation The date creation.
     * @return PiecesJointes Returns this pieces jointes.
     */
    public function setDateCreation(DateTime $dateCreation = null) {
        $this->dateCreation = $dateCreation;
        return $this;
    }

    /**
     * Set the indice.
     *
     * @param int $indice The indice.
     * @return PiecesJointes Returns this pieces jointes.
     */
    public function setIndice($indice) {
        $this->indice = $indice;
        return $this;
    }

    /**
     * Set the libelle.
     *
     * @param string $libelle The libelle.
     * @return PiecesJointes Returns this pieces jointes.
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;
        return $this;
    }

    /**
     * Set the nom piece.
     *
     * @param string $nomPiece The nom piece.
     * @return PiecesJointes Returns this pieces jointes.
     */
    public function setNomPiece($nomPiece) {
        $this->nomPiece = $nomPiece;
        return $this;
    }

    /**
     * Set the num piece.
     *
     * @param int $numPiece The num piece.
     * @return PiecesJointes Returns this pieces jointes.
     */
    public function setNumPiece($numPiece) {
        $this->numPiece = $numPiece;
        return $this;
    }
}
