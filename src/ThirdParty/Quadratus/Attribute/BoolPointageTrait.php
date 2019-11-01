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
 * Pointage trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolPointageTrait {

    /**
     * Pointage.
     *
     * @var bool
     */
    private $pointage;

    /**
     * Get the pointage.
     *
     * @return bool Returns the pointage.
     */
    public function getPointage() {
        return $this->pointage;
    }

    /**
     * Set the pointage.
     *
     * @param bool $pointage The pointage.
     */
    public function setPointage($pointage) {
        $this->pointage = $pointage;
        return $this;
    }
}
