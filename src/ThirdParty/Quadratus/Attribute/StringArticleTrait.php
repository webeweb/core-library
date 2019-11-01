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
 * Article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringArticleTrait {

    /**
     * Article.
     *
     * @var string
     */
    private $article;

    /**
     * Get the article.
     *
     * @return string Returns the article.
     */
    public function getArticle() {
        return $this->article;
    }

    /**
     * Set the article.
     *
     * @param string $article The article.
     */
    public function setArticle($article) {
        $this->article = $article;
        return $this;
    }
}
