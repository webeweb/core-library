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
 * Particip patron avtge mnt1 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait FloatParticipPatronAvtgeMnt1Trait {

    /**
     * Particip patron avtge mnt1.
     *
     * @var float
     */
    private $participPatronAvtgeMnt1;

    /**
     * Get the particip patron avtge mnt1.
     *
     * @return float Returns the particip patron avtge mnt1.
     */
    public function getParticipPatronAvtgeMnt1() {
        return $this->participPatronAvtgeMnt1;
    }

    /**
     * Set the particip patron avtge mnt1.
     *
     * @param float $participPatronAvtgeMnt1 The particip patron avtge mnt1.
     */
    public function setParticipPatronAvtgeMnt1($participPatronAvtgeMnt1) {
        $this->participPatronAvtgeMnt1 = $participPatronAvtgeMnt1;
        return $this;
    }
}
