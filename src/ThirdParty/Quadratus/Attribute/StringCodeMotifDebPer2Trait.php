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
 * Code motif deb per2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifDebPer2Trait {

    /**
     * Code motif deb per2.
     *
     * @var string
     */
    private $codeMotifDebPer2;

    /**
     * Get the code motif deb per2.
     *
     * @return string Returns the code motif deb per2.
     */
    public function getCodeMotifDebPer2() {
        return $this->codeMotifDebPer2;
    }

    /**
     * Set the code motif deb per2.
     *
     * @param string $codeMotifDebPer2 The code motif deb per2.
     */
    public function setCodeMotifDebPer2($codeMotifDebPer2) {
        $this->codeMotifDebPer2 = $codeMotifDebPer2;
        return $this;
    }
}
