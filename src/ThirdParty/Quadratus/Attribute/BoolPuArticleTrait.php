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
 * Pu article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPuArticleTrait {

    /**
     * Pu article.
     *
     * @var bool
     */
    private $puArticle;

    /**
     * Get the pu article.
     *
     * @return bool Returns the pu article.
     */
    public function getPuArticle() {
        return $this->puArticle;
    }

    /**
     * Set the pu article.
     *
     * @param bool $puArticle The pu article.
     */
    public function setPuArticle($puArticle) {
        $this->puArticle = $puArticle;
        return $this;
    }
}
