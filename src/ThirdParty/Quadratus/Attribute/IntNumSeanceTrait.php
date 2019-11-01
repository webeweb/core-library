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
 * Num seance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntNumSeanceTrait {

    /**
     * Num seance.
     *
     * @var int
     */
    private $numSeance;

    /**
     * Get the num seance.
     *
     * @return int Returns the num seance.
     */
    public function getNumSeance() {
        return $this->numSeance;
    }

    /**
     * Set the num seance.
     *
     * @param int $numSeance The num seance.
     */
    public function setNumSeance($numSeance) {
        $this->numSeance = $numSeance;
        return $this;
    }
}
