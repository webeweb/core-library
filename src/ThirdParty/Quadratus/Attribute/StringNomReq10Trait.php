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
 * Nom req10 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq10Trait {

    /**
     * Nom req10.
     *
     * @var string
     */
    private $nomReq10;

    /**
     * Get the nom req10.
     *
     * @return string Returns the nom req10.
     */
    public function getNomReq10() {
        return $this->nomReq10;
    }

    /**
     * Set the nom req10.
     *
     * @param string $nomReq10 The nom req10.
     */
    public function setNomReq10($nomReq10) {
        $this->nomReq10 = $nomReq10;
        return $this;
    }
}
