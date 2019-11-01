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
 * Rdv jour7 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolRdvJour7Trait {

    /**
     * Rdv jour7.
     *
     * @var bool
     */
    private $rdvJour7;

    /**
     * Get the rdv jour7.
     *
     * @return bool Returns the rdv jour7.
     */
    public function getRdvJour7() {
        return $this->rdvJour7;
    }

    /**
     * Set the rdv jour7.
     *
     * @param bool $rdvJour7 The rdv jour7.
     */
    public function setRdvJour7($rdvJour7) {
        $this->rdvJour7 = $rdvJour7;
        return $this;
    }
}
