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

use DateTime;

/**
 * Lettre de mission date signature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeLettreDeMissionDateSignatureTrait {

    /**
     * Lettre de mission date signature.
     *
     * @var DateTime|null
     */
    private $lettreDeMissionDateSignature;

    /**
     * Get the lettre de mission date signature.
     *
     * @return DateTime|null Returns the lettre de mission date signature.
     */
    public function getLettreDeMissionDateSignature() {
        return $this->lettreDeMissionDateSignature;
    }

    /**
     * Set the lettre de mission date signature.
     *
     * @param DateTime|null $lettreDeMissionDateSignature The lettre de mission date signature.
     */
    public function setLettreDeMissionDateSignature(DateTime $lettreDeMissionDateSignature = null) {
        $this->lettreDeMissionDateSignature = $lettreDeMissionDateSignature;
        return $this;
    }
}
