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
 * X fer cli p trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringXFerCliPTrait {

    /**
     * X fer cli p.
     *
     * @var string
     */
    private $xFerCliP;

    /**
     * Get the x fer cli p.
     *
     * @return string Returns the x fer cli p.
     */
    public function getXFerCliP() {
        return $this->xFerCliP;
    }

    /**
     * Set the x fer cli p.
     *
     * @param string $xFerCliP The x fer cli p.
     */
    public function setXFerCliP($xFerCliP) {
        $this->xFerCliP = $xFerCliP;
        return $this;
    }
}
