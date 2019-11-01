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
 * Code transporteur1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeTransporteur1Trait {

    /**
     * Code transporteur1.
     *
     * @var string
     */
    private $codeTransporteur1;

    /**
     * Get the code transporteur1.
     *
     * @return string Returns the code transporteur1.
     */
    public function getCodeTransporteur1() {
        return $this->codeTransporteur1;
    }

    /**
     * Set the code transporteur1.
     *
     * @param string $codeTransporteur1 The code transporteur1.
     */
    public function setCodeTransporteur1($codeTransporteur1) {
        $this->codeTransporteur1 = $codeTransporteur1;
        return $this;
    }
}
