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
 * Avec entete trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAvecEnteteTrait {

    /**
     * Avec entete.
     *
     * @var bool
     */
    private $avecEntete;

    /**
     * Get the avec entete.
     *
     * @return bool Returns the avec entete.
     */
    public function getAvecEntete() {
        return $this->avecEntete;
    }

    /**
     * Set the avec entete.
     *
     * @param bool $avecEntete The avec entete.
     */
    public function setAvecEntete($avecEntete) {
        $this->avecEntete = $avecEntete;
        return $this;
    }
}
