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
 * Code article8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle8Trait {

    /**
     * Code article8.
     *
     * @var string
     */
    private $codeArticle8;

    /**
     * Get the code article8.
     *
     * @return string Returns the code article8.
     */
    public function getCodeArticle8() {
        return $this->codeArticle8;
    }

    /**
     * Set the code article8.
     *
     * @param string $codeArticle8 The code article8.
     */
    public function setCodeArticle8($codeArticle8) {
        $this->codeArticle8 = $codeArticle8;
        return $this;
    }
}
