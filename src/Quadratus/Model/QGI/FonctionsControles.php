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
 * Fonctions controles model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class FonctionsControles {

	/**
	 * Intitule.
	 *
	 * @var string
	 */
	private $intitule;

	/**
	 * Mot controle.
	 *
	 * @var string
	 */
	private $motControle;

	/**
	 * Type.
	 *
	 * @var string
	 */
	private $type;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the intitule.
	 *
	 * @return string Returns the intitule.
	 */
	public function getIntitule() {
		return $this->intitule;
	}

	/**
	 * Get the mot controle.
	 *
	 * @return string Returns the mot controle.
	 */
	public function getMotControle() {
		return $this->motControle;
	}

	/**
	 * Get the type.
	 *
	 * @return string Returns the type.
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set the intitule.
	 *
	 * @param string $intitule The intitule.
	 * @return FonctionsControles Returns this fonctions controles.
	 */
	public function setIntitule($intitule) {
		$this->intitule = $intitule;
		return $this;
	}

	/**
	 * Set the mot controle.
	 *
	 * @param string $motControle The mot controle.
	 * @return FonctionsControles Returns this fonctions controles.
	 */
	public function setMotControle($motControle) {
		$this->motControle = $motControle;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param string $type The type.
	 * @return FonctionsControles Returns this fonctions controles.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

}
