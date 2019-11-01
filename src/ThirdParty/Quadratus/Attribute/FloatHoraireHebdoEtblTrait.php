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
 * Horaire hebdo etbl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHoraireHebdoEtblTrait {

    /**
     * Horaire hebdo etbl.
     *
     * @var float
     */
    private $horaireHebdoEtbl;

    /**
     * Get the horaire hebdo etbl.
     *
     * @return float Returns the horaire hebdo etbl.
     */
    public function getHoraireHebdoEtbl() {
        return $this->horaireHebdoEtbl;
    }

    /**
     * Set the horaire hebdo etbl.
     *
     * @param float $horaireHebdoEtbl The horaire hebdo etbl.
     */
    public function setHoraireHebdoEtbl($horaireHebdoEtbl) {
        $this->horaireHebdoEtbl = $horaireHebdoEtbl;
        return $this;
    }
}
