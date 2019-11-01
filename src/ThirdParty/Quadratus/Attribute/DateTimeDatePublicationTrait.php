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
 * Date publication trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDatePublicationTrait {

    /**
     * Date publication.
     *
     * @var DateTime|null
     */
    private $datePublication;

    /**
     * Get the date publication.
     *
     * @return DateTime|null Returns the date publication.
     */
    public function getDatePublication() {
        return $this->datePublication;
    }

    /**
     * Set the date publication.
     *
     * @param DateTime|null $datePublication The date publication.
     */
    public function setDatePublication(DateTime $datePublication = null) {
        $this->datePublication = $datePublication;
        return $this;
    }
}
