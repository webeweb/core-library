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
 * Motif difference trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifDifferenceTrait {

    /**
     * Motif difference.
     *
     * @var string
     */
    private $motifDifference;

    /**
     * Get the motif difference.
     *
     * @return string Returns the motif difference.
     */
    public function getMotifDifference() {
        return $this->motifDifference;
    }

    /**
     * Set the motif difference.
     *
     * @param string $motifDifference The motif difference.
     */
    public function setMotifDifference($motifDifference) {
        $this->motifDifference = $motifDifference;
        return $this;
    }
}
