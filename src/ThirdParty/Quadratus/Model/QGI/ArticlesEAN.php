<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\QGI;

/**
 * Articles e a n model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesEAN {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * E a n.
     *
     * @var string
     */
    private $eAN;

    /**
     * Gamme.
     *
     * @var int
     */
    private $gamme;

    /**
     * Variante.
     *
     * @var string
     */
    private $variante;

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
     * Get the e a n.
     *
     * @return string Returns the e a n.
     */
    public function getEAN() {
        return $this->eAN;
    }

    /**
     * Get the gamme.
     *
     * @return int Returns the gamme.
     */
    public function getGamme() {
        return $this->gamme;
    }

    /**
     * Get the variante.
     *
     * @return string Returns the variante.
     */
    public function getVariante() {
        return $this->variante;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return ArticlesEAN Returns this articles e a n.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the e a n.
     *
     * @param string $eAN The e a n.
     * @return ArticlesEAN Returns this articles e a n.
     */
    public function setEAN($eAN) {
        $this->eAN = $eAN;
        return $this;
    }

    /**
     * Set the gamme.
     *
     * @param int $gamme The gamme.
     * @return ArticlesEAN Returns this articles e a n.
     */
    public function setGamme($gamme) {
        $this->gamme = $gamme;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param string $variante The variante.
     * @return ArticlesEAN Returns this articles e a n.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }
}
