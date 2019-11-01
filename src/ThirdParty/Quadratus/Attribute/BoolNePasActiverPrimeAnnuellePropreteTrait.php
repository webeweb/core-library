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
 * Ne pas activer prime annuelle proprete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasActiverPrimeAnnuellePropreteTrait {

    /**
     * Ne pas activer prime annuelle proprete.
     *
     * @var bool
     */
    private $nePasActiverPrimeAnnuelleProprete;

    /**
     * Get the ne pas activer prime annuelle proprete.
     *
     * @return bool Returns the ne pas activer prime annuelle proprete.
     */
    public function getNePasActiverPrimeAnnuelleProprete() {
        return $this->nePasActiverPrimeAnnuelleProprete;
    }

    /**
     * Set the ne pas activer prime annuelle proprete.
     *
     * @param bool $nePasActiverPrimeAnnuelleProprete The ne pas activer prime annuelle proprete.
     */
    public function setNePasActiverPrimeAnnuelleProprete($nePasActiverPrimeAnnuelleProprete) {
        $this->nePasActiverPrimeAnnuelleProprete = $nePasActiverPrimeAnnuelleProprete;
        return $this;
    }
}
