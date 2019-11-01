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
 * Mt cotisation retraite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCotisationRetraiteTrait {

    /**
     * Mt cotisation retraite.
     *
     * @var float
     */
    private $mtCotisationRetraite;

    /**
     * Get the mt cotisation retraite.
     *
     * @return float Returns the mt cotisation retraite.
     */
    public function getMtCotisationRetraite() {
        return $this->mtCotisationRetraite;
    }

    /**
     * Set the mt cotisation retraite.
     *
     * @param float $mtCotisationRetraite The mt cotisation retraite.
     */
    public function setMtCotisationRetraite($mtCotisationRetraite) {
        $this->mtCotisationRetraite = $mtCotisationRetraite;
        return $this;
    }
}
