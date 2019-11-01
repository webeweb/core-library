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
 * Prestation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPrestationTrait {

    /**
     * Prestation.
     *
     * @var string
     */
    private $prestation;

    /**
     * Get the prestation.
     *
     * @return string Returns the prestation.
     */
    public function getPrestation() {
        return $this->prestation;
    }

    /**
     * Set the prestation.
     *
     * @param string $prestation The prestation.
     */
    public function setPrestation($prestation) {
        $this->prestation = $prestation;
        return $this;
    }
}
