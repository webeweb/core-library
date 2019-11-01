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
 * Immo type liasse trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringImmoTypeLiasseTrait {

    /**
     * Immo type liasse.
     *
     * @var string
     */
    private $immoTypeLiasse;

    /**
     * Get the immo type liasse.
     *
     * @return string Returns the immo type liasse.
     */
    public function getImmoTypeLiasse() {
        return $this->immoTypeLiasse;
    }

    /**
     * Set the immo type liasse.
     *
     * @param string $immoTypeLiasse The immo type liasse.
     */
    public function setImmoTypeLiasse($immoTypeLiasse) {
        $this->immoTypeLiasse = $immoTypeLiasse;
        return $this;
    }
}
