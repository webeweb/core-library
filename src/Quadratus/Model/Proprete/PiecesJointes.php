<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\Proprete;

use DateTime;

/**
 * Pieces jointes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class PiecesJointes {

	/**
	 * A publier espace client.
	 *
	 * @var boolean
	 */
	private $aPublierEspaceClient;

	/**
	 * A publier web.
	 *
	 * @var boolean
	 */
	private $aPublierWeb;

	/**
	 * Archive.
	 *
	 * @var boolean
	 */
	private $archive;

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
	 * Nb doc attache.
	 *
	 * @var int
	 */
	private $nbDocAttache;

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
	 * Get the a publier espace client.
	 *
	 * @return boolean Returns the a publier espace client.
	 */
	public function getAPublierEspaceClient() {
		return $this->aPublierEspaceClient;
	}

	/**
	 * Get the a publier web.
	 *
	 * @return boolean Returns the a publier web.
	 */
	public function getAPublierWeb() {
		return $this->aPublierWeb;
	}

	/**
	 * Get the archive.
	 *
	 * @return boolean Returns the archive.
	 */
	public function getArchive() {
		return $this->archive;
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
	 * Get the nb doc attache.
	 *
	 * @return int Returns the nb doc attache.
	 */
	public function getNbDocAttache() {
		return $this->nbDocAttache;
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
	 * Set the a publier espace client.
	 *
	 * @param boolean $aPublierEspaceClient The a publier espace client.
	 * @return PiecesJointes Returns this pieces jointes.
	 */
	public function setAPublierEspaceClient($aPublierEspaceClient) {
		$this->aPublierEspaceClient = $aPublierEspaceClient;
		return $this;
	}

	/**
	 * Set the a publier web.
	 *
	 * @param boolean $aPublierWeb The a publier web.
	 * @return PiecesJointes Returns this pieces jointes.
	 */
	public function setAPublierWeb($aPublierWeb) {
		$this->aPublierWeb = $aPublierWeb;
		return $this;
	}

	/**
	 * Set the archive.
	 *
	 * @param boolean $archive The archive.
	 * @return PiecesJointes Returns this pieces jointes.
	 */
	public function setArchive($archive) {
		$this->archive = $archive;
		return $this;
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
	 * Set the nb doc attache.
	 *
	 * @param int $nbDocAttache The nb doc attache.
	 * @return PiecesJointes Returns this pieces jointes.
	 */
	public function setNbDocAttache($nbDocAttache) {
		$this->nbDocAttache = $nbDocAttache;
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
