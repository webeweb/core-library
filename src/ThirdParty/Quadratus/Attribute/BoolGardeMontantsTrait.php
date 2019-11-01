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
 * Garde montants trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolGardeMontantsTrait {

    /**
     * Garde montants.
     *
     * @var bool
     */
    private $gardeMontants;

    /**
     * Get the garde montants.
     *
     * @return bool Returns the garde montants.
     */
    public function getGardeMontants() {
        return $this->gardeMontants;
    }

    /**
     * Set the garde montants.
     *
     * @param bool $gardeMontants The garde montants.
     */
    public function setGardeMontants($gardeMontants) {
        $this->gardeMontants = $gardeMontants;
        return $this;
    }
}
