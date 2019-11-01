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
 * Rdv jour5 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour5Trait {

    /**
     * Rdv jour5.
     *
     * @var bool
     */
    private $rdvJour5;

    /**
     * Get the rdv jour5.
     *
     * @return bool Returns the rdv jour5.
     */
    public function getRdvJour5() {
        return $this->rdvJour5;
    }

    /**
     * Set the rdv jour5.
     *
     * @param bool $rdvJour5 The rdv jour5.
     */
    public function setRdvJour5($rdvJour5) {
        $this->rdvJour5 = $rdvJour5;
        return $this;
    }
}
