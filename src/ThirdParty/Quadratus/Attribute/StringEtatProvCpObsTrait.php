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
 * Etat prov cp obs trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringEtatProvCpObsTrait {

    /**
     * Etat prov cp obs.
     *
     * @var string
     */
    private $etatProvCpObs;

    /**
     * Get the etat prov cp obs.
     *
     * @return string Returns the etat prov cp obs.
     */
    public function getEtatProvCpObs() {
        return $this->etatProvCpObs;
    }

    /**
     * Set the etat prov cp obs.
     *
     * @param string $etatProvCpObs The etat prov cp obs.
     */
    public function setEtatProvCpObs($etatProvCpObs) {
        $this->etatProvCpObs = $etatProvCpObs;
        return $this;
    }
}
