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
 * Doss paie trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDossPaieTrait {

    /**
     * Doss paie.
     *
     * @var string
     */
    private $dossPaie;

    /**
     * Get the doss paie.
     *
     * @return string Returns the doss paie.
     */
    public function getDossPaie() {
        return $this->dossPaie;
    }

    /**
     * Set the doss paie.
     *
     * @param string $dossPaie The doss paie.
     */
    public function setDossPaie($dossPaie) {
        $this->dossPaie = $dossPaie;
        return $this;
    }
}
