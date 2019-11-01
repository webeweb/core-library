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
 * Motif situation trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifSituationTrait {

    /**
     * Motif situation.
     *
     * @var string
     */
    private $motifSituation;

    /**
     * Get the motif situation.
     *
     * @return string Returns the motif situation.
     */
    public function getMotifSituation() {
        return $this->motifSituation;
    }

    /**
     * Set the motif situation.
     *
     * @param string $motifSituation The motif situation.
     */
    public function setMotifSituation($motifSituation) {
        $this->motifSituation = $motifSituation;
        return $this;
    }
}
