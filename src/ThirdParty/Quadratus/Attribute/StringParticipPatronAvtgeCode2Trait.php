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
 * Particip patron avtge code2 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringParticipPatronAvtgeCode2Trait {

    /**
     * Particip patron avtge code2.
     *
     * @var string
     */
    private $participPatronAvtgeCode2;

    /**
     * Get the particip patron avtge code2.
     *
     * @return string Returns the particip patron avtge code2.
     */
    public function getParticipPatronAvtgeCode2() {
        return $this->participPatronAvtgeCode2;
    }

    /**
     * Set the particip patron avtge code2.
     *
     * @param string $participPatronAvtgeCode2 The particip patron avtge code2.
     */
    public function setParticipPatronAvtgeCode2($participPatronAvtgeCode2) {
        $this->participPatronAvtgeCode2 = $participPatronAvtgeCode2;
        return $this;
    }
}
