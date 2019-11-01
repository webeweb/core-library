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
 * Tp pas notes de frais trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolTpPasNotesDeFraisTrait {

    /**
     * Tp pas notes de frais.
     *
     * @var bool
     */
    private $tpPasNotesDeFrais;

    /**
     * Get the tp pas notes de frais.
     *
     * @return bool Returns the tp pas notes de frais.
     */
    public function getTpPasNotesDeFrais() {
        return $this->tpPasNotesDeFrais;
    }

    /**
     * Set the tp pas notes de frais.
     *
     * @param bool $tpPasNotesDeFrais The tp pas notes de frais.
     */
    public function setTpPasNotesDeFrais($tpPasNotesDeFrais) {
        $this->tpPasNotesDeFrais = $tpPasNotesDeFrais;
        return $this;
    }
}
