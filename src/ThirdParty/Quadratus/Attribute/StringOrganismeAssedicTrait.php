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
 * Organisme assedic trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringOrganismeAssedicTrait {

    /**
     * Organisme assedic.
     *
     * @var string
     */
    private $organismeAssedic;

    /**
     * Get the organisme assedic.
     *
     * @return string Returns the organisme assedic.
     */
    public function getOrganismeAssedic() {
        return $this->organismeAssedic;
    }

    /**
     * Set the organisme assedic.
     *
     * @param string $organismeAssedic The organisme assedic.
     */
    public function setOrganismeAssedic($organismeAssedic) {
        $this->organismeAssedic = $organismeAssedic;
        return $this;
    }
}
