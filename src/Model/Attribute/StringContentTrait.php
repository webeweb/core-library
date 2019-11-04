<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\Core\Model\Attribute;

/**
 * String content trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\Core\Model\Attribute
 */
trait StringContentTrait {

    /**
     * Content.
     *
     * @var string
     */
    protected $content;

    /**
     * Get the content.
     *
     * @return string Returns the content.
     */
    public function getContent() {
        return $this->content;
    }

    /**
     * Set the content.
     *
     * @param string $content The content.
     */
    public function setContent($content) {
        $this->content = $content;
        return $this;
    }
}
