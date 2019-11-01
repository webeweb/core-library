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
 * Article taxe2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleTaxe2Trait {

    /**
     * Article taxe2.
     *
     * @var string
     */
    private $articleTaxe2;

    /**
     * Get the article taxe2.
     *
     * @return string Returns the article taxe2.
     */
    public function getArticleTaxe2() {
        return $this->articleTaxe2;
    }

    /**
     * Set the article taxe2.
     *
     * @param string $articleTaxe2 The article taxe2.
     */
    public function setArticleTaxe2($articleTaxe2) {
        $this->articleTaxe2 = $articleTaxe2;
        return $this;
    }
}
