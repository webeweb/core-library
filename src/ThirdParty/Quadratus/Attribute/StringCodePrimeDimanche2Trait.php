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
 * Code prime dimanche2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeDimanche2Trait {

    /**
     * Code prime dimanche2.
     *
     * @var string
     */
    private $codePrimeDimanche2;

    /**
     * Get the code prime dimanche2.
     *
     * @return string Returns the code prime dimanche2.
     */
    public function getCodePrimeDimanche2() {
        return $this->codePrimeDimanche2;
    }

    /**
     * Set the code prime dimanche2.
     *
     * @param string $codePrimeDimanche2 The code prime dimanche2.
     */
    public function setCodePrimeDimanche2($codePrimeDimanche2) {
        $this->codePrimeDimanche2 = $codePrimeDimanche2;
        return $this;
    }
}
