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
 * Modif commission trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringModifCommissionTrait {

    /**
     * Modif commission.
     *
     * @var string
     */
    private $modifCommission;

    /**
     * Get the modif commission.
     *
     * @return string Returns the modif commission.
     */
    public function getModifCommission() {
        return $this->modifCommission;
    }

    /**
     * Set the modif commission.
     *
     * @param string $modifCommission The modif commission.
     */
    public function setModifCommission($modifCommission) {
        $this->modifCommission = $modifCommission;
        return $this;
    }
}
