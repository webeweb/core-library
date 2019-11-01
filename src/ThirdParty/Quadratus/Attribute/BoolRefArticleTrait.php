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
 * Ref article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRefArticleTrait {

    /**
     * Ref article.
     *
     * @var bool
     */
    private $refArticle;

    /**
     * Get the ref article.
     *
     * @return bool Returns the ref article.
     */
    public function getRefArticle() {
        return $this->refArticle;
    }

    /**
     * Set the ref article.
     *
     * @param bool $refArticle The ref article.
     */
    public function setRefArticle($refArticle) {
        $this->refArticle = $refArticle;
        return $this;
    }
}
