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
 * Code prime dimanche1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeDimanche1Trait {

    /**
     * Code prime dimanche1.
     *
     * @var string
     */
    private $codePrimeDimanche1;

    /**
     * Get the code prime dimanche1.
     *
     * @return string Returns the code prime dimanche1.
     */
    public function getCodePrimeDimanche1() {
        return $this->codePrimeDimanche1;
    }

    /**
     * Set the code prime dimanche1.
     *
     * @param string $codePrimeDimanche1 The code prime dimanche1.
     */
    public function setCodePrimeDimanche1($codePrimeDimanche1) {
        $this->codePrimeDimanche1 = $codePrimeDimanche1;
        return $this;
    }
}
