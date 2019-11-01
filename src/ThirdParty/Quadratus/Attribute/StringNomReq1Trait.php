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
 * Nom req1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNomReq1Trait {

    /**
     * Nom req1.
     *
     * @var string
     */
    private $nomReq1;

    /**
     * Get the nom req1.
     *
     * @return string Returns the nom req1.
     */
    public function getNomReq1() {
        return $this->nomReq1;
    }

    /**
     * Set the nom req1.
     *
     * @param string $nomReq1 The nom req1.
     */
    public function setNomReq1($nomReq1) {
        $this->nomReq1 = $nomReq1;
        return $this;
    }
}
