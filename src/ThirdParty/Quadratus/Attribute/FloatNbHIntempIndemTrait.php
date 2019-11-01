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
 * Nb h intemp indem trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHIntempIndemTrait {

    /**
     * Nb h intemp indem.
     *
     * @var float
     */
    private $nbHIntempIndem;

    /**
     * Get the nb h intemp indem.
     *
     * @return float Returns the nb h intemp indem.
     */
    public function getNbHIntempIndem() {
        return $this->nbHIntempIndem;
    }

    /**
     * Set the nb h intemp indem.
     *
     * @param float $nbHIntempIndem The nb h intemp indem.
     */
    public function setNbHIntempIndem($nbHIntempIndem) {
        $this->nbHIntempIndem = $nbHIntempIndem;
        return $this;
    }
}
