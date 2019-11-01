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
 * Alertes paie dans reclam trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolAlertesPaieDansReclamTrait {

    /**
     * Alertes paie dans reclam.
     *
     * @var bool
     */
    private $alertesPaieDansReclam;

    /**
     * Get the alertes paie dans reclam.
     *
     * @return bool Returns the alertes paie dans reclam.
     */
    public function getAlertesPaieDansReclam() {
        return $this->alertesPaieDansReclam;
    }

    /**
     * Set the alertes paie dans reclam.
     *
     * @param bool $alertesPaieDansReclam The alertes paie dans reclam.
     */
    public function setAlertesPaieDansReclam($alertesPaieDansReclam) {
        $this->alertesPaieDansReclam = $alertesPaieDansReclam;
        return $this;
    }
}
