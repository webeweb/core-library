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
 * Motif radiation cga trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifRadiationCgaTrait {

    /**
     * Motif radiation cga.
     *
     * @var string
     */
    private $motifRadiationCga;

    /**
     * Get the motif radiation cga.
     *
     * @return string Returns the motif radiation cga.
     */
    public function getMotifRadiationCga() {
        return $this->motifRadiationCga;
    }

    /**
     * Set the motif radiation cga.
     *
     * @param string $motifRadiationCga The motif radiation cga.
     */
    public function setMotifRadiationCga($motifRadiationCga) {
        $this->motifRadiationCga = $motifRadiationCga;
        return $this;
    }
}
