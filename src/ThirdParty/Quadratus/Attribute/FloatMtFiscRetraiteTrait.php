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
 * Mt fisc retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtFiscRetraiteTrait {

    /**
     * Mt fisc retraite.
     *
     * @var float
     */
    private $mtFiscRetraite;

    /**
     * Get the mt fisc retraite.
     *
     * @return float Returns the mt fisc retraite.
     */
    public function getMtFiscRetraite() {
        return $this->mtFiscRetraite;
    }

    /**
     * Set the mt fisc retraite.
     *
     * @param float $mtFiscRetraite The mt fisc retraite.
     */
    public function setMtFiscRetraite($mtFiscRetraite) {
        $this->mtFiscRetraite = $mtFiscRetraite;
        return $this;
    }
}
