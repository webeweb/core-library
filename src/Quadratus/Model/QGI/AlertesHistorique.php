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
 * Alertes historique model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class AlertesHistorique {

	/**
	 * A r envoye.
	 *
	 * @var boolean
	 */
	private $aREnvoye;

	/**
	 * Code client.
	 *
	 * @var string
	 */
	private $codeClient;

	/**
	 * Code collab d s t.
	 *
	 * @var string
	 */
	private $codeCollabDST;

	/**
	 * Code collab o r g.
	 *
	 * @var string
	 */
	private $codeCollabORG;

	/**
	 * Date creation.
	 *
	 * @var DateTime
	 */
	private $dateCreation;

	/**
	 * Date declenchement.
	 *
	 * @var DateTime
	 */
	private $dateDeclenchement;

	/**
	 * Date reponse.
	 *
	 * @var DateTime
	 */
	private $dateReponse;

	/**
	 * I d alerte histo.
	 *
	 * @var int
	 */
	private $iDAlerteHisto;

	/**
	 * Texte alerte.
	 *
	 * @var string
	 */
	private $texteAlerte;

	/**
	 * Texte reponse.
	 *
	 * @var string
	 */
	private $texteReponse;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the a r envoye.
	 *
	 * @return boolean Returns the a r envoye.
	 */
	public function getAREnvoye() {
		return $this->aREnvoye;
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
	 * Get the code collab d s t.
	 *
	 * @return string Returns the code collab d s t.
	 */
	public function getCodeCollabDST() {
		return $this->codeCollabDST;
	}

	/**
	 * Get the code collab o r g.
	 *
	 * @return string Returns the code collab o r g.
	 */
	public function getCodeCollabORG() {
		return $this->codeCollabORG;
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
	 * Get the date declenchement.
	 *
	 * @return DateTime Returns the date declenchement.
	 */
	public function getDateDeclenchement() {
		return $this->dateDeclenchement;
	}

	/**
	 * Get the date reponse.
	 *
	 * @return DateTime Returns the date reponse.
	 */
	public function getDateReponse() {
		return $this->dateReponse;
	}

	/**
	 * Get the i d alerte histo.
	 *
	 * @return int Returns the i d alerte histo.
	 */
	public function getIDAlerteHisto() {
		return $this->iDAlerteHisto;
	}

	/**
	 * Get the texte alerte.
	 *
	 * @return string Returns the texte alerte.
	 */
	public function getTexteAlerte() {
		return $this->texteAlerte;
	}

	/**
	 * Get the texte reponse.
	 *
	 * @return string Returns the texte reponse.
	 */
	public function getTexteReponse() {
		return $this->texteReponse;
	}

	/**
	 * Set the a r envoye.
	 *
	 * @param boolean $aREnvoye The a r envoye.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setAREnvoye($aREnvoye) {
		$this->aREnvoye = $aREnvoye;
		return $this;
	}

	/**
	 * Set the code client.
	 *
	 * @param string $codeClient The code client.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setCodeClient($codeClient) {
		$this->codeClient = $codeClient;
		return $this;
	}

	/**
	 * Set the code collab d s t.
	 *
	 * @param string $codeCollabDST The code collab d s t.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setCodeCollabDST($codeCollabDST) {
		$this->codeCollabDST = $codeCollabDST;
		return $this;
	}

	/**
	 * Set the code collab o r g.
	 *
	 * @param string $codeCollabORG The code collab o r g.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setCodeCollabORG($codeCollabORG) {
		$this->codeCollabORG = $codeCollabORG;
		return $this;
	}

	/**
	 * Set the date creation.
	 *
	 * @param DateTime $dateCreation The date creation.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setDateCreation(DateTime $dateCreation = null) {
		$this->dateCreation = $dateCreation;
		return $this;
	}

	/**
	 * Set the date declenchement.
	 *
	 * @param DateTime $dateDeclenchement The date declenchement.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setDateDeclenchement(DateTime $dateDeclenchement = null) {
		$this->dateDeclenchement = $dateDeclenchement;
		return $this;
	}

	/**
	 * Set the date reponse.
	 *
	 * @param DateTime $dateReponse The date reponse.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setDateReponse(DateTime $dateReponse = null) {
		$this->dateReponse = $dateReponse;
		return $this;
	}

	/**
	 * Set the i d alerte histo.
	 *
	 * @param int $iDAlerteHisto The i d alerte histo.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setIDAlerteHisto($iDAlerteHisto) {
		$this->iDAlerteHisto = $iDAlerteHisto;
		return $this;
	}

	/**
	 * Set the texte alerte.
	 *
	 * @param string $texteAlerte The texte alerte.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setTexteAlerte($texteAlerte) {
		$this->texteAlerte = $texteAlerte;
		return $this;
	}

	/**
	 * Set the texte reponse.
	 *
	 * @param string $texteReponse The texte reponse.
	 * @return AlertesHistorique Returns this alertes historique.
	 */
	public function setTexteReponse($texteReponse) {
		$this->texteReponse = $texteReponse;
		return $this;
	}

}
