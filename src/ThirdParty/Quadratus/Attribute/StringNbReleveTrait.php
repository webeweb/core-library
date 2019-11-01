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
 * Nb releve trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbReleveTrait {

    /**
     * Nb releve.
     *
     * @var string
     */
    private $nbReleve;

    /**
     * Get the nb releve.
     *
     * @return string Returns the nb releve.
     */
    public function getNbReleve() {
        return $this->nbReleve;
    }

    /**
     * Set the nb releve.
     *
     * @param string $nbReleve The nb releve.
     */
    public function setNbReleve($nbReleve) {
        $this->nbReleve = $nbReleve;
        return $this;
    }
}
