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
 * Prevenu nouveau cd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPrevenuNouveauCdTrait {

    /**
     * Prevenu nouveau cd.
     *
     * @var bool
     */
    private $prevenuNouveauCd;

    /**
     * Get the prevenu nouveau cd.
     *
     * @return bool Returns the prevenu nouveau cd.
     */
    public function getPrevenuNouveauCd() {
        return $this->prevenuNouveauCd;
    }

    /**
     * Set the prevenu nouveau cd.
     *
     * @param bool $prevenuNouveauCd The prevenu nouveau cd.
     */
    public function setPrevenuNouveauCd($prevenuNouveauCd) {
        $this->prevenuNouveauCd = $prevenuNouveauCd;
        return $this;
    }
}
