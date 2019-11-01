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
 * Art151 montant deja etale trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatArt151MontantDejaEtaleTrait {

    /**
     * Art151 montant deja etale.
     *
     * @var float
     */
    private $art151MontantDejaEtale;

    /**
     * Get the art151 montant deja etale.
     *
     * @return float Returns the art151 montant deja etale.
     */
    public function getArt151MontantDejaEtale() {
        return $this->art151MontantDejaEtale;
    }

    /**
     * Set the art151 montant deja etale.
     *
     * @param float $art151MontantDejaEtale The art151 montant deja etale.
     */
    public function setArt151MontantDejaEtale($art151MontantDejaEtale) {
        $this->art151MontantDejaEtale = $art151MontantDejaEtale;
        return $this;
    }
}
