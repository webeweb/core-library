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
 * Regroupement ed bul titres model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QPaie
 */
class RegroupementEdBulTitres {

	/**
	 * Afficher.
	 *
	 * @var boolean
	 */
	private $afficher;

	/**
	 * Code titre.
	 *
	 * @var string
	 */
	private $codeTitre;

	/**
	 * Quadra.
	 *
	 * @var boolean
	 */
	private $quadra;

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
	 * Get the afficher.
	 *
	 * @return boolean Returns the afficher.
	 */
	public function getAfficher() {
		return $this->afficher;
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
	 * Get the quadra.
	 *
	 * @return boolean Returns the quadra.
	 */
	public function getQuadra() {
		return $this->quadra;
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
	 * Set the afficher.
	 *
	 * @param boolean $afficher The afficher.
	 * @return RegroupementEdBulTitres Returns this regroupement ed bul titres.
	 */
	public function setAfficher($afficher) {
		$this->afficher = $afficher;
		return $this;
	}

	/**
	 * Set the code titre.
	 *
	 * @param string $codeTitre The code titre.
	 * @return RegroupementEdBulTitres Returns this regroupement ed bul titres.
	 */
	public function setCodeTitre($codeTitre) {
		$this->codeTitre = $codeTitre;
		return $this;
	}

	/**
	 * Set the quadra.
	 *
	 * @param boolean $quadra The quadra.
	 * @return RegroupementEdBulTitres Returns this regroupement ed bul titres.
	 */
	public function setQuadra($quadra) {
		$this->quadra = $quadra;
		return $this;
	}

	/**
	 * Set the titre.
	 *
	 * @param string $titre The titre.
	 * @return RegroupementEdBulTitres Returns this regroupement ed bul titres.
	 */
	public function setTitre($titre) {
		$this->titre = $titre;
		return $this;
	}

}
