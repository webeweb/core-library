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
 * Code prime q paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCodePrimeQPaieTrait {

    /**
     * Code prime q paie.
     *
     * @var string
     */
    private $codePrimeQPaie;

    /**
     * Get the code prime q paie.
     *
     * @return string Returns the code prime q paie.
     */
    public function getCodePrimeQPaie() {
        return $this->codePrimeQPaie;
    }

    /**
     * Set the code prime q paie.
     *
     * @param string $codePrimeQPaie The code prime q paie.
     */
    public function setCodePrimeQPaie($codePrimeQPaie) {
        $this->codePrimeQPaie = $codePrimeQPaie;
        return $this;
    }
}
