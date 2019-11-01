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
 * Ref contrat trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRefContratTrait {

    /**
     * Ref contrat.
     *
     * @var string
     */
    private $refContrat;

    /**
     * Get the ref contrat.
     *
     * @return string Returns the ref contrat.
     */
    public function getRefContrat() {
        return $this->refContrat;
    }

    /**
     * Set the ref contrat.
     *
     * @param string $refContrat The ref contrat.
     */
    public function setRefContrat($refContrat) {
        $this->refContrat = $refContrat;
        return $this;
    }
}
