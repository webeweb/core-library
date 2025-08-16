<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Traits\Objects;

use WBW\Library\XmlTv\Model\Language;
use WBW\Library\XmlTv\Tests\AbstractTestCase;
use WBW\Library\XmlTv\Tests\Fixtures\Traits\Objects\TestLanguageLanguageTrait;

/**
 * Language language trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Traits\Objects
 */
class LanguageLanguageTraitTest extends AbstractTestCase {

    /**
     * Test setLanguage()
     *
     * @return void
     */
    public function testSetLanguage(): void {

        // Set a Language mock.
        $language = new Language();

        $obj = new TestLanguageLanguageTrait();

        $obj->setLanguage($language);
        $this->assertSame($language, $obj->getLanguage());
    }
}
