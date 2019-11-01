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
 * Code centre impot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodeCentreImpotTrait {

    /**
     * Code centre impot.
     *
     * @var string
     */
    private $codeCentreImpot;

    /**
     * Get the code centre impot.
     *
     * @return string Returns the code centre impot.
     */
    public function getCodeCentreImpot() {
        return $this->codeCentreImpot;
    }

    /**
     * Set the code centre impot.
     *
     * @param string $codeCentreImpot The code centre impot.
     */
    public function setCodeCentreImpot($codeCentreImpot) {
        $this->codeCentreImpot = $codeCentreImpot;
        return $this;
    }
}
