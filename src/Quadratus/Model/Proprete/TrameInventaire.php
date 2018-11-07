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
 * Trame inventaire model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Quadratus\Model\Proprete
 */
class TrameInventaire {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code trame.
     *
     * @var string
     */
    private $codeTrame;

    /**
     * Num ordre.
     *
     * @var int
     */
    private $numOrdre;

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
     * Get the code trame.
     *
     * @return string Returns the code trame.
     */
    public function getCodeTrame() {
        return $this->codeTrame;
    }

    /**
     * Get the num ordre.
     *
     * @return int Returns the num ordre.
     */
    public function getNumOrdre() {
        return $this->numOrdre;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return TrameInventaire Returns this trame inventaire.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code trame.
     *
     * @param string $codeTrame The code trame.
     * @return TrameInventaire Returns this trame inventaire.
     */
    public function setCodeTrame($codeTrame) {
        $this->codeTrame = $codeTrame;
        return $this;
    }

    /**
     * Set the num ordre.
     *
     * @param int $numOrdre The num ordre.
     * @return TrameInventaire Returns this trame inventaire.
     */
    public function setNumOrdre($numOrdre) {
        $this->numOrdre = $numOrdre;
        return $this;
    }

}
