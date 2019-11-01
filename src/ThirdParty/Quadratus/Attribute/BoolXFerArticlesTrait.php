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
 * X fer articles trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerArticlesTrait {

    /**
     * X fer articles.
     *
     * @var bool
     */
    private $xFerArticles;

    /**
     * Get the x fer articles.
     *
     * @return bool Returns the x fer articles.
     */
    public function getXFerArticles() {
        return $this->xFerArticles;
    }

    /**
     * Set the x fer articles.
     *
     * @param bool $xFerArticles The x fer articles.
     */
    public function setXFerArticles($xFerArticles) {
        $this->xFerArticles = $xFerArticles;
        return $this;
    }
}
