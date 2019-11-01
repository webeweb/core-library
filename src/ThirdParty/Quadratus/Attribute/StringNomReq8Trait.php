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
 * Nom req8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq8Trait {

    /**
     * Nom req8.
     *
     * @var string
     */
    private $nomReq8;

    /**
     * Get the nom req8.
     *
     * @return string Returns the nom req8.
     */
    public function getNomReq8() {
        return $this->nomReq8;
    }

    /**
     * Set the nom req8.
     *
     * @param string $nomReq8 The nom req8.
     */
    public function setNomReq8($nomReq8) {
        $this->nomReq8 = $nomReq8;
        return $this;
    }
}
