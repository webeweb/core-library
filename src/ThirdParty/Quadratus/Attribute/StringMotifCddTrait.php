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
 * Motif cdd trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifCddTrait {

    /**
     * Motif cdd.
     *
     * @var string
     */
    private $motifCdd;

    /**
     * Get the motif cdd.
     *
     * @return string Returns the motif cdd.
     */
    public function getMotifCdd() {
        return $this->motifCdd;
    }

    /**
     * Set the motif cdd.
     *
     * @param string $motifCdd The motif cdd.
     */
    public function setMotifCdd($motifCdd) {
        $this->motifCdd = $motifCdd;
        return $this;
    }
}
