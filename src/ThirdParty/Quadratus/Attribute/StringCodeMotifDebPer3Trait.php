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
 * Code motif deb per3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeMotifDebPer3Trait {

    /**
     * Code motif deb per3.
     *
     * @var string
     */
    private $codeMotifDebPer3;

    /**
     * Get the code motif deb per3.
     *
     * @return string Returns the code motif deb per3.
     */
    public function getCodeMotifDebPer3() {
        return $this->codeMotifDebPer3;
    }

    /**
     * Set the code motif deb per3.
     *
     * @param string $codeMotifDebPer3 The code motif deb per3.
     */
    public function setCodeMotifDebPer3($codeMotifDebPer3) {
        $this->codeMotifDebPer3 = $codeMotifDebPer3;
        return $this;
    }
}
