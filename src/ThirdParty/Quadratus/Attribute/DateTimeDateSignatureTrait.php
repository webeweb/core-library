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
 * Date signature trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateSignatureTrait {

    /**
     * Date signature.
     *
     * @var DateTime|null
     */
    private $dateSignature;

    /**
     * Get the date signature.
     *
     * @return DateTime|null Returns the date signature.
     */
    public function getDateSignature() {
        return $this->dateSignature;
    }

    /**
     * Set the date signature.
     *
     * @param DateTime|null $dateSignature The date signature.
     */
    public function setDateSignature(DateTime $dateSignature = null) {
        $this->dateSignature = $dateSignature;
        return $this;
    }
}
