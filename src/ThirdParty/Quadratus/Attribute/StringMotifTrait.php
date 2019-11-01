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
 * Motif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifTrait {

    /**
     * Motif.
     *
     * @var string
     */
    private $motif;

    /**
     * Get the motif.
     *
     * @return string Returns the motif.
     */
    public function getMotif() {
        return $this->motif;
    }

    /**
     * Set the motif.
     *
     * @param string $motif The motif.
     */
    public function setMotif($motif) {
        $this->motif = $motif;
        return $this;
    }
}
