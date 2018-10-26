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


/**
 * Const tab tva achat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ConstTabTvaAchat {

	/**
	 * Code tva article.
	 *
	 * @var string
	 */
	private $codeTvaArticle;

	/**
	 * Code tva fourn.
	 *
	 * @var string
	 */
	private $codeTvaFourn;

	/**
	 * Compte tva.
	 *
	 * @var string
	 */
	private $compteTva;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Taux tva.
	 *
	 * @var float
	 */
	private $tauxTva;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code tva article.
	 *
	 * @return string Returns the code tva article.
	 */
	public function getCodeTvaArticle() {
		return $this->codeTvaArticle;
	}

	/**
	 * Get the code tva fourn.
	 *
	 * @return string Returns the code tva fourn.
	 */
	public function getCodeTvaFourn() {
		return $this->codeTvaFourn;
	}

	/**
	 * Get the compte tva.
	 *
	 * @return string Returns the compte tva.
	 */
	public function getCompteTva() {
		return $this->compteTva;
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
	 * Get the taux tva.
	 *
	 * @return float Returns the taux tva.
	 */
	public function getTauxTva() {
		return $this->tauxTva;
	}

	/**
	 * Set the code tva article.
	 *
	 * @param string $codeTvaArticle The code tva article.
	 * @return ConstTabTvaAchat Returns this const tab tva achat.
	 */
	public function setCodeTvaArticle($codeTvaArticle) {
		$this->codeTvaArticle = $codeTvaArticle;
		return $this;
	}

	/**
	 * Set the code tva fourn.
	 *
	 * @param string $codeTvaFourn The code tva fourn.
	 * @return ConstTabTvaAchat Returns this const tab tva achat.
	 */
	public function setCodeTvaFourn($codeTvaFourn) {
		$this->codeTvaFourn = $codeTvaFourn;
		return $this;
	}

	/**
	 * Set the compte tva.
	 *
	 * @param string $compteTva The compte tva.
	 * @return ConstTabTvaAchat Returns this const tab tva achat.
	 */
	public function setCompteTva($compteTva) {
		$this->compteTva = $compteTva;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return ConstTabTvaAchat Returns this const tab tva achat.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the taux tva.
	 *
	 * @param float $tauxTva The taux tva.
	 * @return ConstTabTvaAchat Returns this const tab tva achat.
	 */
	public function setTauxTva($tauxTva) {
		$this->tauxTva = $tauxTva;
		return $this;
	}

}
