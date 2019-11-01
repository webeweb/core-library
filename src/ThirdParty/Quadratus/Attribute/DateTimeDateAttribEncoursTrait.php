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
 * Date attrib encours trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDateAttribEncoursTrait {

    /**
     * Date attrib encours.
     *
     * @var DateTime|null
     */
    private $dateAttribEncours;

    /**
     * Get the date attrib encours.
     *
     * @return DateTime|null Returns the date attrib encours.
     */
    public function getDateAttribEncours() {
        return $this->dateAttribEncours;
    }

    /**
     * Set the date attrib encours.
     *
     * @param DateTime|null $dateAttribEncours The date attrib encours.
     */
    public function setDateAttribEncours(DateTime $dateAttribEncours = null) {
        $this->dateAttribEncours = $dateAttribEncours;
        return $this;
    }
}
