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
 * Nb ha reintegrer trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatNbHaReintegrerTrait {

    /**
     * Nb ha reintegrer.
     *
     * @var float
     */
    private $nbHaReintegrer;

    /**
     * Get the nb ha reintegrer.
     *
     * @return float Returns the nb ha reintegrer.
     */
    public function getNbHaReintegrer() {
        return $this->nbHaReintegrer;
    }

    /**
     * Set the nb ha reintegrer.
     *
     * @param float $nbHaReintegrer The nb ha reintegrer.
     */
    public function setNbHaReintegrer($nbHaReintegrer) {
        $this->nbHaReintegrer = $nbHaReintegrer;
        return $this;
    }
}
