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
 * Nom req9 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq9Trait {

    /**
     * Nom req9.
     *
     * @var string
     */
    private $nomReq9;

    /**
     * Get the nom req9.
     *
     * @return string Returns the nom req9.
     */
    public function getNomReq9() {
        return $this->nomReq9;
    }

    /**
     * Set the nom req9.
     *
     * @param string $nomReq9 The nom req9.
     */
    public function setNomReq9($nomReq9) {
        $this->nomReq9 = $nomReq9;
        return $this;
    }
}
