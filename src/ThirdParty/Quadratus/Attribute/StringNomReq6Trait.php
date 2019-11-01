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
 * Nom req6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq6Trait {

    /**
     * Nom req6.
     *
     * @var string
     */
    private $nomReq6;

    /**
     * Get the nom req6.
     *
     * @return string Returns the nom req6.
     */
    public function getNomReq6() {
        return $this->nomReq6;
    }

    /**
     * Set the nom req6.
     *
     * @param string $nomReq6 The nom req6.
     */
    public function setNomReq6($nomReq6) {
        $this->nomReq6 = $nomReq6;
        return $this;
    }
}
