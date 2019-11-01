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
 * Motif rupture trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifRuptureTrait {

    /**
     * Motif rupture.
     *
     * @var string
     */
    private $motifRupture;

    /**
     * Get the motif rupture.
     *
     * @return string Returns the motif rupture.
     */
    public function getMotifRupture() {
        return $this->motifRupture;
    }

    /**
     * Set the motif rupture.
     *
     * @param string $motifRupture The motif rupture.
     */
    public function setMotifRupture($motifRupture) {
        $this->motifRupture = $motifRupture;
        return $this;
    }
}
