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
 * Num cpt subvention trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumCptSubventionTrait {

    /**
     * Num cpt subvention.
     *
     * @var string
     */
    private $numCptSubvention;

    /**
     * Get the num cpt subvention.
     *
     * @return string Returns the num cpt subvention.
     */
    public function getNumCptSubvention() {
        return $this->numCptSubvention;
    }

    /**
     * Set the num cpt subvention.
     *
     * @param string $numCptSubvention The num cpt subvention.
     */
    public function setNumCptSubvention($numCptSubvention) {
        $this->numCptSubvention = $numCptSubvention;
        return $this;
    }
}
