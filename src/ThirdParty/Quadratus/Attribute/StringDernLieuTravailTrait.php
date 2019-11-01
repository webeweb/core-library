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
 * Dern lieu travail trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDernLieuTravailTrait {

    /**
     * Dern lieu travail.
     *
     * @var string
     */
    private $dernLieuTravail;

    /**
     * Get the dern lieu travail.
     *
     * @return string Returns the dern lieu travail.
     */
    public function getDernLieuTravail() {
        return $this->dernLieuTravail;
    }

    /**
     * Set the dern lieu travail.
     *
     * @param string $dernLieuTravail The dern lieu travail.
     */
    public function setDernLieuTravail($dernLieuTravail) {
        $this->dernLieuTravail = $dernLieuTravail;
        return $this;
    }
}
