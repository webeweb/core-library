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
 * Mot trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotTrait {

    /**
     * Mot.
     *
     * @var string
     */
    private $mot;

    /**
     * Get the mot.
     *
     * @return string Returns the mot.
     */
    public function getMot() {
        return $this->mot;
    }

    /**
     * Set the mot.
     *
     * @param string $mot The mot.
     */
    public function setMot($mot) {
        $this->mot = $mot;
        return $this;
    }
}
