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
 * Commune trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCommuneTrait {

    /**
     * Commune.
     *
     * @var string
     */
    private $commune;

    /**
     * Get the commune.
     *
     * @return string Returns the commune.
     */
    public function getCommune() {
        return $this->commune;
    }

    /**
     * Set the commune.
     *
     * @param string $commune The commune.
     */
    public function setCommune($commune) {
        $this->commune = $commune;
        return $this;
    }
}
