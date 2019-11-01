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
 * Debut semaine trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutSemaineTrait {

    /**
     * Debut semaine.
     *
     * @var DateTime|null
     */
    private $debutSemaine;

    /**
     * Get the debut semaine.
     *
     * @return DateTime|null Returns the debut semaine.
     */
    public function getDebutSemaine() {
        return $this->debutSemaine;
    }

    /**
     * Set the debut semaine.
     *
     * @param DateTime|null $debutSemaine The debut semaine.
     */
    public function setDebutSemaine(DateTime $debutSemaine = null) {
        $this->debutSemaine = $debutSemaine;
        return $this;
    }
}
