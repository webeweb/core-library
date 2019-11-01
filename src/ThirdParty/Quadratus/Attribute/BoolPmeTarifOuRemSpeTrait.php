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
 * Pme tarif ou rem spe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPmeTarifOuRemSpeTrait {

    /**
     * Pme tarif ou rem spe.
     *
     * @var bool
     */
    private $pmeTarifOuRemSpe;

    /**
     * Get the pme tarif ou rem spe.
     *
     * @return bool Returns the pme tarif ou rem spe.
     */
    public function getPmeTarifOuRemSpe() {
        return $this->pmeTarifOuRemSpe;
    }

    /**
     * Set the pme tarif ou rem spe.
     *
     * @param bool $pmeTarifOuRemSpe The pme tarif ou rem spe.
     */
    public function setPmeTarifOuRemSpe($pmeTarifOuRemSpe) {
        $this->pmeTarifOuRemSpe = $pmeTarifOuRemSpe;
        return $this;
    }
}
