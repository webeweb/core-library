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
 * Unite prem date entree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUnitePremDateEntreeTrait {

    /**
     * Unite prem date entree.
     *
     * @var string
     */
    private $unitePremDateEntree;

    /**
     * Get the unite prem date entree.
     *
     * @return string Returns the unite prem date entree.
     */
    public function getUnitePremDateEntree() {
        return $this->unitePremDateEntree;
    }

    /**
     * Set the unite prem date entree.
     *
     * @param string $unitePremDateEntree The unite prem date entree.
     */
    public function setUnitePremDateEntree($unitePremDateEntree) {
        $this->unitePremDateEntree = $unitePremDateEntree;
        return $this;
    }
}
