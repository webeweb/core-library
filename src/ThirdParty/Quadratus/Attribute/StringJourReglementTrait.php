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
 * Jour reglement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringJourReglementTrait {

    /**
     * Jour reglement.
     *
     * @var string
     */
    private $jourReglement;

    /**
     * Get the jour reglement.
     *
     * @return string Returns the jour reglement.
     */
    public function getJourReglement() {
        return $this->jourReglement;
    }

    /**
     * Set the jour reglement.
     *
     * @param string $jourReglement The jour reglement.
     */
    public function setJourReglement($jourReglement) {
        $this->jourReglement = $jourReglement;
        return $this;
    }
}
