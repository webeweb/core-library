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
 * Article taxe4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleTaxe4Trait {

    /**
     * Article taxe4.
     *
     * @var string
     */
    private $articleTaxe4;

    /**
     * Get the article taxe4.
     *
     * @return string Returns the article taxe4.
     */
    public function getArticleTaxe4() {
        return $this->articleTaxe4;
    }

    /**
     * Set the article taxe4.
     *
     * @param string $articleTaxe4 The article taxe4.
     */
    public function setArticleTaxe4($articleTaxe4) {
        $this->articleTaxe4 = $articleTaxe4;
        return $this;
    }
}
