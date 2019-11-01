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
 * Radical compte cli trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringRadicalCompteCliTrait {

    /**
     * Radical compte cli.
     *
     * @var string
     */
    private $radicalCompteCli;

    /**
     * Get the radical compte cli.
     *
     * @return string Returns the radical compte cli.
     */
    public function getRadicalCompteCli() {
        return $this->radicalCompteCli;
    }

    /**
     * Set the radical compte cli.
     *
     * @param string $radicalCompteCli The radical compte cli.
     */
    public function setRadicalCompteCli($radicalCompteCli) {
        $this->radicalCompteCli = $radicalCompteCli;
        return $this;
    }
}
