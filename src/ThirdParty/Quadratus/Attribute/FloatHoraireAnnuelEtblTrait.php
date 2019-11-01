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
 * Horaire annuel etbl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHoraireAnnuelEtblTrait {

    /**
     * Horaire annuel etbl.
     *
     * @var float
     */
    private $horaireAnnuelEtbl;

    /**
     * Get the horaire annuel etbl.
     *
     * @return float Returns the horaire annuel etbl.
     */
    public function getHoraireAnnuelEtbl() {
        return $this->horaireAnnuelEtbl;
    }

    /**
     * Set the horaire annuel etbl.
     *
     * @param float $horaireAnnuelEtbl The horaire annuel etbl.
     */
    public function setHoraireAnnuelEtbl($horaireAnnuelEtbl) {
        $this->horaireAnnuelEtbl = $horaireAnnuelEtbl;
        return $this;
    }
}
