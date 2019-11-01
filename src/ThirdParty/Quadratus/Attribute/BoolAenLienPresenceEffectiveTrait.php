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
 * Aen lien presence effective trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAenLienPresenceEffectiveTrait {

    /**
     * Aen lien presence effective.
     *
     * @var bool
     */
    private $aenLienPresenceEffective;

    /**
     * Get the aen lien presence effective.
     *
     * @return bool Returns the aen lien presence effective.
     */
    public function getAenLienPresenceEffective() {
        return $this->aenLienPresenceEffective;
    }

    /**
     * Set the aen lien presence effective.
     *
     * @param bool $aenLienPresenceEffective The aen lien presence effective.
     */
    public function setAenLienPresenceEffective($aenLienPresenceEffective) {
        $this->aenLienPresenceEffective = $aenLienPresenceEffective;
        return $this;
    }
}
