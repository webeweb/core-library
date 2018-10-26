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


/**
 * i espace client droits model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class iEspaceClientDroits {

	/**
	 * Code collab messages.
	 *
	 * @var string
	 */
	private $codeCollabMessages;

	/**
	 * Code user.
	 *
	 * @var string
	 */
	private $codeUser;

	/**
	 * Dossier client.
	 *
	 * @var string
	 */
	private $dossierClient;

	/**
	 * Fct documents.
	 *
	 * @var boolean
	 */
	private $fctDocuments;

	/**
	 * Fct documents autre.
	 *
	 * @var int
	 */
	private $fctDocumentsAutre;

	/**
	 * Fct documents compta.
	 *
	 * @var int
	 */
	private $fctDocumentsCompta;

	/**
	 * Fct documents juridique.
	 *
	 * @var int
	 */
	private $fctDocumentsJuridique;

	/**
	 * Fct documents paie.
	 *
	 * @var int
	 */
	private $fctDocumentsPaie;

	/**
	 * Fct infos.
	 *
	 * @var boolean
	 */
	private $fctInfos;

	/**
	 * Fct messagerie.
	 *
	 * @var int
	 */
	private $fctMessagerie;

	/**
	 * Nom user.
	 *
	 * @var string
	 */
	private $nomUser;

	/**
	 * Password.
	 *
	 * @var string
	 */
	private $password;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code collab messages.
	 *
	 * @return string Returns the code collab messages.
	 */
	public function getCodeCollabMessages() {
		return $this->codeCollabMessages;
	}

	/**
	 * Get the code user.
	 *
	 * @return string Returns the code user.
	 */
	public function getCodeUser() {
		return $this->codeUser;
	}

	/**
	 * Get the dossier client.
	 *
	 * @return string Returns the dossier client.
	 */
	public function getDossierClient() {
		return $this->dossierClient;
	}

	/**
	 * Get the fct documents.
	 *
	 * @return boolean Returns the fct documents.
	 */
	public function getFctDocuments() {
		return $this->fctDocuments;
	}

	/**
	 * Get the fct documents autre.
	 *
	 * @return int Returns the fct documents autre.
	 */
	public function getFctDocumentsAutre() {
		return $this->fctDocumentsAutre;
	}

	/**
	 * Get the fct documents compta.
	 *
	 * @return int Returns the fct documents compta.
	 */
	public function getFctDocumentsCompta() {
		return $this->fctDocumentsCompta;
	}

	/**
	 * Get the fct documents juridique.
	 *
	 * @return int Returns the fct documents juridique.
	 */
	public function getFctDocumentsJuridique() {
		return $this->fctDocumentsJuridique;
	}

	/**
	 * Get the fct documents paie.
	 *
	 * @return int Returns the fct documents paie.
	 */
	public function getFctDocumentsPaie() {
		return $this->fctDocumentsPaie;
	}

	/**
	 * Get the fct infos.
	 *
	 * @return boolean Returns the fct infos.
	 */
	public function getFctInfos() {
		return $this->fctInfos;
	}

	/**
	 * Get the fct messagerie.
	 *
	 * @return int Returns the fct messagerie.
	 */
	public function getFctMessagerie() {
		return $this->fctMessagerie;
	}

	/**
	 * Get the nom user.
	 *
	 * @return string Returns the nom user.
	 */
	public function getNomUser() {
		return $this->nomUser;
	}

	/**
	 * Get the password.
	 *
	 * @return string Returns the password.
	 */
	public function getPassword() {
		return $this->password;
	}

	/**
	 * Set the code collab messages.
	 *
	 * @param string $codeCollabMessages The code collab messages.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setCodeCollabMessages($codeCollabMessages) {
		$this->codeCollabMessages = $codeCollabMessages;
		return $this;
	}

	/**
	 * Set the code user.
	 *
	 * @param string $codeUser The code user.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setCodeUser($codeUser) {
		$this->codeUser = $codeUser;
		return $this;
	}

	/**
	 * Set the dossier client.
	 *
	 * @param string $dossierClient The dossier client.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setDossierClient($dossierClient) {
		$this->dossierClient = $dossierClient;
		return $this;
	}

	/**
	 * Set the fct documents.
	 *
	 * @param boolean $fctDocuments The fct documents.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctDocuments($fctDocuments) {
		$this->fctDocuments = $fctDocuments;
		return $this;
	}

	/**
	 * Set the fct documents autre.
	 *
	 * @param int $fctDocumentsAutre The fct documents autre.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctDocumentsAutre($fctDocumentsAutre) {
		$this->fctDocumentsAutre = $fctDocumentsAutre;
		return $this;
	}

	/**
	 * Set the fct documents compta.
	 *
	 * @param int $fctDocumentsCompta The fct documents compta.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctDocumentsCompta($fctDocumentsCompta) {
		$this->fctDocumentsCompta = $fctDocumentsCompta;
		return $this;
	}

	/**
	 * Set the fct documents juridique.
	 *
	 * @param int $fctDocumentsJuridique The fct documents juridique.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctDocumentsJuridique($fctDocumentsJuridique) {
		$this->fctDocumentsJuridique = $fctDocumentsJuridique;
		return $this;
	}

	/**
	 * Set the fct documents paie.
	 *
	 * @param int $fctDocumentsPaie The fct documents paie.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctDocumentsPaie($fctDocumentsPaie) {
		$this->fctDocumentsPaie = $fctDocumentsPaie;
		return $this;
	}

	/**
	 * Set the fct infos.
	 *
	 * @param boolean $fctInfos The fct infos.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctInfos($fctInfos) {
		$this->fctInfos = $fctInfos;
		return $this;
	}

	/**
	 * Set the fct messagerie.
	 *
	 * @param int $fctMessagerie The fct messagerie.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setFctMessagerie($fctMessagerie) {
		$this->fctMessagerie = $fctMessagerie;
		return $this;
	}

	/**
	 * Set the nom user.
	 *
	 * @param string $nomUser The nom user.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setNomUser($nomUser) {
		$this->nomUser = $nomUser;
		return $this;
	}

	/**
	 * Set the password.
	 *
	 * @param string $password The password.
	 * @return iEspaceClientDroits Returns this i espace client droits.
	 */
	public function setPassword($password) {
		$this->password = $password;
		return $this;
	}

}
