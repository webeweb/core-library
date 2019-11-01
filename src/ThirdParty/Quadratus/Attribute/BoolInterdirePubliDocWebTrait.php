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
 * Interdire publi doc web trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolInterdirePubliDocWebTrait {

    /**
     * Interdire publi doc web.
     *
     * @var bool
     */
    private $interdirePubliDocWeb;

    /**
     * Get the interdire publi doc web.
     *
     * @return bool Returns the interdire publi doc web.
     */
    public function getInterdirePubliDocWeb() {
        return $this->interdirePubliDocWeb;
    }

    /**
     * Set the interdire publi doc web.
     *
     * @param bool $interdirePubliDocWeb The interdire publi doc web.
     */
    public function setInterdirePubliDocWeb($interdirePubliDocWeb) {
        $this->interdirePubliDocWeb = $interdirePubliDocWeb;
        return $this;
    }
}
