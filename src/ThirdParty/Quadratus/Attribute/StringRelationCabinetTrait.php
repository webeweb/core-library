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
 * Relation cabinet trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRelationCabinetTrait {

    /**
     * Relation cabinet.
     *
     * @var string
     */
    private $relationCabinet;

    /**
     * Get the relation cabinet.
     *
     * @return string Returns the relation cabinet.
     */
    public function getRelationCabinet() {
        return $this->relationCabinet;
    }

    /**
     * Set the relation cabinet.
     *
     * @param string $relationCabinet The relation cabinet.
     */
    public function setRelationCabinet($relationCabinet) {
        $this->relationCabinet = $relationCabinet;
        return $this;
    }
}
