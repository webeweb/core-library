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
 * Heures absence mensualise trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolHeuresAbsenceMensualiseTrait {

    /**
     * Heures absence mensualise.
     *
     * @var bool
     */
    private $heuresAbsenceMensualise;

    /**
     * Get the heures absence mensualise.
     *
     * @return bool Returns the heures absence mensualise.
     */
    public function getHeuresAbsenceMensualise() {
        return $this->heuresAbsenceMensualise;
    }

    /**
     * Set the heures absence mensualise.
     *
     * @param bool $heuresAbsenceMensualise The heures absence mensualise.
     */
    public function setHeuresAbsenceMensualise($heuresAbsenceMensualise) {
        $this->heuresAbsenceMensualise = $heuresAbsenceMensualise;
        return $this;
    }
}
