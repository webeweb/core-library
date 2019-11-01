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
 * Subrogation duree max trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringSubrogationDureeMaxTrait {

    /**
     * Subrogation duree max.
     *
     * @var string
     */
    private $subrogationDureeMax;

    /**
     * Get the subrogation duree max.
     *
     * @return string Returns the subrogation duree max.
     */
    public function getSubrogationDureeMax() {
        return $this->subrogationDureeMax;
    }

    /**
     * Set the subrogation duree max.
     *
     * @param string $subrogationDureeMax The subrogation duree max.
     */
    public function setSubrogationDureeMax($subrogationDureeMax) {
        $this->subrogationDureeMax = $subrogationDureeMax;
        return $this;
    }
}
