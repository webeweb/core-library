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
 * Ordre edition trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait IntOrdreEditionTrait {

    /**
     * Ordre edition.
     *
     * @var int
     */
    private $ordreEdition;

    /**
     * Get the ordre edition.
     *
     * @return int Returns the ordre edition.
     */
    public function getOrdreEdition() {
        return $this->ordreEdition;
    }

    /**
     * Set the ordre edition.
     *
     * @param int $ordreEdition The ordre edition.
     */
    public function setOrdreEdition($ordreEdition) {
        $this->ordreEdition = $ordreEdition;
        return $this;
    }
}
