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
 * Lieu signature dnae trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringLieuSignatureDnaeTrait {

    /**
     * Lieu signature dnae.
     *
     * @var string
     */
    private $lieuSignatureDnae;

    /**
     * Get the lieu signature dnae.
     *
     * @return string Returns the lieu signature dnae.
     */
    public function getLieuSignatureDnae() {
        return $this->lieuSignatureDnae;
    }

    /**
     * Set the lieu signature dnae.
     *
     * @param string $lieuSignatureDnae The lieu signature dnae.
     */
    public function setLieuSignatureDnae($lieuSignatureDnae) {
        $this->lieuSignatureDnae = $lieuSignatureDnae;
        return $this;
    }
}
