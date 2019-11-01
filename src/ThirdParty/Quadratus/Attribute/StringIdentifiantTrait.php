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
 * Identifiant trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringIdentifiantTrait {

    /**
     * Identifiant.
     *
     * @var string
     */
    private $identifiant;

    /**
     * Get the identifiant.
     *
     * @return string Returns the identifiant.
     */
    public function getIdentifiant() {
        return $this->identifiant;
    }

    /**
     * Set the identifiant.
     *
     * @param string $identifiant The identifiant.
     */
    public function setIdentifiant($identifiant) {
        $this->identifiant = $identifiant;
        return $this;
    }
}
