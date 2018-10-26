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
 * Envoi s m s fact model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class EnvoiSMSFact {

	/**
	 * Code action.
	 *
	 * @var string
	 */
	private $codeAction;

	/**
	 * Code collaborateur.
	 *
	 * @var string
	 */
	private $codeCollaborateur;

	/**
	 * Msg client.
	 *
	 * @var string
	 */
	private $msgClient;

	/**
	 * Msg representant.
	 *
	 * @var string
	 */
	private $msgRepresentant;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
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
	 * Get the code collaborateur.
	 *
	 * @return string Returns the code collaborateur.
	 */
	public function getCodeCollaborateur() {
		return $this->codeCollaborateur;
	}

	/**
	 * Get the msg client.
	 *
	 * @return string Returns the msg client.
	 */
	public function getMsgClient() {
		return $this->msgClient;
	}

	/**
	 * Get the msg representant.
	 *
	 * @return string Returns the msg representant.
	 */
	public function getMsgRepresentant() {
		return $this->msgRepresentant;
	}

	/**
	 * Set the code action.
	 *
	 * @param string $codeAction The code action.
	 * @return EnvoiSMSFact Returns this envoi s m s fact.
	 */
	public function setCodeAction($codeAction) {
		$this->codeAction = $codeAction;
		return $this;
	}

	/**
	 * Set the code collaborateur.
	 *
	 * @param string $codeCollaborateur The code collaborateur.
	 * @return EnvoiSMSFact Returns this envoi s m s fact.
	 */
	public function setCodeCollaborateur($codeCollaborateur) {
		$this->codeCollaborateur = $codeCollaborateur;
		return $this;
	}

	/**
	 * Set the msg client.
	 *
	 * @param string $msgClient The msg client.
	 * @return EnvoiSMSFact Returns this envoi s m s fact.
	 */
	public function setMsgClient($msgClient) {
		$this->msgClient = $msgClient;
		return $this;
	}

	/**
	 * Set the msg representant.
	 *
	 * @param string $msgRepresentant The msg representant.
	 * @return EnvoiSMSFact Returns this envoi s m s fact.
	 */
	public function setMsgRepresentant($msgRepresentant) {
		$this->msgRepresentant = $msgRepresentant;
		return $this;
	}

}
