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
 * Tva cpt a payer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptAPayerTrait {

    /**
     * Tva cpt a payer.
     *
     * @var string
     */
    private $tvaCptAPayer;

    /**
     * Get the tva cpt a payer.
     *
     * @return string Returns the tva cpt a payer.
     */
    public function getTvaCptAPayer() {
        return $this->tvaCptAPayer;
    }

    /**
     * Set the tva cpt a payer.
     *
     * @param string $tvaCptAPayer The tva cpt a payer.
     */
    public function setTvaCptAPayer($tvaCptAPayer) {
        $this->tvaCptAPayer = $tvaCptAPayer;
        return $this;
    }
}
