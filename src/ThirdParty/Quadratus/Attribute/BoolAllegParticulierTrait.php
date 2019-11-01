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
 * Alleg particulier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAllegParticulierTrait {

    /**
     * Alleg particulier.
     *
     * @var bool
     */
    private $allegParticulier;

    /**
     * Get the alleg particulier.
     *
     * @return bool Returns the alleg particulier.
     */
    public function getAllegParticulier() {
        return $this->allegParticulier;
    }

    /**
     * Set the alleg particulier.
     *
     * @param bool $allegParticulier The alleg particulier.
     */
    public function setAllegParticulier($allegParticulier) {
        $this->allegParticulier = $allegParticulier;
        return $this;
    }
}
