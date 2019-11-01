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
 * Nom req4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq4Trait {

    /**
     * Nom req4.
     *
     * @var string
     */
    private $nomReq4;

    /**
     * Get the nom req4.
     *
     * @return string Returns the nom req4.
     */
    public function getNomReq4() {
        return $this->nomReq4;
    }

    /**
     * Set the nom req4.
     *
     * @param string $nomReq4 The nom req4.
     */
    public function setNomReq4($nomReq4) {
        $this->nomReq4 = $nomReq4;
        return $this;
    }
}
