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
 * Tot cotis patron trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatTotCotisPatronTrait {

    /**
     * Tot cotis patron.
     *
     * @var float
     */
    private $totCotisPatron;

    /**
     * Get the tot cotis patron.
     *
     * @return float Returns the tot cotis patron.
     */
    public function getTotCotisPatron() {
        return $this->totCotisPatron;
    }

    /**
     * Set the tot cotis patron.
     *
     * @param float $totCotisPatron The tot cotis patron.
     */
    public function setTotCotisPatron($totCotisPatron) {
        $this->totCotisPatron = $totCotisPatron;
        return $this;
    }
}
