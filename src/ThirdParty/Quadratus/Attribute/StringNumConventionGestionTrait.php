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
 * Num convention gestion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumConventionGestionTrait {

    /**
     * Num convention gestion.
     *
     * @var string
     */
    private $numConventionGestion;

    /**
     * Get the num convention gestion.
     *
     * @return string Returns the num convention gestion.
     */
    public function getNumConventionGestion() {
        return $this->numConventionGestion;
    }

    /**
     * Set the num convention gestion.
     *
     * @param string $numConventionGestion The num convention gestion.
     */
    public function setNumConventionGestion($numConventionGestion) {
        $this->numConventionGestion = $numConventionGestion;
        return $this;
    }
}
