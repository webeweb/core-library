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
 * Nom req11 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq11Trait {

    /**
     * Nom req11.
     *
     * @var string
     */
    private $nomReq11;

    /**
     * Get the nom req11.
     *
     * @return string Returns the nom req11.
     */
    public function getNomReq11() {
        return $this->nomReq11;
    }

    /**
     * Set the nom req11.
     *
     * @param string $nomReq11 The nom req11.
     */
    public function setNomReq11($nomReq11) {
        $this->nomReq11 = $nomReq11;
        return $this;
    }
}
