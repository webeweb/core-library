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
 * Contrepartie charge prod trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringContrepartieChargeProdTrait {

    /**
     * Contrepartie charge prod.
     *
     * @var string
     */
    private $contrepartieChargeProd;

    /**
     * Get the contrepartie charge prod.
     *
     * @return string Returns the contrepartie charge prod.
     */
    public function getContrepartieChargeProd() {
        return $this->contrepartieChargeProd;
    }

    /**
     * Set the contrepartie charge prod.
     *
     * @param string $contrepartieChargeProd The contrepartie charge prod.
     */
    public function setContrepartieChargeProd($contrepartieChargeProd) {
        $this->contrepartieChargeProd = $contrepartieChargeProd;
        return $this;
    }
}
