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
 * Mt deja paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtDejaPayeTrait {

    /**
     * Mt deja paye.
     *
     * @var float
     */
    private $mtDejaPaye;

    /**
     * Get the mt deja paye.
     *
     * @return float Returns the mt deja paye.
     */
    public function getMtDejaPaye() {
        return $this->mtDejaPaye;
    }

    /**
     * Set the mt deja paye.
     *
     * @param float $mtDejaPaye The mt deja paye.
     */
    public function setMtDejaPaye($mtDejaPaye) {
        $this->mtDejaPaye = $mtDejaPaye;
        return $this;
    }
}
