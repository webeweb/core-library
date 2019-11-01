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
 * Longueur num aff trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntLongueurNumAffTrait {

    /**
     * Longueur num aff.
     *
     * @var int
     */
    private $longueurNumAff;

    /**
     * Get the longueur num aff.
     *
     * @return int Returns the longueur num aff.
     */
    public function getLongueurNumAff() {
        return $this->longueurNumAff;
    }

    /**
     * Set the longueur num aff.
     *
     * @param int $longueurNumAff The longueur num aff.
     */
    public function setLongueurNumAff($longueurNumAff) {
        $this->longueurNumAff = $longueurNumAff;
        return $this;
    }
}
