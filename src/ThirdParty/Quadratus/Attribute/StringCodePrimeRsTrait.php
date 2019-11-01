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
 * Code prime rs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeRsTrait {

    /**
     * Code prime rs.
     *
     * @var string
     */
    private $codePrimeRs;

    /**
     * Get the code prime rs.
     *
     * @return string Returns the code prime rs.
     */
    public function getCodePrimeRs() {
        return $this->codePrimeRs;
    }

    /**
     * Set the code prime rs.
     *
     * @param string $codePrimeRs The code prime rs.
     */
    public function setCodePrimeRs($codePrimeRs) {
        $this->codePrimeRs = $codePrimeRs;
        return $this;
    }
}
