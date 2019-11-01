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
 * Motif at trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifAtTrait {

    /**
     * Motif at.
     *
     * @var string
     */
    private $motifAt;

    /**
     * Get the motif at.
     *
     * @return string Returns the motif at.
     */
    public function getMotifAt() {
        return $this->motifAt;
    }

    /**
     * Set the motif at.
     *
     * @param string $motifAt The motif at.
     */
    public function setMotifAt($motifAt) {
        $this->motifAt = $motifAt;
        return $this;
    }
}
