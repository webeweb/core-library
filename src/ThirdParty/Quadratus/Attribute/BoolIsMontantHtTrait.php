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
 * Is montant ht trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIsMontantHtTrait {

    /**
     * Is montant ht.
     *
     * @var bool
     */
    private $isMontantHt;

    /**
     * Get the is montant ht.
     *
     * @return bool Returns the is montant ht.
     */
    public function getIsMontantHt() {
        return $this->isMontantHt;
    }

    /**
     * Set the is montant ht.
     *
     * @param bool $isMontantHt The is montant ht.
     */
    public function setIsMontantHt($isMontantHt) {
        $this->isMontantHt = $isMontantHt;
        return $this;
    }
}
