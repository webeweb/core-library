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
 * Date application forfait social8 trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateApplicationForfaitSocial8Trait {

    /**
     * Date application forfait social8.
     *
     * @var DateTime|null
     */
    private $dateApplicationForfaitSocial8;

    /**
     * Get the date application forfait social8.
     *
     * @return DateTime|null Returns the date application forfait social8.
     */
    public function getDateApplicationForfaitSocial8() {
        return $this->dateApplicationForfaitSocial8;
    }

    /**
     * Set the date application forfait social8.
     *
     * @param DateTime|null $dateApplicationForfaitSocial8 The date application forfait social8.
     */
    public function setDateApplicationForfaitSocial8(DateTime $dateApplicationForfaitSocial8 = null) {
        $this->dateApplicationForfaitSocial8 = $dateApplicationForfaitSocial8;
        return $this;
    }
}
