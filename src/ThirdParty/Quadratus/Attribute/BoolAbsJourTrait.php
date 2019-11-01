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
 * Abs jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAbsJourTrait {

    /**
     * Abs jour.
     *
     * @var bool
     */
    private $absJour;

    /**
     * Get the abs jour.
     *
     * @return bool Returns the abs jour.
     */
    public function getAbsJour() {
        return $this->absJour;
    }

    /**
     * Set the abs jour.
     *
     * @param bool $absJour The abs jour.
     */
    public function setAbsJour($absJour) {
        $this->absJour = $absJour;
        return $this;
    }
}
