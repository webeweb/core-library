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
 * Position convention col trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringPositionConventionColTrait {

    /**
     * Position convention col.
     *
     * @var string
     */
    private $positionConventionCol;

    /**
     * Get the position convention col.
     *
     * @return string Returns the position convention col.
     */
    public function getPositionConventionCol() {
        return $this->positionConventionCol;
    }

    /**
     * Set the position convention col.
     *
     * @param string $positionConventionCol The position convention col.
     */
    public function setPositionConventionCol($positionConventionCol) {
        $this->positionConventionCol = $positionConventionCol;
        return $this;
    }
}
