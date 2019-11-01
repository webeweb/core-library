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
 * Trs art pied trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringTrsArtPiedTrait {

    /**
     * Trs art pied.
     *
     * @var string
     */
    private $trsArtPied;

    /**
     * Get the trs art pied.
     *
     * @return string Returns the trs art pied.
     */
    public function getTrsArtPied() {
        return $this->trsArtPied;
    }

    /**
     * Set the trs art pied.
     *
     * @param string $trsArtPied The trs art pied.
     */
    public function setTrsArtPied($trsArtPied) {
        $this->trsArtPied = $trsArtPied;
        return $this;
    }
}
