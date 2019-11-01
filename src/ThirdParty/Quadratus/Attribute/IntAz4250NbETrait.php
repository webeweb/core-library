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
 * Az4250 nb e trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntAz4250NbETrait {

    /**
     * Az4250 nb e.
     *
     * @var int
     */
    private $az4250NbE;

    /**
     * Get the az4250 nb e.
     *
     * @return int Returns the az4250 nb e.
     */
    public function getAz4250NbE() {
        return $this->az4250NbE;
    }

    /**
     * Set the az4250 nb e.
     *
     * @param int $az4250NbE The az4250 nb e.
     */
    public function setAz4250NbE($az4250NbE) {
        $this->az4250NbE = $az4250NbE;
        return $this;
    }
}
