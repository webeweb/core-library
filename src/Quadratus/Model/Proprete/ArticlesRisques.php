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
 * Articles risques model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class ArticlesRisques {

	/**
	 * Code article.
	 *
	 * @var string
	 */
	private $codeArticle;

	/**
	 * Code risque.
	 *
	 * @var string
	 */
	private $codeRisque;

	/**
	 * Constructor.
	 */
	public function __construct() {
		// NOTHING TO DO;
	}

	/**
	 * Get the code article.
	 *
	 * @return string Returns the code article.
	 */
	public function getCodeArticle() {
		return $this->codeArticle;
	}

	/**
	 * Get the code risque.
	 *
	 * @return string Returns the code risque.
	 */
	public function getCodeRisque() {
		return $this->codeRisque;
	}

	/**
	 * Set the code article.
	 *
	 * @param string $codeArticle The code article.
	 * @return ArticlesRisques Returns this articles risques.
	 */
	public function setCodeArticle($codeArticle) {
		$this->codeArticle = $codeArticle;
		return $this;
	}

	/**
	 * Set the code risque.
	 *
	 * @param string $codeRisque The code risque.
	 * @return ArticlesRisques Returns this articles risques.
	 */
	public function setCodeRisque($codeRisque) {
		$this->codeRisque = $codeRisque;
		return $this;
	}

}
