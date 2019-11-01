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
 * Type article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeArticleTrait {

    /**
     * Type article.
     *
     * @var string
     */
    private $typeArticle;

    /**
     * Get the type article.
     *
     * @return string Returns the type article.
     */
    public function getTypeArticle() {
        return $this->typeArticle;
    }

    /**
     * Set the type article.
     *
     * @param string $typeArticle The type article.
     */
    public function setTypeArticle($typeArticle) {
        $this->typeArticle = $typeArticle;
        return $this;
    }
}
