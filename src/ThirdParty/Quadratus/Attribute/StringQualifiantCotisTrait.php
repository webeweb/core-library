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
 * Qualifiant cotis trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringQualifiantCotisTrait {

    /**
     * Qualifiant cotis.
     *
     * @var string
     */
    private $qualifiantCotis;

    /**
     * Get the qualifiant cotis.
     *
     * @return string Returns the qualifiant cotis.
     */
    public function getQualifiantCotis() {
        return $this->qualifiantCotis;
    }

    /**
     * Set the qualifiant cotis.
     *
     * @param string $qualifiantCotis The qualifiant cotis.
     */
    public function setQualifiantCotis($qualifiantCotis) {
        $this->qualifiantCotis = $qualifiantCotis;
        return $this;
    }
}
