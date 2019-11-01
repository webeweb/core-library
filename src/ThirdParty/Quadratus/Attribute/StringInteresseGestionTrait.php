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
 * Interesse gestion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringInteresseGestionTrait {

    /**
     * Interesse gestion.
     *
     * @var string
     */
    private $interesseGestion;

    /**
     * Get the interesse gestion.
     *
     * @return string Returns the interesse gestion.
     */
    public function getInteresseGestion() {
        return $this->interesseGestion;
    }

    /**
     * Set the interesse gestion.
     *
     * @param string $interesseGestion The interesse gestion.
     */
    public function setInteresseGestion($interesseGestion) {
        $this->interesseGestion = $interesseGestion;
        return $this;
    }
}
