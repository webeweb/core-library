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
 * Num voie2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringNumVoie2Trait {

    /**
     * Num voie2.
     *
     * @var string
     */
    private $numVoie2;

    /**
     * Get the num voie2.
     *
     * @return string Returns the num voie2.
     */
    public function getNumVoie2() {
        return $this->numVoie2;
    }

    /**
     * Set the num voie2.
     *
     * @param string $numVoie2 The num voie2.
     */
    public function setNumVoie2($numVoie2) {
        $this->numVoie2 = $numVoie2;
        return $this;
    }
}
