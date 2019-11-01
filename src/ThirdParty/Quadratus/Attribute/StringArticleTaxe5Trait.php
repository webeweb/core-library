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
 * Article taxe5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleTaxe5Trait {

    /**
     * Article taxe5.
     *
     * @var string
     */
    private $articleTaxe5;

    /**
     * Get the article taxe5.
     *
     * @return string Returns the article taxe5.
     */
    public function getArticleTaxe5() {
        return $this->articleTaxe5;
    }

    /**
     * Set the article taxe5.
     *
     * @param string $articleTaxe5 The article taxe5.
     */
    public function setArticleTaxe5($articleTaxe5) {
        $this->articleTaxe5 = $articleTaxe5;
        return $this;
    }
}
