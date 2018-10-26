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
 * Lst diffusion tetes model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class LstDiffusionTetes {

	/**
	 * Code.
	 *
	 * @var string
	 */
	private $code;

	/**
	 * Libelle.
	 *
	 * @var string
	 */
	private $libelle;

	/**
	 * Type.
	 *
	 * @var int
	 */
	private $type;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code.
	 *
	 * @return string Returns the code.
	 */
	public function getCode() {
		return $this->code;
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
	 * Get the type.
	 *
	 * @return int Returns the type.
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return LstDiffusionTetes Returns this lst diffusion tetes.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return LstDiffusionTetes Returns this lst diffusion tetes.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

	/**
	 * Set the type.
	 *
	 * @param int $type The type.
	 * @return LstDiffusionTetes Returns this lst diffusion tetes.
	 */
	public function setType($type) {
		$this->type = $type;
		return $this;
	}

}
