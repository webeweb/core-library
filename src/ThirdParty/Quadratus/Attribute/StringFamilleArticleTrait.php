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
 * Famille article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamilleArticleTrait {

    /**
     * Famille article.
     *
     * @var string
     */
    private $familleArticle;

    /**
     * Get the famille article.
     *
     * @return string Returns the famille article.
     */
    public function getFamilleArticle() {
        return $this->familleArticle;
    }

    /**
     * Set the famille article.
     *
     * @param string $familleArticle The famille article.
     */
    public function setFamilleArticle($familleArticle) {
        $this->familleArticle = $familleArticle;
        return $this;
    }
}
