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
 * Mt brut exo abat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtBrutExoAbatTrait {

    /**
     * Mt brut exo abat.
     *
     * @var float
     */
    private $mtBrutExoAbat;

    /**
     * Get the mt brut exo abat.
     *
     * @return float Returns the mt brut exo abat.
     */
    public function getMtBrutExoAbat() {
        return $this->mtBrutExoAbat;
    }

    /**
     * Set the mt brut exo abat.
     *
     * @param float $mtBrutExoAbat The mt brut exo abat.
     */
    public function setMtBrutExoAbat($mtBrutExoAbat) {
        $this->mtBrutExoAbat = $mtBrutExoAbat;
        return $this;
    }
}
