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
 * Date licenciement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateLicenciementTrait {

    /**
     * Date licenciement.
     *
     * @var DateTime|null
     */
    private $dateLicenciement;

    /**
     * Get the date licenciement.
     *
     * @return DateTime|null Returns the date licenciement.
     */
    public function getDateLicenciement() {
        return $this->dateLicenciement;
    }

    /**
     * Set the date licenciement.
     *
     * @param DateTime|null $dateLicenciement The date licenciement.
     */
    public function setDateLicenciement(DateTime $dateLicenciement = null) {
        $this->dateLicenciement = $dateLicenciement;
        return $this;
    }
}
