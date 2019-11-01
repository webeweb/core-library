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
 * X fer taches trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolXFerTachesTrait {

    /**
     * X fer taches.
     *
     * @var bool
     */
    private $xFerTaches;

    /**
     * Get the x fer taches.
     *
     * @return bool Returns the x fer taches.
     */
    public function getXFerTaches() {
        return $this->xFerTaches;
    }

    /**
     * Set the x fer taches.
     *
     * @param bool $xFerTaches The x fer taches.
     */
    public function setXFerTaches($xFerTaches) {
        $this->xFerTaches = $xFerTaches;
        return $this;
    }
}
