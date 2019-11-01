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
 * Code motif deb per5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifDebPer5Trait {

    /**
     * Code motif deb per5.
     *
     * @var string
     */
    private $codeMotifDebPer5;

    /**
     * Get the code motif deb per5.
     *
     * @return string Returns the code motif deb per5.
     */
    public function getCodeMotifDebPer5() {
        return $this->codeMotifDebPer5;
    }

    /**
     * Set the code motif deb per5.
     *
     * @param string $codeMotifDebPer5 The code motif deb per5.
     */
    public function setCodeMotifDebPer5($codeMotifDebPer5) {
        $this->codeMotifDebPer5 = $codeMotifDebPer5;
        return $this;
    }
}
