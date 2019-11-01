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
 * Creation commission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolCreationCommissionTrait {

    /**
     * Creation commission.
     *
     * @var bool
     */
    private $creationCommission;

    /**
     * Get the creation commission.
     *
     * @return bool Returns the creation commission.
     */
    public function getCreationCommission() {
        return $this->creationCommission;
    }

    /**
     * Set the creation commission.
     *
     * @param bool $creationCommission The creation commission.
     */
    public function setCreationCommission($creationCommission) {
        $this->creationCommission = $creationCommission;
        return $this;
    }
}
