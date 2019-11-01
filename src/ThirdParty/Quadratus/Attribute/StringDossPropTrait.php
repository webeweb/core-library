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
 * Doss prop trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossPropTrait {

    /**
     * Doss prop.
     *
     * @var string
     */
    private $dossProp;

    /**
     * Get the doss prop.
     *
     * @return string Returns the doss prop.
     */
    public function getDossProp() {
        return $this->dossProp;
    }

    /**
     * Set the doss prop.
     *
     * @param string $dossProp The doss prop.
     */
    public function setDossProp($dossProp) {
        $this->dossProp = $dossProp;
        return $this;
    }
}
