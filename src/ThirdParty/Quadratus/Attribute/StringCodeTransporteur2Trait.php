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
 * Code transporteur2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTransporteur2Trait {

    /**
     * Code transporteur2.
     *
     * @var string
     */
    private $codeTransporteur2;

    /**
     * Get the code transporteur2.
     *
     * @return string Returns the code transporteur2.
     */
    public function getCodeTransporteur2() {
        return $this->codeTransporteur2;
    }

    /**
     * Set the code transporteur2.
     *
     * @param string $codeTransporteur2 The code transporteur2.
     */
    public function setCodeTransporteur2($codeTransporteur2) {
        $this->codeTransporteur2 = $codeTransporteur2;
        return $this;
    }
}
