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
 * Code tva article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTvaArticleTrait {

    /**
     * Code tva article.
     *
     * @var string
     */
    private $codeTvaArticle;

    /**
     * Get the code tva article.
     *
     * @return string Returns the code tva article.
     */
    public function getCodeTvaArticle() {
        return $this->codeTvaArticle;
    }

    /**
     * Set the code tva article.
     *
     * @param string $codeTvaArticle The code tva article.
     */
    public function setCodeTvaArticle($codeTvaArticle) {
        $this->codeTvaArticle = $codeTvaArticle;
        return $this;
    }
}
