<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\ThirdParty\Quadratus\Attribute;

/**
 * Acces articles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAccesArticlesTrait {

    /**
     * Acces articles.
     *
     * @var bool
     */
    private $accesArticles;

    /**
     * Get the acces articles.
     *
     * @return bool Returns the acces articles.
     */
    public function getAccesArticles() {
        return $this->accesArticles;
    }

    /**
     * Set the acces articles.
     *
     * @param bool $accesArticles The acces articles.
     */
    public function setAccesArticles($accesArticles) {
        $this->accesArticles = $accesArticles;
        return $this;
    }
}
