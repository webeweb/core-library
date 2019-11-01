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
 * Fermeture auto trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolFermetureAutoTrait {

    /**
     * Fermeture auto.
     *
     * @var bool
     */
    private $fermetureAuto;

    /**
     * Get the fermeture auto.
     *
     * @return bool Returns the fermeture auto.
     */
    public function getFermetureAuto() {
        return $this->fermetureAuto;
    }

    /**
     * Set the fermeture auto.
     *
     * @param bool $fermetureAuto The fermeture auto.
     */
    public function setFermetureAuto($fermetureAuto) {
        $this->fermetureAuto = $fermetureAuto;
        return $this;
    }
}
