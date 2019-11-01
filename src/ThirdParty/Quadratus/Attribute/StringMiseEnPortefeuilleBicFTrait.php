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
 * Mise en portefeuille bic f trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMiseEnPortefeuilleBicFTrait {

    /**
     * Mise en portefeuille bic f.
     *
     * @var string
     */
    private $miseEnPortefeuilleBicF;

    /**
     * Get the mise en portefeuille bic f.
     *
     * @return string Returns the mise en portefeuille bic f.
     */
    public function getMiseEnPortefeuilleBicF() {
        return $this->miseEnPortefeuilleBicF;
    }

    /**
     * Set the mise en portefeuille bic f.
     *
     * @param string $miseEnPortefeuilleBicF The mise en portefeuille bic f.
     */
    public function setMiseEnPortefeuilleBicF($miseEnPortefeuilleBicF) {
        $this->miseEnPortefeuilleBicF = $miseEnPortefeuilleBicF;
        return $this;
    }
}
