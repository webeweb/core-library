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
 * Date creation client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateCreationClientTrait {

    /**
     * Date creation client.
     *
     * @var DateTime|null
     */
    private $dateCreationClient;

    /**
     * Get the date creation client.
     *
     * @return DateTime|null Returns the date creation client.
     */
    public function getDateCreationClient() {
        return $this->dateCreationClient;
    }

    /**
     * Set the date creation client.
     *
     * @param DateTime|null $dateCreationClient The date creation client.
     */
    public function setDateCreationClient(DateTime $dateCreationClient = null) {
        $this->dateCreationClient = $dateCreationClient;
        return $this;
    }
}
