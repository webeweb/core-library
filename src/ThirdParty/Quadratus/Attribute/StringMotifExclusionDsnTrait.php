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
 * Motif exclusion dsn trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifExclusionDsnTrait {

    /**
     * Motif exclusion dsn.
     *
     * @var string
     */
    private $motifExclusionDsn;

    /**
     * Get the motif exclusion dsn.
     *
     * @return string Returns the motif exclusion dsn.
     */
    public function getMotifExclusionDsn() {
        return $this->motifExclusionDsn;
    }

    /**
     * Set the motif exclusion dsn.
     *
     * @param string $motifExclusionDsn The motif exclusion dsn.
     */
    public function setMotifExclusionDsn($motifExclusionDsn) {
        $this->motifExclusionDsn = $motifExclusionDsn;
        return $this;
    }
}
