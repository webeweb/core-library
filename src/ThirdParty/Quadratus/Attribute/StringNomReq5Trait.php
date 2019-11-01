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
 * Nom req5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq5Trait {

    /**
     * Nom req5.
     *
     * @var string
     */
    private $nomReq5;

    /**
     * Get the nom req5.
     *
     * @return string Returns the nom req5.
     */
    public function getNomReq5() {
        return $this->nomReq5;
    }

    /**
     * Set the nom req5.
     *
     * @param string $nomReq5 The nom req5.
     */
    public function setNomReq5($nomReq5) {
        $this->nomReq5 = $nomReq5;
        return $this;
    }
}
