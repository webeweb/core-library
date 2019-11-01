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
 * Code prime chantier1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeChantier1Trait {

    /**
     * Code prime chantier1.
     *
     * @var string
     */
    private $codePrimeChantier1;

    /**
     * Get the code prime chantier1.
     *
     * @return string Returns the code prime chantier1.
     */
    public function getCodePrimeChantier1() {
        return $this->codePrimeChantier1;
    }

    /**
     * Set the code prime chantier1.
     *
     * @param string $codePrimeChantier1 The code prime chantier1.
     */
    public function setCodePrimeChantier1($codePrimeChantier1) {
        $this->codePrimeChantier1 = $codePrimeChantier1;
        return $this;
    }
}
