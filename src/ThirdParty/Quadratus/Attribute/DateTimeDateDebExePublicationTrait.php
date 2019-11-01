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
 * Date deb exe publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateDebExePublicationTrait {

    /**
     * Date deb exe publication.
     *
     * @var DateTime|null
     */
    private $dateDebExePublication;

    /**
     * Get the date deb exe publication.
     *
     * @return DateTime|null Returns the date deb exe publication.
     */
    public function getDateDebExePublication() {
        return $this->dateDebExePublication;
    }

    /**
     * Set the date deb exe publication.
     *
     * @param DateTime|null $dateDebExePublication The date deb exe publication.
     */
    public function setDateDebExePublication(DateTime $dateDebExePublication = null) {
        $this->dateDebExePublication = $dateDebExePublication;
        return $this;
    }
}
