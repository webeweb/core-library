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
 * Mise en portefeuille dom f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMiseEnPortefeuilleDomFTrait {

    /**
     * Mise en portefeuille dom f.
     *
     * @var string
     */
    private $miseEnPortefeuilleDomF;

    /**
     * Get the mise en portefeuille dom f.
     *
     * @return string Returns the mise en portefeuille dom f.
     */
    public function getMiseEnPortefeuilleDomF() {
        return $this->miseEnPortefeuilleDomF;
    }

    /**
     * Set the mise en portefeuille dom f.
     *
     * @param string $miseEnPortefeuilleDomF The mise en portefeuille dom f.
     */
    public function setMiseEnPortefeuilleDomF($miseEnPortefeuilleDomF) {
        $this->miseEnPortefeuilleDomF = $miseEnPortefeuilleDomF;
        return $this;
    }
}
