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
 * Rdv jour6 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour6Trait {

    /**
     * Rdv jour6.
     *
     * @var bool
     */
    private $rdvJour6;

    /**
     * Get the rdv jour6.
     *
     * @return bool Returns the rdv jour6.
     */
    public function getRdvJour6() {
        return $this->rdvJour6;
    }

    /**
     * Set the rdv jour6.
     *
     * @param bool $rdvJour6 The rdv jour6.
     */
    public function setRdvJour6($rdvJour6) {
        $this->rdvJour6 = $rdvJour6;
        return $this;
    }
}
