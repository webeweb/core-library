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
 * Debut exo trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait DateTimeDebutExoTrait {

    /**
     * Debut exo.
     *
     * @var DateTime|null
     */
    private $debutExo;

    /**
     * Get the debut exo.
     *
     * @return DateTime|null Returns the debut exo.
     */
    public function getDebutExo() {
        return $this->debutExo;
    }

    /**
     * Set the debut exo.
     *
     * @param DateTime|null $debutExo The debut exo.
     */
    public function setDebutExo(DateTime $debutExo = null) {
        $this->debutExo = $debutExo;
        return $this;
    }
}
