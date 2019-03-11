<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete;

/**
 * Articles prevention model.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Model\Proprete
 */
class ArticlesPrevention {

    /**
     * Code article.
     *
     * @var string
     */
    private $codeArticle;

    /**
     * Code prev.
     *
     * @var string
     */
    private $codePrev;

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
     * Get the code prev.
     *
     * @return string Returns the code prev.
     */
    public function getCodePrev() {
        return $this->codePrev;
    }

    /**
     * Set the code article.
     *
     * @param string $codeArticle The code article.
     * @return ArticlesPrevention Returns this articles prevention.
     */
    public function setCodeArticle($codeArticle) {
        $this->codeArticle = $codeArticle;
        return $this;
    }

    /**
     * Set the code prev.
     *
     * @param string $codePrev The code prev.
     * @return ArticlesPrevention Returns this articles prevention.
     */
    public function setCodePrev($codePrev) {
        $this->codePrev = $codePrev;
        return $this;
    }
}
