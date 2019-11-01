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
 * Heure compl trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeHeureComplTrait {

    /**
     * Heure compl.
     *
     * @var DateTime|null
     */
    private $heureCompl;

    /**
     * Get the heure compl.
     *
     * @return DateTime|null Returns the heure compl.
     */
    public function getHeureCompl() {
        return $this->heureCompl;
    }

    /**
     * Set the heure compl.
     *
     * @param DateTime|null $heureCompl The heure compl.
     */
    public function setHeureCompl(DateTime $heureCompl = null) {
        $this->heureCompl = $heureCompl;
        return $this;
    }
}
