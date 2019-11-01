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
 * Est occasion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEstOccasionTrait {

    /**
     * Est occasion.
     *
     * @var bool
     */
    private $estOccasion;

    /**
     * Get the est occasion.
     *
     * @return bool Returns the est occasion.
     */
    public function getEstOccasion() {
        return $this->estOccasion;
    }

    /**
     * Set the est occasion.
     *
     * @param bool $estOccasion The est occasion.
     */
    public function setEstOccasion($estOccasion) {
        $this->estOccasion = $estOccasion;
        return $this;
    }
}
