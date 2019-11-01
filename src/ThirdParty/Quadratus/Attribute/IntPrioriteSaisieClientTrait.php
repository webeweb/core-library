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
 * Priorite saisie client trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntPrioriteSaisieClientTrait {

    /**
     * Priorite saisie client.
     *
     * @var int
     */
    private $prioriteSaisieClient;

    /**
     * Get the priorite saisie client.
     *
     * @return int Returns the priorite saisie client.
     */
    public function getPrioriteSaisieClient() {
        return $this->prioriteSaisieClient;
    }

    /**
     * Set the priorite saisie client.
     *
     * @param int $prioriteSaisieClient The priorite saisie client.
     */
    public function setPrioriteSaisieClient($prioriteSaisieClient) {
        $this->prioriteSaisieClient = $prioriteSaisieClient;
        return $this;
    }
}
