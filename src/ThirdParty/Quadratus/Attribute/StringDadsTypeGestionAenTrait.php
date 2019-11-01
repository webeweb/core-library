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
 * Dads type gestion aen trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDadsTypeGestionAenTrait {

    /**
     * Dads type gestion aen.
     *
     * @var string
     */
    private $dadsTypeGestionAen;

    /**
     * Get the dads type gestion aen.
     *
     * @return string Returns the dads type gestion aen.
     */
    public function getDadsTypeGestionAen() {
        return $this->dadsTypeGestionAen;
    }

    /**
     * Set the dads type gestion aen.
     *
     * @param string $dadsTypeGestionAen The dads type gestion aen.
     */
    public function setDadsTypeGestionAen($dadsTypeGestionAen) {
        $this->dadsTypeGestionAen = $dadsTypeGestionAen;
        return $this;
    }
}
