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
 * Article taxe1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleTaxe1Trait {

    /**
     * Article taxe1.
     *
     * @var string
     */
    private $articleTaxe1;

    /**
     * Get the article taxe1.
     *
     * @return string Returns the article taxe1.
     */
    public function getArticleTaxe1() {
        return $this->articleTaxe1;
    }

    /**
     * Set the article taxe1.
     *
     * @param string $articleTaxe1 The article taxe1.
     */
    public function setArticleTaxe1($articleTaxe1) {
        $this->articleTaxe1 = $articleTaxe1;
        return $this;
    }
}
