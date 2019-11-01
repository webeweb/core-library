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
 * Mtt emprunts trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMttEmpruntsTrait {

    /**
     * Mtt emprunts.
     *
     * @var float
     */
    private $mttEmprunts;

    /**
     * Get the mtt emprunts.
     *
     * @return float Returns the mtt emprunts.
     */
    public function getMttEmprunts() {
        return $this->mttEmprunts;
    }

    /**
     * Set the mtt emprunts.
     *
     * @param float $mttEmprunts The mtt emprunts.
     */
    public function setMttEmprunts($mttEmprunts) {
        $this->mttEmprunts = $mttEmprunts;
        return $this;
    }
}
