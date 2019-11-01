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
 * Nb mois majoration trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNbMoisMajorationTrait {

    /**
     * Nb mois majoration.
     *
     * @var string
     */
    private $nbMoisMajoration;

    /**
     * Get the nb mois majoration.
     *
     * @return string Returns the nb mois majoration.
     */
    public function getNbMoisMajoration() {
        return $this->nbMoisMajoration;
    }

    /**
     * Set the nb mois majoration.
     *
     * @param string $nbMoisMajoration The nb mois majoration.
     */
    public function setNbMoisMajoration($nbMoisMajoration) {
        $this->nbMoisMajoration = $nbMoisMajoration;
        return $this;
    }
}
