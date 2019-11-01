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
 * Mot cle dans pied trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotCleDansPiedTrait {

    /**
     * Mot cle dans pied.
     *
     * @var string
     */
    private $motCleDansPied;

    /**
     * Get the mot cle dans pied.
     *
     * @return string Returns the mot cle dans pied.
     */
    public function getMotCleDansPied() {
        return $this->motCleDansPied;
    }

    /**
     * Set the mot cle dans pied.
     *
     * @param string $motCleDansPied The mot cle dans pied.
     */
    public function setMotCleDansPied($motCleDansPied) {
        $this->motCleDansPied = $motCleDansPied;
        return $this;
    }
}
