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
 * Nom req7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq7Trait {

    /**
     * Nom req7.
     *
     * @var string
     */
    private $nomReq7;

    /**
     * Get the nom req7.
     *
     * @return string Returns the nom req7.
     */
    public function getNomReq7() {
        return $this->nomReq7;
    }

    /**
     * Set the nom req7.
     *
     * @param string $nomReq7 The nom req7.
     */
    public function setNomReq7($nomReq7) {
        $this->nomReq7 = $nomReq7;
        return $this;
    }
}
