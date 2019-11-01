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
 * Type code article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeCodeArticleTrait {

    /**
     * Type code article.
     *
     * @var string
     */
    private $typeCodeArticle;

    /**
     * Get the type code article.
     *
     * @return string Returns the type code article.
     */
    public function getTypeCodeArticle() {
        return $this->typeCodeArticle;
    }

    /**
     * Set the type code article.
     *
     * @param string $typeCodeArticle The type code article.
     */
    public function setTypeCodeArticle($typeCodeArticle) {
        $this->typeCodeArticle = $typeCodeArticle;
        return $this;
    }
}
