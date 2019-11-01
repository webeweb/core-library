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
 * Per reference au trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimePerReferenceAuTrait {

    /**
     * Per reference au.
     *
     * @var DateTime|null
     */
    private $perReferenceAu;

    /**
     * Get the per reference au.
     *
     * @return DateTime|null Returns the per reference au.
     */
    public function getPerReferenceAu() {
        return $this->perReferenceAu;
    }

    /**
     * Set the per reference au.
     *
     * @param DateTime|null $perReferenceAu The per reference au.
     */
    public function setPerReferenceAu(DateTime $perReferenceAu = null) {
        $this->perReferenceAu = $perReferenceAu;
        return $this;
    }
}
