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
 * Code prime chantier2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeChantier2Trait {

    /**
     * Code prime chantier2.
     *
     * @var string
     */
    private $codePrimeChantier2;

    /**
     * Get the code prime chantier2.
     *
     * @return string Returns the code prime chantier2.
     */
    public function getCodePrimeChantier2() {
        return $this->codePrimeChantier2;
    }

    /**
     * Set the code prime chantier2.
     *
     * @param string $codePrimeChantier2 The code prime chantier2.
     */
    public function setCodePrimeChantier2($codePrimeChantier2) {
        $this->codePrimeChantier2 = $codePrimeChantier2;
        return $this;
    }
}
