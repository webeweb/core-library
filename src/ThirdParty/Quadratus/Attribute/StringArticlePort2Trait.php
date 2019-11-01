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
 * Article port2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticlePort2Trait {

    /**
     * Article port2.
     *
     * @var string
     */
    private $articlePort2;

    /**
     * Get the article port2.
     *
     * @return string Returns the article port2.
     */
    public function getArticlePort2() {
        return $this->articlePort2;
    }

    /**
     * Set the article port2.
     *
     * @param string $articlePort2 The article port2.
     */
    public function setArticlePort2($articlePort2) {
        $this->articlePort2 = $articlePort2;
        return $this;
    }
}
