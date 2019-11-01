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
 * Subrogation partielle trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolSubrogationPartielleTrait {

    /**
     * Subrogation partielle.
     *
     * @var bool
     */
    private $subrogationPartielle;

    /**
     * Get the subrogation partielle.
     *
     * @return bool Returns the subrogation partielle.
     */
    public function getSubrogationPartielle() {
        return $this->subrogationPartielle;
    }

    /**
     * Set the subrogation partielle.
     *
     * @param bool $subrogationPartielle The subrogation partielle.
     */
    public function setSubrogationPartielle($subrogationPartielle) {
        $this->subrogationPartielle = $subrogationPartielle;
        return $this;
    }
}
