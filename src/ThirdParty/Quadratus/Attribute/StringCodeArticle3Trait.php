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
 * Code article3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeArticle3Trait {

    /**
     * Code article3.
     *
     * @var string
     */
    private $codeArticle3;

    /**
     * Get the code article3.
     *
     * @return string Returns the code article3.
     */
    public function getCodeArticle3() {
        return $this->codeArticle3;
    }

    /**
     * Set the code article3.
     *
     * @param string $codeArticle3 The code article3.
     */
    public function setCodeArticle3($codeArticle3) {
        $this->codeArticle3 = $codeArticle3;
        return $this;
    }
}
