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
 * Const tab anal achat model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ConstTabAnalAchat {

	/**
	 * Code anal article.
	 *
	 * @var string
	 */
	private $codeAnalArticle;

	/**
	 * Code anal fourn.
	 *
	 * @var string
	 */
	private $codeAnalFourn;

	/**
	 * Code centre.
	 *
	 * @var string
	 */
	private $codeCentre;

	/**
	 * Code nature.
	 *
	 * @var string
	 */
	private $codeNature;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code anal article.
	 *
	 * @return string Returns the code anal article.
	 */
	public function getCodeAnalArticle() {
		return $this->codeAnalArticle;
	}

	/**
	 * Get the code anal fourn.
	 *
	 * @return string Returns the code anal fourn.
	 */
	public function getCodeAnalFourn() {
		return $this->codeAnalFourn;
	}

	/**
	 * Get the code centre.
	 *
	 * @return string Returns the code centre.
	 */
	public function getCodeCentre() {
		return $this->codeCentre;
	}

	/**
	 * Get the code nature.
	 *
	 * @return string Returns the code nature.
	 */
	public function getCodeNature() {
		return $this->codeNature;
	}

	/**
	 * Set the code anal article.
	 *
	 * @param string $codeAnalArticle The code anal article.
	 * @return ConstTabAnalAchat Returns this const tab anal achat.
	 */
	public function setCodeAnalArticle($codeAnalArticle) {
		$this->codeAnalArticle = $codeAnalArticle;
		return $this;
	}

	/**
	 * Set the code anal fourn.
	 *
	 * @param string $codeAnalFourn The code anal fourn.
	 * @return ConstTabAnalAchat Returns this const tab anal achat.
	 */
	public function setCodeAnalFourn($codeAnalFourn) {
		$this->codeAnalFourn = $codeAnalFourn;
		return $this;
	}

	/**
	 * Set the code centre.
	 *
	 * @param string $codeCentre The code centre.
	 * @return ConstTabAnalAchat Returns this const tab anal achat.
	 */
	public function setCodeCentre($codeCentre) {
		$this->codeCentre = $codeCentre;
		return $this;
	}

	/**
	 * Set the code nature.
	 *
	 * @param string $codeNature The code nature.
	 * @return ConstTabAnalAchat Returns this const tab anal achat.
	 */
	public function setCodeNature($codeNature) {
		$this->codeNature = $codeNature;
		return $this;
	}

}
