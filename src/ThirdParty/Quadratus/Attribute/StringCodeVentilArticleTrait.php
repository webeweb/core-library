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
 * Code ventil article trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeVentilArticleTrait {

    /**
     * Code ventil article.
     *
     * @var string
     */
    private $codeVentilArticle;

    /**
     * Get the code ventil article.
     *
     * @return string Returns the code ventil article.
     */
    public function getCodeVentilArticle() {
        return $this->codeVentilArticle;
    }

    /**
     * Set the code ventil article.
     *
     * @param string $codeVentilArticle The code ventil article.
     */
    public function setCodeVentilArticle($codeVentilArticle) {
        $this->codeVentilArticle = $codeVentilArticle;
        return $this;
    }
}
