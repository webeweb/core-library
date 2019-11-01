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
 * Rdv jour3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour3Trait {

    /**
     * Rdv jour3.
     *
     * @var bool
     */
    private $rdvJour3;

    /**
     * Get the rdv jour3.
     *
     * @return bool Returns the rdv jour3.
     */
    public function getRdvJour3() {
        return $this->rdvJour3;
    }

    /**
     * Set the rdv jour3.
     *
     * @param bool $rdvJour3 The rdv jour3.
     */
    public function setRdvJour3($rdvJour3) {
        $this->rdvJour3 = $rdvJour3;
        return $this;
    }
}
