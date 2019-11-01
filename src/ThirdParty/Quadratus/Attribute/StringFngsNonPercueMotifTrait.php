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
 * Fngs non percue motif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFngsNonPercueMotifTrait {

    /**
     * Fngs non percue motif.
     *
     * @var string
     */
    private $fngsNonPercueMotif;

    /**
     * Get the fngs non percue motif.
     *
     * @return string Returns the fngs non percue motif.
     */
    public function getFngsNonPercueMotif() {
        return $this->fngsNonPercueMotif;
    }

    /**
     * Set the fngs non percue motif.
     *
     * @param string $fngsNonPercueMotif The fngs non percue motif.
     */
    public function setFngsNonPercueMotif($fngsNonPercueMotif) {
        $this->fngsNonPercueMotif = $fngsNonPercueMotif;
        return $this;
    }
}
