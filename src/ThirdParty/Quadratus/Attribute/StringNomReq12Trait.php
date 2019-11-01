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
 * Nom req12 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq12Trait {

    /**
     * Nom req12.
     *
     * @var string
     */
    private $nomReq12;

    /**
     * Get the nom req12.
     *
     * @return string Returns the nom req12.
     */
    public function getNomReq12() {
        return $this->nomReq12;
    }

    /**
     * Set the nom req12.
     *
     * @param string $nomReq12 The nom req12.
     */
    public function setNomReq12($nomReq12) {
        $this->nomReq12 = $nomReq12;
        return $this;
    }
}
