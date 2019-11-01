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
 * Code article4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle4Trait {

    /**
     * Code article4.
     *
     * @var string
     */
    private $codeArticle4;

    /**
     * Get the code article4.
     *
     * @return string Returns the code article4.
     */
    public function getCodeArticle4() {
        return $this->codeArticle4;
    }

    /**
     * Set the code article4.
     *
     * @param string $codeArticle4 The code article4.
     */
    public function setCodeArticle4($codeArticle4) {
        $this->codeArticle4 = $codeArticle4;
        return $this;
    }
}
