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
 * Mode planning trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntModePlanningTrait {

    /**
     * Mode planning.
     *
     * @var int
     */
    private $modePlanning;

    /**
     * Get the mode planning.
     *
     * @return int Returns the mode planning.
     */
    public function getModePlanning() {
        return $this->modePlanning;
    }

    /**
     * Set the mode planning.
     *
     * @param int $modePlanning The mode planning.
     */
    public function setModePlanning($modePlanning) {
        $this->modePlanning = $modePlanning;
        return $this;
    }
}
