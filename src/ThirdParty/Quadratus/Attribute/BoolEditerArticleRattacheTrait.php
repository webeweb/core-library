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
 * Editer article rattache trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\ThirdParty\Quadratus\Attribute
 */
trait BoolEditerArticleRattacheTrait {

    /**
     * Editer article rattache.
     *
     * @var bool
     */
    private $editerArticleRattache;

    /**
     * Get the editer article rattache.
     *
     * @return bool Returns the editer article rattache.
     */
    public function getEditerArticleRattache() {
        return $this->editerArticleRattache;
    }

    /**
     * Set the editer article rattache.
     *
     * @param bool $editerArticleRattache The editer article rattache.
     */
    public function setEditerArticleRattache($editerArticleRattache) {
        $this->editerArticleRattache = $editerArticleRattache;
        return $this;
    }
}
