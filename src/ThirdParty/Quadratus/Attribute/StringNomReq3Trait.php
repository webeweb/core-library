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
 * Nom req3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq3Trait {

    /**
     * Nom req3.
     *
     * @var string
     */
    private $nomReq3;

    /**
     * Get the nom req3.
     *
     * @return string Returns the nom req3.
     */
    public function getNomReq3() {
        return $this->nomReq3;
    }

    /**
     * Set the nom req3.
     *
     * @param string $nomReq3 The nom req3.
     */
    public function setNomReq3($nomReq3) {
        $this->nomReq3 = $nomReq3;
        return $this;
    }
}
