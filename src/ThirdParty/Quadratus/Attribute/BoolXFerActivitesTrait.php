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
 * X fer activites trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerActivitesTrait {

    /**
     * X fer activites.
     *
     * @var bool
     */
    private $xFerActivites;

    /**
     * Get the x fer activites.
     *
     * @return bool Returns the x fer activites.
     */
    public function getXFerActivites() {
        return $this->xFerActivites;
    }

    /**
     * Set the x fer activites.
     *
     * @param bool $xFerActivites The x fer activites.
     */
    public function setXFerActivites($xFerActivites) {
        $this->xFerActivites = $xFerActivites;
        return $this;
    }
}
