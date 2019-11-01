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
 * Horaire annuel sal trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatHoraireAnnuelSalTrait {

    /**
     * Horaire annuel sal.
     *
     * @var float
     */
    private $horaireAnnuelSal;

    /**
     * Get the horaire annuel sal.
     *
     * @return float Returns the horaire annuel sal.
     */
    public function getHoraireAnnuelSal() {
        return $this->horaireAnnuelSal;
    }

    /**
     * Set the horaire annuel sal.
     *
     * @param float $horaireAnnuelSal The horaire annuel sal.
     */
    public function setHoraireAnnuelSal($horaireAnnuelSal) {
        $this->horaireAnnuelSal = $horaireAnnuelSal;
        return $this;
    }
}
