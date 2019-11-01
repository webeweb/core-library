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
 * Ed correspondance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEdCorrespondanceTrait {

    /**
     * Ed correspondance.
     *
     * @var bool
     */
    private $edCorrespondance;

    /**
     * Get the ed correspondance.
     *
     * @return bool Returns the ed correspondance.
     */
    public function getEdCorrespondance() {
        return $this->edCorrespondance;
    }

    /**
     * Set the ed correspondance.
     *
     * @param bool $edCorrespondance The ed correspondance.
     */
    public function setEdCorrespondance($edCorrespondance) {
        $this->edCorrespondance = $edCorrespondance;
        return $this;
    }
}
