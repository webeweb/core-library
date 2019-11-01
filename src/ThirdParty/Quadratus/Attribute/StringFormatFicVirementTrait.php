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
 * Format fic virement trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringFormatFicVirementTrait {

    /**
     * Format fic virement.
     *
     * @var string
     */
    private $formatFicVirement;

    /**
     * Get the format fic virement.
     *
     * @return string Returns the format fic virement.
     */
    public function getFormatFicVirement() {
        return $this->formatFicVirement;
    }

    /**
     * Set the format fic virement.
     *
     * @param string $formatFicVirement The format fic virement.
     */
    public function setFormatFicVirement($formatFicVirement) {
        $this->formatFicVirement = $formatFicVirement;
        return $this;
    }
}
