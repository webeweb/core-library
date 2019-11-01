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
 * Nb decimales duree trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbDecimalesDureeTrait {

    /**
     * Nb decimales duree.
     *
     * @var string
     */
    private $nbDecimalesDuree;

    /**
     * Get the nb decimales duree.
     *
     * @return string Returns the nb decimales duree.
     */
    public function getNbDecimalesDuree() {
        return $this->nbDecimalesDuree;
    }

    /**
     * Set the nb decimales duree.
     *
     * @param string $nbDecimalesDuree The nb decimales duree.
     */
    public function setNbDecimalesDuree($nbDecimalesDuree) {
        $this->nbDecimalesDuree = $nbDecimalesDuree;
        return $this;
    }
}
