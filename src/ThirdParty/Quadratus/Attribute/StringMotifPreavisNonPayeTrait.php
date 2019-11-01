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
 * Motif preavis non paye trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMotifPreavisNonPayeTrait {

    /**
     * Motif preavis non paye.
     *
     * @var string
     */
    private $motifPreavisNonPaye;

    /**
     * Get the motif preavis non paye.
     *
     * @return string Returns the motif preavis non paye.
     */
    public function getMotifPreavisNonPaye() {
        return $this->motifPreavisNonPaye;
    }

    /**
     * Set the motif preavis non paye.
     *
     * @param string $motifPreavisNonPaye The motif preavis non paye.
     */
    public function setMotifPreavisNonPaye($motifPreavisNonPaye) {
        $this->motifPreavisNonPaye = $motifPreavisNonPaye;
        return $this;
    }
}
