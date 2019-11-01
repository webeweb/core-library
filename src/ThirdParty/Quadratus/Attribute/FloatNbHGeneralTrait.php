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
 * Nb h general trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHGeneralTrait {

    /**
     * Nb h general.
     *
     * @var float
     */
    private $nbHGeneral;

    /**
     * Get the nb h general.
     *
     * @return float Returns the nb h general.
     */
    public function getNbHGeneral() {
        return $this->nbHGeneral;
    }

    /**
     * Set the nb h general.
     *
     * @param float $nbHGeneral The nb h general.
     */
    public function setNbHGeneral($nbHGeneral) {
        $this->nbHGeneral = $nbHGeneral;
        return $this;
    }
}
