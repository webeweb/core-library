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
 * X fer civilites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerCivilitesTrait {

    /**
     * X fer civilites.
     *
     * @var bool
     */
    private $xFerCivilites;

    /**
     * Get the x fer civilites.
     *
     * @return bool Returns the x fer civilites.
     */
    public function getXFerCivilites() {
        return $this->xFerCivilites;
    }

    /**
     * Set the x fer civilites.
     *
     * @param bool $xFerCivilites The x fer civilites.
     */
    public function setXFerCivilites($xFerCivilites) {
        $this->xFerCivilites = $xFerCivilites;
        return $this;
    }
}
