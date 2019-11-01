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
 * Visu dans att fisc trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolVisuDansAttFiscTrait {

    /**
     * Visu dans att fisc.
     *
     * @var bool
     */
    private $visuDansAttFisc;

    /**
     * Get the visu dans att fisc.
     *
     * @return bool Returns the visu dans att fisc.
     */
    public function getVisuDansAttFisc() {
        return $this->visuDansAttFisc;
    }

    /**
     * Set the visu dans att fisc.
     *
     * @param bool $visuDansAttFisc The visu dans att fisc.
     */
    public function setVisuDansAttFisc($visuDansAttFisc) {
        $this->visuDansAttFisc = $visuDansAttFisc;
        return $this;
    }
}
