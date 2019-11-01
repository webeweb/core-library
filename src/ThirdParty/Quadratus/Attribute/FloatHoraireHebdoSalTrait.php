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
 * Horaire hebdo sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHoraireHebdoSalTrait {

    /**
     * Horaire hebdo sal.
     *
     * @var float
     */
    private $horaireHebdoSal;

    /**
     * Get the horaire hebdo sal.
     *
     * @return float Returns the horaire hebdo sal.
     */
    public function getHoraireHebdoSal() {
        return $this->horaireHebdoSal;
    }

    /**
     * Set the horaire hebdo sal.
     *
     * @param float $horaireHebdoSal The horaire hebdo sal.
     */
    public function setHoraireHebdoSal($horaireHebdoSal) {
        $this->horaireHebdoSal = $horaireHebdoSal;
        return $this;
    }
}
