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
 * Methode indem cp trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait StringMethodeIndemCpTrait {

    /**
     * Methode indem cp.
     *
     * @var string
     */
    private $methodeIndemCp;

    /**
     * Get the methode indem cp.
     *
     * @return string Returns the methode indem cp.
     */
    public function getMethodeIndemCp() {
        return $this->methodeIndemCp;
    }

    /**
     * Set the methode indem cp.
     *
     * @param string $methodeIndemCp The methode indem cp.
     */
    public function setMethodeIndemCp($methodeIndemCp) {
        $this->methodeIndemCp = $methodeIndemCp;
        return $this;
    }
}
