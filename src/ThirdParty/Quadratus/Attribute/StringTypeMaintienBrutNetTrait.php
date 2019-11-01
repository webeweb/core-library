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
 * Type maintien brut net trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTypeMaintienBrutNetTrait {

    /**
     * Type maintien brut net.
     *
     * @var string
     */
    private $typeMaintienBrutNet;

    /**
     * Get the type maintien brut net.
     *
     * @return string Returns the type maintien brut net.
     */
    public function getTypeMaintienBrutNet() {
        return $this->typeMaintienBrutNet;
    }

    /**
     * Set the type maintien brut net.
     *
     * @param string $typeMaintienBrutNet The type maintien brut net.
     */
    public function setTypeMaintienBrutNet($typeMaintienBrutNet) {
        $this->typeMaintienBrutNet = $typeMaintienBrutNet;
        return $this;
    }
}
