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
 * i compta droits journaux model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class iComptaDroitsJournaux {

	/**
	 * Code journal.
	 *
	 * @var string
	 */
	private $codeJournal;

	/**
	 * Code user.
	 *
	 * @var string
	 */
	private $codeUser;

	/**
	 * Flag.
	 *
	 * @var string
	 */
	private $flag;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * No doss cpta.
	 *
	 * @var string
	 */
	private $noDossCpta;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code journal.
	 *
	 * @return string Returns the code journal.
	 */
	public function getCodeJournal() {
		return $this->codeJournal;
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
	 * Get the flag.
	 *
	 * @return string Returns the flag.
	 */
	public function getFlag() {
		return $this->flag;
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
	 * Get the no doss cpta.
	 *
	 * @return string Returns the no doss cpta.
	 */
	public function getNoDossCpta() {
		return $this->noDossCpta;
	}

	/**
	 * Set the code journal.
	 *
	 * @param string $codeJournal The code journal.
	 * @return iComptaDroitsJournaux Returns this i compta droits journaux.
	 */
	public function setCodeJournal($codeJournal) {
		$this->codeJournal = $codeJournal;
		return $this;
	}

	/**
	 * Set the code user.
	 *
	 * @param string $codeUser The code user.
	 * @return iComptaDroitsJournaux Returns this i compta droits journaux.
	 */
	public function setCodeUser($codeUser) {
		$this->codeUser = $codeUser;
		return $this;
	}

	/**
	 * Set the flag.
	 *
	 * @param string $flag The flag.
	 * @return iComptaDroitsJournaux Returns this i compta droits journaux.
	 */
	public function setFlag($flag) {
		$this->flag = $flag;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return iComptaDroitsJournaux Returns this i compta droits journaux.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the no doss cpta.
	 *
	 * @param string $noDossCpta The no doss cpta.
	 * @return iComptaDroitsJournaux Returns this i compta droits journaux.
	 */
	public function setNoDossCpta($noDossCpta) {
		$this->noDossCpta = $noDossCpta;
		return $this;
	}

}
