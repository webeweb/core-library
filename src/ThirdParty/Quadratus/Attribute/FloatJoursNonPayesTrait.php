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
 * Jours non payes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatJoursNonPayesTrait {

    /**
     * Jours non payes.
     *
     * @var float
     */
    private $joursNonPayes;

    /**
     * Get the jours non payes.
     *
     * @return float Returns the jours non payes.
     */
    public function getJoursNonPayes() {
        return $this->joursNonPayes;
    }

    /**
     * Set the jours non payes.
     *
     * @param float $joursNonPayes The jours non payes.
     */
    public function setJoursNonPayes($joursNonPayes) {
        $this->joursNonPayes = $joursNonPayes;
        return $this;
    }
}
