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
 * Code transporteur5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTransporteur5Trait {

    /**
     * Code transporteur5.
     *
     * @var string
     */
    private $codeTransporteur5;

    /**
     * Get the code transporteur5.
     *
     * @return string Returns the code transporteur5.
     */
    public function getCodeTransporteur5() {
        return $this->codeTransporteur5;
    }

    /**
     * Set the code transporteur5.
     *
     * @param string $codeTransporteur5 The code transporteur5.
     */
    public function setCodeTransporteur5($codeTransporteur5) {
        $this->codeTransporteur5 = $codeTransporteur5;
        return $this;
    }
}
