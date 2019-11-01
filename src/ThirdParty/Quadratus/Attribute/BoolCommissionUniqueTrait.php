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
 * Commission unique trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCommissionUniqueTrait {

    /**
     * Commission unique.
     *
     * @var bool
     */
    private $commissionUnique;

    /**
     * Get the commission unique.
     *
     * @return bool Returns the commission unique.
     */
    public function getCommissionUnique() {
        return $this->commissionUnique;
    }

    /**
     * Set the commission unique.
     *
     * @param bool $commissionUnique The commission unique.
     */
    public function setCommissionUnique($commissionUnique) {
        $this->commissionUnique = $commissionUnique;
        return $this;
    }
}
