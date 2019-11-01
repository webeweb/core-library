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
 * Code transporteur4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTransporteur4Trait {

    /**
     * Code transporteur4.
     *
     * @var string
     */
    private $codeTransporteur4;

    /**
     * Get the code transporteur4.
     *
     * @return string Returns the code transporteur4.
     */
    public function getCodeTransporteur4() {
        return $this->codeTransporteur4;
    }

    /**
     * Set the code transporteur4.
     *
     * @param string $codeTransporteur4 The code transporteur4.
     */
    public function setCodeTransporteur4($codeTransporteur4) {
        $this->codeTransporteur4 = $codeTransporteur4;
        return $this;
    }
}
