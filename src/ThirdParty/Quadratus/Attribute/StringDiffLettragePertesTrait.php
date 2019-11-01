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
 * Diff lettrage pertes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringDiffLettragePertesTrait {

    /**
     * Diff lettrage pertes.
     *
     * @var string
     */
    private $diffLettragePertes;

    /**
     * Get the diff lettrage pertes.
     *
     * @return string Returns the diff lettrage pertes.
     */
    public function getDiffLettragePertes() {
        return $this->diffLettragePertes;
    }

    /**
     * Set the diff lettrage pertes.
     *
     * @param string $diffLettragePertes The diff lettrage pertes.
     */
    public function setDiffLettragePertes($diffLettragePertes) {
        $this->diffLettragePertes = $diffLettragePertes;
        return $this;
    }
}
