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
 * Prorata heures option trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringProrataHeuresOptionTrait {

    /**
     * Prorata heures option.
     *
     * @var string
     */
    private $prorataHeuresOption;

    /**
     * Get the prorata heures option.
     *
     * @return string Returns the prorata heures option.
     */
    public function getProrataHeuresOption() {
        return $this->prorataHeuresOption;
    }

    /**
     * Set the prorata heures option.
     *
     * @param string $prorataHeuresOption The prorata heures option.
     */
    public function setProrataHeuresOption($prorataHeuresOption) {
        $this->prorataHeuresOption = $prorataHeuresOption;
        return $this;
    }
}
