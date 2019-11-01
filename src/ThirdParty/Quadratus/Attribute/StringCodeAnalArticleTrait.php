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
 * Code anal article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeAnalArticleTrait {

    /**
     * Code anal article.
     *
     * @var string
     */
    private $codeAnalArticle;

    /**
     * Get the code anal article.
     *
     * @return string Returns the code anal article.
     */
    public function getCodeAnalArticle() {
        return $this->codeAnalArticle;
    }

    /**
     * Set the code anal article.
     *
     * @param string $codeAnalArticle The code anal article.
     */
    public function setCodeAnalArticle($codeAnalArticle) {
        $this->codeAnalArticle = $codeAnalArticle;
        return $this;
    }
}
