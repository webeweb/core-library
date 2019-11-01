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
 * Type tranche trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeTrancheTrait {

    /**
     * Type tranche.
     *
     * @var string
     */
    private $typeTranche;

    /**
     * Get the type tranche.
     *
     * @return string Returns the type tranche.
     */
    public function getTypeTranche() {
        return $this->typeTranche;
    }

    /**
     * Set the type tranche.
     *
     * @param string $typeTranche The type tranche.
     */
    public function setTypeTranche($typeTranche) {
        $this->typeTranche = $typeTranche;
        return $this;
    }
}
