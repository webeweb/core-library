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
 * Dans1 groupe trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolDans1GroupeTrait {

    /**
     * Dans1 groupe.
     *
     * @var bool
     */
    private $dans1Groupe;

    /**
     * Get the dans1 groupe.
     *
     * @return bool Returns the dans1 groupe.
     */
    public function getDans1Groupe() {
        return $this->dans1Groupe;
    }

    /**
     * Set the dans1 groupe.
     *
     * @param bool $dans1Groupe The dans1 groupe.
     */
    public function setDans1Groupe($dans1Groupe) {
        $this->dans1Groupe = $dans1Groupe;
        return $this;
    }
}
