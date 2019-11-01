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
 * Alertes paie dans pointage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAlertesPaieDansPointageTrait {

    /**
     * Alertes paie dans pointage.
     *
     * @var bool
     */
    private $alertesPaieDansPointage;

    /**
     * Get the alertes paie dans pointage.
     *
     * @return bool Returns the alertes paie dans pointage.
     */
    public function getAlertesPaieDansPointage() {
        return $this->alertesPaieDansPointage;
    }

    /**
     * Set the alertes paie dans pointage.
     *
     * @param bool $alertesPaieDansPointage The alertes paie dans pointage.
     */
    public function setAlertesPaieDansPointage($alertesPaieDansPointage) {
        $this->alertesPaieDansPointage = $alertesPaieDansPointage;
        return $this;
    }
}
