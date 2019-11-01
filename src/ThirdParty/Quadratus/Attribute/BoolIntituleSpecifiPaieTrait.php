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
 * Intitule specifi paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolIntituleSpecifiPaieTrait {

    /**
     * Intitule specifi paie.
     *
     * @var bool
     */
    private $intituleSpecifiPaie;

    /**
     * Get the intitule specifi paie.
     *
     * @return bool Returns the intitule specifi paie.
     */
    public function getIntituleSpecifiPaie() {
        return $this->intituleSpecifiPaie;
    }

    /**
     * Set the intitule specifi paie.
     *
     * @param bool $intituleSpecifiPaie The intitule specifi paie.
     */
    public function setIntituleSpecifiPaie($intituleSpecifiPaie) {
        $this->intituleSpecifiPaie = $intituleSpecifiPaie;
        return $this;
    }
}
