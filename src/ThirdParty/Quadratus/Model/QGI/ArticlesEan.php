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
 * Articles ean.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\QGI
 */
class ArticlesEan {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Ean.
     *
     * @var string
     */
    private $ean;

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
     * Get the ean.
     *
     * @return string Returns the ean.
     */
    public function getEan() {
        return $this->ean;
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
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the ean.
     *
     * @param string $ean The ean.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setEan($ean) {
        $this->ean = $ean;
        return $this;
    }

    /**
     * Set the gamme.
     *
     * @param int $gamme The gamme.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setGamme($gamme) {
        $this->gamme = $gamme;
        return $this;
    }

    /**
     * Set the variante.
     *
     * @param string $variante The variante.
     * @return ArticlesEan Returns this Articles ean.
     */
    public function setVariante($variante) {
        $this->variante = $variante;
        return $this;
    }
}
