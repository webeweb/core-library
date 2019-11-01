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
 * Trs gestion palettes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTrsGestionPalettesTrait {

    /**
     * Trs gestion palettes.
     *
     * @var bool
     */
    private $trsGestionPalettes;

    /**
     * Get the trs gestion palettes.
     *
     * @return bool Returns the trs gestion palettes.
     */
    public function getTrsGestionPalettes() {
        return $this->trsGestionPalettes;
    }

    /**
     * Set the trs gestion palettes.
     *
     * @param bool $trsGestionPalettes The trs gestion palettes.
     */
    public function setTrsGestionPalettes($trsGestionPalettes) {
        $this->trsGestionPalettes = $trsGestionPalettes;
        return $this;
    }
}
