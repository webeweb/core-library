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
 * Code prime chantier3 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeChantier3Trait {

    /**
     * Code prime chantier3.
     *
     * @var string
     */
    private $codePrimeChantier3;

    /**
     * Get the code prime chantier3.
     *
     * @return string Returns the code prime chantier3.
     */
    public function getCodePrimeChantier3() {
        return $this->codePrimeChantier3;
    }

    /**
     * Set the code prime chantier3.
     *
     * @param string $codePrimeChantier3 The code prime chantier3.
     */
    public function setCodePrimeChantier3($codePrimeChantier3) {
        $this->codePrimeChantier3 = $codePrimeChantier3;
        return $this;
    }
}
