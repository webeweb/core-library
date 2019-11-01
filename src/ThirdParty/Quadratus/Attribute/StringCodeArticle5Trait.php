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
 * Code article5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle5Trait {

    /**
     * Code article5.
     *
     * @var string
     */
    private $codeArticle5;

    /**
     * Get the code article5.
     *
     * @return string Returns the code article5.
     */
    public function getCodeArticle5() {
        return $this->codeArticle5;
    }

    /**
     * Set the code article5.
     *
     * @param string $codeArticle5 The code article5.
     */
    public function setCodeArticle5($codeArticle5) {
        $this->codeArticle5 = $codeArticle5;
        return $this;
    }
}
