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
 * Auto assurance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAutoAssuranceTrait {

    /**
     * Auto assurance.
     *
     * @var bool
     */
    private $autoAssurance;

    /**
     * Get the auto assurance.
     *
     * @return bool Returns the auto assurance.
     */
    public function getAutoAssurance() {
        return $this->autoAssurance;
    }

    /**
     * Set the auto assurance.
     *
     * @param bool $autoAssurance The auto assurance.
     */
    public function setAutoAssurance($autoAssurance) {
        $this->autoAssurance = $autoAssurance;
        return $this;
    }
}
