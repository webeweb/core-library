<?php

/**
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Quadratus\Model\QPaie;


/**
 * Regroupement ed bul entete model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RegroupementEdBulEntete {

	/**
	 * Afficher.
	 *
	 * @var boolean
	 */
	private $afficher;

	/**
	 * Code regroup ed bul.
	 *
	 * @var string
	 */
	private $codeRegroupEdBul;

	/**
	 * Code titre.
	 *
	 * @var string
	 */
	private $codeTitre;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Quadra.
	 *
	 * @var boolean
	 */
	private $quadra;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the afficher.
	 *
	 * @return boolean Returns the afficher.
	 */
	public function getAfficher() {
		return $this->afficher;
	}

	/**
	 * Get the code regroup ed bul.
	 *
	 * @return string Returns the code regroup ed bul.
	 */
	public function getCodeRegroupEdBul() {
		return $this->codeRegroupEdBul;
	}

	/**
	 * Get the code titre.
	 *
	 * @return string Returns the code titre.
	 */
	public function getCodeTitre() {
		return $this->codeTitre;
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
	 * Get the quadra.
	 *
	 * @return boolean Returns the quadra.
	 */
	public function getQuadra() {
		return $this->quadra;
	}

	/**
	 * Set the afficher.
	 *
	 * @param boolean $afficher The afficher.
	 * @return RegroupementEdBulEntete Returns this regroupement ed bul entete.
	 */
	public function setAfficher($afficher) {
		$this->afficher = $afficher;
		return $this;
	}

	/**
	 * Set the code regroup ed bul.
	 *
	 * @param string $codeRegroupEdBul The code regroup ed bul.
	 * @return RegroupementEdBulEntete Returns this regroupement ed bul entete.
	 */
	public function setCodeRegroupEdBul($codeRegroupEdBul) {
		$this->codeRegroupEdBul = $codeRegroupEdBul;
		return $this;
	}

	/**
	 * Set the code titre.
	 *
	 * @param string $codeTitre The code titre.
	 * @return RegroupementEdBulEntete Returns this regroupement ed bul entete.
	 */
	public function setCodeTitre($codeTitre) {
		$this->codeTitre = $codeTitre;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return RegroupementEdBulEntete Returns this regroupement ed bul entete.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the quadra.
	 *
	 * @param boolean $quadra The quadra.
	 * @return RegroupementEdBulEntete Returns this regroupement ed bul entete.
	 */
	public function setQuadra($quadra) {
		$this->quadra = $quadra;
		return $this;
	}

}
