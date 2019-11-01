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
 * Article remplacement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleRemplacementTrait {

    /**
     * Article remplacement.
     *
     * @var string
     */
    private $articleRemplacement;

    /**
     * Get the article remplacement.
     *
     * @return string Returns the article remplacement.
     */
    public function getArticleRemplacement() {
        return $this->articleRemplacement;
    }

    /**
     * Set the article remplacement.
     *
     * @param string $articleRemplacement The article remplacement.
     */
    public function setArticleRemplacement($articleRemplacement) {
        $this->articleRemplacement = $articleRemplacement;
        return $this;
    }
}
