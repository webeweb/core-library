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
 * Cartes appel etebac model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class CartesAppelEtebac {

	/**
	 * Carte appel.
	 *
	 * @var string
	 */
	private $carteAppel;

	/**
	 * Code banque.
	 *
	 * @var string
	 */
	private $codeBanque;

	/**
	 * I d carte.
	 *
	 * @var string
	 */
	private $iDCarte;

	/**
	 * Lg carte appel.
	 *
	 * @var string
	 */
	private $lgCarteAppel;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Type carte.
	 *
	 * @var string
	 */
	private $typeCarte;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the carte appel.
	 *
	 * @return string Returns the carte appel.
	 */
	public function getCarteAppel() {
		return $this->carteAppel;
	}

	/**
	 * Get the code banque.
	 *
	 * @return string Returns the code banque.
	 */
	public function getCodeBanque() {
		return $this->codeBanque;
	}

	/**
	 * Get the i d carte.
	 *
	 * @return string Returns the i d carte.
	 */
	public function getIDCarte() {
		return $this->iDCarte;
	}

	/**
	 * Get the lg carte appel.
	 *
	 * @return string Returns the lg carte appel.
	 */
	public function getLgCarteAppel() {
		return $this->lgCarteAppel;
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
	 * Get the type carte.
	 *
	 * @return string Returns the type carte.
	 */
	public function getTypeCarte() {
		return $this->typeCarte;
	}

	/**
	 * Set the carte appel.
	 *
	 * @param string $carteAppel The carte appel.
	 * @return CartesAppelEtebac Returns this cartes appel etebac.
	 */
	public function setCarteAppel($carteAppel) {
		$this->carteAppel = $carteAppel;
		return $this;
	}

	/**
	 * Set the code banque.
	 *
	 * @param string $codeBanque The code banque.
	 * @return CartesAppelEtebac Returns this cartes appel etebac.
	 */
	public function setCodeBanque($codeBanque) {
		$this->codeBanque = $codeBanque;
		return $this;
	}

	/**
	 * Set the i d carte.
	 *
	 * @param string $iDCarte The i d carte.
	 * @return CartesAppelEtebac Returns this cartes appel etebac.
	 */
	public function setIDCarte($iDCarte) {
		$this->iDCarte = $iDCarte;
		return $this;
	}

	/**
	 * Set the lg carte appel.
	 *
	 * @param string $lgCarteAppel The lg carte appel.
	 * @return CartesAppelEtebac Returns this cartes appel etebac.
	 */
	public function setLgCarteAppel($lgCarteAppel) {
		$this->lgCarteAppel = $lgCarteAppel;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return CartesAppelEtebac Returns this cartes appel etebac.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the type carte.
	 *
	 * @param string $typeCarte The type carte.
	 * @return CartesAppelEtebac Returns this cartes appel etebac.
	 */
	public function setTypeCarte($typeCarte) {
		$this->typeCarte = $typeCarte;
		return $this;
	}

}
