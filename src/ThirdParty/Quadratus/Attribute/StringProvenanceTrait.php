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
 * Provenance trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProvenanceTrait {

    /**
     * Provenance.
     *
     * @var string
     */
    private $provenance;

    /**
     * Get the provenance.
     *
     * @return string Returns the provenance.
     */
    public function getProvenance() {
        return $this->provenance;
    }

    /**
     * Set the provenance.
     *
     * @param string $provenance The provenance.
     */
    public function setProvenance($provenance) {
        $this->provenance = $provenance;
        return $this;
    }
}
