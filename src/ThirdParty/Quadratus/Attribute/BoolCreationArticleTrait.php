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
 * Creation article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationArticleTrait {

    /**
     * Creation article.
     *
     * @var bool
     */
    private $creationArticle;

    /**
     * Get the creation article.
     *
     * @return bool Returns the creation article.
     */
    public function getCreationArticle() {
        return $this->creationArticle;
    }

    /**
     * Set the creation article.
     *
     * @param bool $creationArticle The creation article.
     */
    public function setCreationArticle($creationArticle) {
        $this->creationArticle = $creationArticle;
        return $this;
    }
}
