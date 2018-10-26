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
 * Sous famille article model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\QGI
 */
class SousFamilleArticle {

	/**
	 * Activite principale.
	 *
	 * @var string
	 */
	private $activitePrincipale;

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
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the activite principale.
	 *
	 * @return string Returns the activite principale.
	 */
	public function getActivitePrincipale() {
		return $this->activitePrincipale;
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
	 * Set the activite principale.
	 *
	 * @param string $activitePrincipale The activite principale.
	 * @return SousFamilleArticle Returns this sous famille article.
	 */
	public function setActivitePrincipale($activitePrincipale) {
		$this->activitePrincipale = $activitePrincipale;
		return $this;
	}

	/**
	 * Set the code.
	 *
	 * @param string $code The code.
	 * @return SousFamilleArticle Returns this sous famille article.
	 */
	public function setCode($code) {
		$this->code = $code;
		return $this;
	}

	/**
	 * Set the libelle.
	 *
	 * @param string $libelle The libelle.
	 * @return SousFamilleArticle Returns this sous famille article.
	 */
	public function setLibelle($libelle) {
		$this->libelle = $libelle;
		return $this;
	}

}
