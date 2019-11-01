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
 * Article regroupement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleRegroupementTrait {

    /**
     * Article regroupement.
     *
     * @var string
     */
    private $articleRegroupement;

    /**
     * Get the article regroupement.
     *
     * @return string Returns the article regroupement.
     */
    public function getArticleRegroupement() {
        return $this->articleRegroupement;
    }

    /**
     * Set the article regroupement.
     *
     * @param string $articleRegroupement The article regroupement.
     */
    public function setArticleRegroupement($articleRegroupement) {
        $this->articleRegroupement = $articleRegroupement;
        return $this;
    }
}
