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
 * Droit modification trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDroitModificationTrait {

    /**
     * Droit modification.
     *
     * @var bool
     */
    private $droitModification;

    /**
     * Get the droit modification.
     *
     * @return bool Returns the droit modification.
     */
    public function getDroitModification() {
        return $this->droitModification;
    }

    /**
     * Set the droit modification.
     *
     * @param bool $droitModification The droit modification.
     */
    public function setDroitModification($droitModification) {
        $this->droitModification = $droitModification;
        return $this;
    }
}
