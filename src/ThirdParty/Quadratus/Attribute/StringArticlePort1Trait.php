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
 * Article port1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticlePort1Trait {

    /**
     * Article port1.
     *
     * @var string
     */
    private $articlePort1;

    /**
     * Get the article port1.
     *
     * @return string Returns the article port1.
     */
    public function getArticlePort1() {
        return $this->articlePort1;
    }

    /**
     * Set the article port1.
     *
     * @param string $articlePort1 The article port1.
     */
    public function setArticlePort1($articlePort1) {
        $this->articlePort1 = $articlePort1;
        return $this;
    }
}
