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
 * Maintien intervient cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMaintienIntervientCpTrait {

    /**
     * Maintien intervient cp.
     *
     * @var string
     */
    private $maintienIntervientCp;

    /**
     * Get the maintien intervient cp.
     *
     * @return string Returns the maintien intervient cp.
     */
    public function getMaintienIntervientCp() {
        return $this->maintienIntervientCp;
    }

    /**
     * Set the maintien intervient cp.
     *
     * @param string $maintienIntervientCp The maintien intervient cp.
     */
    public function setMaintienIntervientCp($maintienIntervientCp) {
        $this->maintienIntervientCp = $maintienIntervientCp;
        return $this;
    }
}
