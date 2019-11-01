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
 * Tva cpt regul trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptRegulTrait {

    /**
     * Tva cpt regul.
     *
     * @var string
     */
    private $tvaCptRegul;

    /**
     * Get the tva cpt regul.
     *
     * @return string Returns the tva cpt regul.
     */
    public function getTvaCptRegul() {
        return $this->tvaCptRegul;
    }

    /**
     * Set the tva cpt regul.
     *
     * @param string $tvaCptRegul The tva cpt regul.
     */
    public function setTvaCptRegul($tvaCptRegul) {
        $this->tvaCptRegul = $tvaCptRegul;
        return $this;
    }
}
