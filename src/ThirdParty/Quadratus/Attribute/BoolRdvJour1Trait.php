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
 * Rdv jour1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour1Trait {

    /**
     * Rdv jour1.
     *
     * @var bool
     */
    private $rdvJour1;

    /**
     * Get the rdv jour1.
     *
     * @return bool Returns the rdv jour1.
     */
    public function getRdvJour1() {
        return $this->rdvJour1;
    }

    /**
     * Set the rdv jour1.
     *
     * @param bool $rdvJour1 The rdv jour1.
     */
    public function setRdvJour1($rdvJour1) {
        $this->rdvJour1 = $rdvJour1;
        return $this;
    }
}
