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
 * Nom req2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq2Trait {

    /**
     * Nom req2.
     *
     * @var string
     */
    private $nomReq2;

    /**
     * Get the nom req2.
     *
     * @return string Returns the nom req2.
     */
    public function getNomReq2() {
        return $this->nomReq2;
    }

    /**
     * Set the nom req2.
     *
     * @param string $nomReq2 The nom req2.
     */
    public function setNomReq2($nomReq2) {
        $this->nomReq2 = $nomReq2;
        return $this;
    }
}
