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
 * Trs art pied2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsArtPied2Trait {

    /**
     * Trs art pied2.
     *
     * @var string
     */
    private $trsArtPied2;

    /**
     * Get the trs art pied2.
     *
     * @return string Returns the trs art pied2.
     */
    public function getTrsArtPied2() {
        return $this->trsArtPied2;
    }

    /**
     * Set the trs art pied2.
     *
     * @param string $trsArtPied2 The trs art pied2.
     */
    public function setTrsArtPied2($trsArtPied2) {
        $this->trsArtPied2 = $trsArtPied2;
        return $this;
    }
}
