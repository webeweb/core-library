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
 * Pays nat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPaysNatTrait {

    /**
     * Pays nat.
     *
     * @var string
     */
    private $paysNat;

    /**
     * Get the pays nat.
     *
     * @return string Returns the pays nat.
     */
    public function getPaysNat() {
        return $this->paysNat;
    }

    /**
     * Set the pays nat.
     *
     * @param string $paysNat The pays nat.
     */
    public function setPaysNat($paysNat) {
        $this->paysNat = $paysNat;
        return $this;
    }
}
