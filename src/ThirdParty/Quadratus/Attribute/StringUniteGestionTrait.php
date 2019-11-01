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
 * Unite gestion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringUniteGestionTrait {

    /**
     * Unite gestion.
     *
     * @var string
     */
    private $uniteGestion;

    /**
     * Get the unite gestion.
     *
     * @return string Returns the unite gestion.
     */
    public function getUniteGestion() {
        return $this->uniteGestion;
    }

    /**
     * Set the unite gestion.
     *
     * @param string $uniteGestion The unite gestion.
     */
    public function setUniteGestion($uniteGestion) {
        $this->uniteGestion = $uniteGestion;
        return $this;
    }
}
