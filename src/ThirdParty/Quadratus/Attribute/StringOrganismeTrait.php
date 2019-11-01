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
 * Organisme trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrganismeTrait {

    /**
     * Organisme.
     *
     * @var string
     */
    private $organisme;

    /**
     * Get the organisme.
     *
     * @return string Returns the organisme.
     */
    public function getOrganisme() {
        return $this->organisme;
    }

    /**
     * Set the organisme.
     *
     * @param string $organisme The organisme.
     */
    public function setOrganisme($organisme) {
        $this->organisme = $organisme;
        return $this;
    }
}
