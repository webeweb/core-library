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
 * Fngs non a percevoir motif trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFngsNonAPercevoirMotifTrait {

    /**
     * Fngs non a percevoir motif.
     *
     * @var string
     */
    private $fngsNonAPercevoirMotif;

    /**
     * Get the fngs non a percevoir motif.
     *
     * @return string Returns the fngs non a percevoir motif.
     */
    public function getFngsNonAPercevoirMotif() {
        return $this->fngsNonAPercevoirMotif;
    }

    /**
     * Set the fngs non a percevoir motif.
     *
     * @param string $fngsNonAPercevoirMotif The fngs non a percevoir motif.
     */
    public function setFngsNonAPercevoirMotif($fngsNonAPercevoirMotif) {
        $this->fngsNonAPercevoirMotif = $fngsNonAPercevoirMotif;
        return $this;
    }
}
