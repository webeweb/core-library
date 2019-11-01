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
 * Sign qualite trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntSignQualiteTrait {

    /**
     * Sign qualite.
     *
     * @var int
     */
    private $signQualite;

    /**
     * Get the sign qualite.
     *
     * @return int Returns the sign qualite.
     */
    public function getSignQualite() {
        return $this->signQualite;
    }

    /**
     * Set the sign qualite.
     *
     * @param int $signQualite The sign qualite.
     */
    public function setSignQualite($signQualite) {
        $this->signQualite = $signQualite;
        return $this;
    }
}
