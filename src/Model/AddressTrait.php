<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model;

use WBW\Library\Core\Model\Attribute\StringAddresseeTrait;
use WBW\Library\Core\Model\Attribute\StringCountryTrait;
use WBW\Library\Core\Model\Attribute\StringHouseNumberTrait;
use WBW\Library\Core\Model\Attribute\StringLocationTrait;
use WBW\Library\Core\Model\Attribute\StringPostalCodeTrait;
use WBW\Library\Core\Model\Attribute\StringStreetNameTrait;

/**
 * Address trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\Core\Model
 */
trait AddressTrait {

    use StringAddresseeTrait;
    use StringCountryTrait;
    use StringHouseNumberTrait;
    use StringLocationTrait;
    use StringPostalCodeTrait;
    use StringStreetNameTrait;

    /**
     * Addressee description.
     *
     * @var string
     */
    private $addresseeDescription;

    /**
     * Get the addressee description.
     *
     * @return string Returns the addressee description.
     */
    public function getAddresseeDescription() {
        return $this->addresseeDescription;
    }

    /**
     * Set the addressee description.
     *
     * @param string $addresseeDescription The addressee description.
     */
    public function setAddresseeDescription($addresseeDescription) {
        $this->addresseeDescription = $addresseeDescription;
        return $this;
    }
}
