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
 * Code article10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle10Trait {

    /**
     * Code article10.
     *
     * @var string
     */
    private $codeArticle10;

    /**
     * Get the code article10.
     *
     * @return string Returns the code article10.
     */
    public function getCodeArticle10() {
        return $this->codeArticle10;
    }

    /**
     * Set the code article10.
     *
     * @param string $codeArticle10 The code article10.
     */
    public function setCodeArticle10($codeArticle10) {
        $this->codeArticle10 = $codeArticle10;
        return $this;
    }
}
