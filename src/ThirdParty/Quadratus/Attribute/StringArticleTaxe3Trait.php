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
 * Article taxe3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleTaxe3Trait {

    /**
     * Article taxe3.
     *
     * @var string
     */
    private $articleTaxe3;

    /**
     * Get the article taxe3.
     *
     * @return string Returns the article taxe3.
     */
    public function getArticleTaxe3() {
        return $this->articleTaxe3;
    }

    /**
     * Set the article taxe3.
     *
     * @param string $articleTaxe3 The article taxe3.
     */
    public function setArticleTaxe3($articleTaxe3) {
        $this->articleTaxe3 = $articleTaxe3;
        return $this;
    }
}
