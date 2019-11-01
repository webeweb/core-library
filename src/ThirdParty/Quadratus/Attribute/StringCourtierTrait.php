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
 * Courtier trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringCourtierTrait {

    /**
     * Courtier.
     *
     * @var string
     */
    private $courtier;

    /**
     * Get the courtier.
     *
     * @return string Returns the courtier.
     */
    public function getCourtier() {
        return $this->courtier;
    }

    /**
     * Set the courtier.
     *
     * @param string $courtier The courtier.
     */
    public function setCourtier($courtier) {
        $this->courtier = $courtier;
        return $this;
    }
}
