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
 * Fam article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFamArticleTrait {

    /**
     * Fam article.
     *
     * @var string
     */
    private $famArticle;

    /**
     * Get the fam article.
     *
     * @return string Returns the fam article.
     */
    public function getFamArticle() {
        return $this->famArticle;
    }

    /**
     * Set the fam article.
     *
     * @param string $famArticle The fam article.
     */
    public function setFamArticle($famArticle) {
        $this->famArticle = $famArticle;
        return $this;
    }
}
