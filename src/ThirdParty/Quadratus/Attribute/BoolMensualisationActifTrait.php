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
 * Mensualisation actif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolMensualisationActifTrait {

    /**
     * Mensualisation actif.
     *
     * @var bool
     */
    private $mensualisationActif;

    /**
     * Get the mensualisation actif.
     *
     * @return bool Returns the mensualisation actif.
     */
    public function getMensualisationActif() {
        return $this->mensualisationActif;
    }

    /**
     * Set the mensualisation actif.
     *
     * @param bool $mensualisationActif The mensualisation actif.
     */
    public function setMensualisationActif($mensualisationActif) {
        $this->mensualisationActif = $mensualisationActif;
        return $this;
    }
}
