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
 * Prolongation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolProlongationTrait {

    /**
     * Prolongation.
     *
     * @var bool
     */
    private $prolongation;

    /**
     * Get the prolongation.
     *
     * @return bool Returns the prolongation.
     */
    public function getProlongation() {
        return $this->prolongation;
    }

    /**
     * Set the prolongation.
     *
     * @param bool $prolongation The prolongation.
     */
    public function setProlongation($prolongation) {
        $this->prolongation = $prolongation;
        return $this;
    }
}
