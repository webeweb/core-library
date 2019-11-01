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
 * Niv tri nat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNivTriNatTrait {

    /**
     * Niv tri nat.
     *
     * @var string
     */
    private $nivTriNat;

    /**
     * Get the niv tri nat.
     *
     * @return string Returns the niv tri nat.
     */
    public function getNivTriNat() {
        return $this->nivTriNat;
    }

    /**
     * Set the niv tri nat.
     *
     * @param string $nivTriNat The niv tri nat.
     */
    public function setNivTriNat($nivTriNat) {
        $this->nivTriNat = $nivTriNat;
        return $this;
    }
}
