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
 * Rdv jour4 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour4Trait {

    /**
     * Rdv jour4.
     *
     * @var bool
     */
    private $rdvJour4;

    /**
     * Get the rdv jour4.
     *
     * @return bool Returns the rdv jour4.
     */
    public function getRdvJour4() {
        return $this->rdvJour4;
    }

    /**
     * Set the rdv jour4.
     *
     * @param bool $rdvJour4 The rdv jour4.
     */
    public function setRdvJour4($rdvJour4) {
        $this->rdvJour4 = $rdvJour4;
        return $this;
    }
}
