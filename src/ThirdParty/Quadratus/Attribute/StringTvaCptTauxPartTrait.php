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
 * Tva cpt taux part trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTvaCptTauxPartTrait {

    /**
     * Tva cpt taux part.
     *
     * @var string
     */
    private $tvaCptTauxPart;

    /**
     * Get the tva cpt taux part.
     *
     * @return string Returns the tva cpt taux part.
     */
    public function getTvaCptTauxPart() {
        return $this->tvaCptTauxPart;
    }

    /**
     * Set the tva cpt taux part.
     *
     * @param string $tvaCptTauxPart The tva cpt taux part.
     */
    public function setTvaCptTauxPart($tvaCptTauxPart) {
        $this->tvaCptTauxPart = $tvaCptTauxPart;
        return $this;
    }
}
