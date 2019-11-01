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
 * Code motif deb per4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifDebPer4Trait {

    /**
     * Code motif deb per4.
     *
     * @var string
     */
    private $codeMotifDebPer4;

    /**
     * Get the code motif deb per4.
     *
     * @return string Returns the code motif deb per4.
     */
    public function getCodeMotifDebPer4() {
        return $this->codeMotifDebPer4;
    }

    /**
     * Set the code motif deb per4.
     *
     * @param string $codeMotifDebPer4 The code motif deb per4.
     */
    public function setCodeMotifDebPer4($codeMotifDebPer4) {
        $this->codeMotifDebPer4 = $codeMotifDebPer4;
        return $this;
    }
}
