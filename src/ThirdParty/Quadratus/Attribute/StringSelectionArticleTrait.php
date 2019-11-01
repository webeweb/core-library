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
 * Selection article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSelectionArticleTrait {

    /**
     * Selection article.
     *
     * @var string
     */
    private $selectionArticle;

    /**
     * Get the selection article.
     *
     * @return string Returns the selection article.
     */
    public function getSelectionArticle() {
        return $this->selectionArticle;
    }

    /**
     * Set the selection article.
     *
     * @param string $selectionArticle The selection article.
     */
    public function setSelectionArticle($selectionArticle) {
        $this->selectionArticle = $selectionArticle;
        return $this;
    }
}
