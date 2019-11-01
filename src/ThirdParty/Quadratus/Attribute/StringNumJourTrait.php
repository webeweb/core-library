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
 * Num jour trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumJourTrait {

    /**
     * Num jour.
     *
     * @var string
     */
    private $numJour;

    /**
     * Get the num jour.
     *
     * @return string Returns the num jour.
     */
    public function getNumJour() {
        return $this->numJour;
    }

    /**
     * Set the num jour.
     *
     * @param string $numJour The num jour.
     */
    public function setNumJour($numJour) {
        $this->numJour = $numJour;
        return $this;
    }
}
