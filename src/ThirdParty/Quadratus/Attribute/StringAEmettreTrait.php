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
 * A emettre trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringAEmettreTrait {

    /**
     * A emettre.
     *
     * @var string
     */
    private $aEmettre;

    /**
     * Get the a emettre.
     *
     * @return string Returns the a emettre.
     */
    public function getAEmettre() {
        return $this->aEmettre;
    }

    /**
     * Set the a emettre.
     *
     * @param string $aEmettre The a emettre.
     */
    public function setAEmettre($aEmettre) {
        $this->aEmettre = $aEmettre;
        return $this;
    }
}
