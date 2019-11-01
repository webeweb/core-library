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
 * Rdv jour2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour2Trait {

    /**
     * Rdv jour2.
     *
     * @var bool
     */
    private $rdvJour2;

    /**
     * Get the rdv jour2.
     *
     * @return bool Returns the rdv jour2.
     */
    public function getRdvJour2() {
        return $this->rdvJour2;
    }

    /**
     * Set the rdv jour2.
     *
     * @param bool $rdvJour2 The rdv jour2.
     */
    public function setRdvJour2($rdvJour2) {
        $this->rdvJour2 = $rdvJour2;
        return $this;
    }
}
