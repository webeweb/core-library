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
 * Moyenne salaires trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMoyenneSalairesTrait {

    /**
     * Moyenne salaires.
     *
     * @var float
     */
    private $moyenneSalaires;

    /**
     * Get the moyenne salaires.
     *
     * @return float Returns the moyenne salaires.
     */
    public function getMoyenneSalaires() {
        return $this->moyenneSalaires;
    }

    /**
     * Set the moyenne salaires.
     *
     * @param float $moyenneSalaires The moyenne salaires.
     */
    public function setMoyenneSalaires($moyenneSalaires) {
        $this->moyenneSalaires = $moyenneSalaires;
        return $this;
    }
}
