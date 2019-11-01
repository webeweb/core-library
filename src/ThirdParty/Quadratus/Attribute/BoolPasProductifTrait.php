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
 * Pas productif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPasProductifTrait {

    /**
     * Pas productif.
     *
     * @var bool
     */
    private $pasProductif;

    /**
     * Get the pas productif.
     *
     * @return bool Returns the pas productif.
     */
    public function getPasProductif() {
        return $this->pasProductif;
    }

    /**
     * Set the pas productif.
     *
     * @param bool $pasProductif The pas productif.
     */
    public function setPasProductif($pasProductif) {
        $this->pasProductif = $pasProductif;
        return $this;
    }
}
