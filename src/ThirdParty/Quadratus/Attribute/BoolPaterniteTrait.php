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
 * Paternite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPaterniteTrait {

    /**
     * Paternite.
     *
     * @var bool
     */
    private $paternite;

    /**
     * Get the paternite.
     *
     * @return bool Returns the paternite.
     */
    public function getPaternite() {
        return $this->paternite;
    }

    /**
     * Set the paternite.
     *
     * @param bool $paternite The paternite.
     */
    public function setPaternite($paternite) {
        $this->paternite = $paternite;
        return $this;
    }
}
