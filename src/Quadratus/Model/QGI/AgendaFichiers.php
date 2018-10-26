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
 * Agenda fichiers model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AgendaFichiers {

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Date ajout.
	 *
	 * @var DateTime
	 */
	private $dateAjout;

	/**
	 * Nom fichier.
	 *
	 * @var string
	 */
	private $nomFichier;

	/**
	 * Origine fichier.
	 *
	 * @var string
	 */
	private $origineFichier;

	/**
	 * Ref g u i d.
	 *
	 * @var string
	 */
	private $refGUID;

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
	 * Get the code client.
	 *
	 * @return string Returns the code client.
	 */
	public function getCodeClient() {
		return $this->codeClient;
	}

	/**
	 * Get the date ajout.
	 *
	 * @return DateTime Returns the date ajout.
	 */
	public function getDateAjout() {
		return $this->dateAjout;
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
	 * Get the origine fichier.
	 *
	 * @return string Returns the origine fichier.
	 */
	public function getOrigineFichier() {
		return $this->origineFichier;
	}

	/**
	 * Get the ref g u i d.
	 *
	 * @return string Returns the ref g u i d.
	 */
	public function getRefGUID() {
		return $this->refGUID;
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
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return AgendaFichiers Returns this agenda fichiers.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the date ajout.
	 *
	 * @param DateTime $dateAjout The date ajout.
	 * @return AgendaFichiers Returns this agenda fichiers.
	 */
	public function setDateAjout(DateTime $dateAjout = null) {
		$this->dateAjout = $dateAjout;
		return $this;
	}

	/**
	 * Set the nom fichier.
	 *
	 * @param string $nomFichier The nom fichier.
	 * @return AgendaFichiers Returns this agenda fichiers.
	 */
	public function setNomFichier($nomFichier) {
		$this->nomFichier = $nomFichier;
		return $this;
	}

	/**
	 * Set the origine fichier.
	 *
	 * @param string $origineFichier The origine fichier.
	 * @return AgendaFichiers Returns this agenda fichiers.
	 */
	public function setOrigineFichier($origineFichier) {
		$this->origineFichier = $origineFichier;
		return $this;
	}

	/**
	 * Set the ref g u i d.
	 *
	 * @param string $refGUID The ref g u i d.
	 * @return AgendaFichiers Returns this agenda fichiers.
	 */
	public function setRefGUID($refGUID) {
		$this->refGUID = $refGUID;
		return $this;
	}

	/**
	 * Set the titre.
	 *
	 * @param string $titre The titre.
	 * @return AgendaFichiers Returns this agenda fichiers.
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

}
