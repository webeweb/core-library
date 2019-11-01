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
 * Mt cotisation prev trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatMtCotisationPrevTrait {

    /**
     * Mt cotisation prev.
     *
     * @var float
     */
    private $mtCotisationPrev;

    /**
     * Get the mt cotisation prev.
     *
     * @return float Returns the mt cotisation prev.
     */
    public function getMtCotisationPrev() {
        return $this->mtCotisationPrev;
    }

    /**
     * Set the mt cotisation prev.
     *
     * @param float $mtCotisationPrev The mt cotisation prev.
     */
    public function setMtCotisationPrev($mtCotisationPrev) {
        $this->mtCotisationPrev = $mtCotisationPrev;
        return $this;
    }
}
