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
 * Increm auto article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIncremAutoArticleTrait {

    /**
     * Increm auto article.
     *
     * @var bool
     */
    private $incremAutoArticle;

    /**
     * Get the increm auto article.
     *
     * @return bool Returns the increm auto article.
     */
    public function getIncremAutoArticle() {
        return $this->incremAutoArticle;
    }

    /**
     * Set the increm auto article.
     *
     * @param bool $incremAutoArticle The increm auto article.
     */
    public function setIncremAutoArticle($incremAutoArticle) {
        $this->incremAutoArticle = $incremAutoArticle;
        return $this;
    }
}
