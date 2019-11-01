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
 * Ne pas creer cpt frn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolNePasCreerCptFrnTrait {

    /**
     * Ne pas creer cpt frn.
     *
     * @var bool
     */
    private $nePasCreerCptFrn;

    /**
     * Get the ne pas creer cpt frn.
     *
     * @return bool Returns the ne pas creer cpt frn.
     */
    public function getNePasCreerCptFrn() {
        return $this->nePasCreerCptFrn;
    }

    /**
     * Set the ne pas creer cpt frn.
     *
     * @param bool $nePasCreerCptFrn The ne pas creer cpt frn.
     */
    public function setNePasCreerCptFrn($nePasCreerCptFrn) {
        $this->nePasCreerCptFrn = $nePasCreerCptFrn;
        return $this;
    }
}
