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
 * Article rattache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleRattacheTrait {

    /**
     * Article rattache.
     *
     * @var string
     */
    private $articleRattache;

    /**
     * Get the article rattache.
     *
     * @return string Returns the article rattache.
     */
    public function getArticleRattache() {
        return $this->articleRattache;
    }

    /**
     * Set the article rattache.
     *
     * @param string $articleRattache The article rattache.
     */
    public function setArticleRattache($articleRattache) {
        $this->articleRattache = $articleRattache;
        return $this;
    }
}
