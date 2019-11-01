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
 * Regle barn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRegleBarnTrait {

    /**
     * Regle barn.
     *
     * @var string
     */
    private $regleBarn;

    /**
     * Get the regle barn.
     *
     * @return string Returns the regle barn.
     */
    public function getRegleBarn() {
        return $this->regleBarn;
    }

    /**
     * Set the regle barn.
     *
     * @param string $regleBarn The regle barn.
     */
    public function setRegleBarn($regleBarn) {
        $this->regleBarn = $regleBarn;
        return $this;
    }
}
