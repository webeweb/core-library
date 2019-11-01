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
 * Code transporteur3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTransporteur3Trait {

    /**
     * Code transporteur3.
     *
     * @var string
     */
    private $codeTransporteur3;

    /**
     * Get the code transporteur3.
     *
     * @return string Returns the code transporteur3.
     */
    public function getCodeTransporteur3() {
        return $this->codeTransporteur3;
    }

    /**
     * Set the code transporteur3.
     *
     * @param string $codeTransporteur3 The code transporteur3.
     */
    public function setCodeTransporteur3($codeTransporteur3) {
        $this->codeTransporteur3 = $codeTransporteur3;
        return $this;
    }
}
