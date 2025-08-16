<?php

/*
 * This file is part of the core-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\XmlTv\Tests\Serializer;

use WBW\Library\XmlTv\Serializer\SerializerKeys;
use WBW\Library\XmlTv\Tests\AbstractTestCase;

/**
 * Serializer keys test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\XmlTv\Tests\Serializer
 */
class SerializerKeysTest extends AbstractTestCase {

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("actors", SerializerKeys::ACTORS);
        $this->assertEquals("adapters", SerializerKeys::ADAPTERS);
        $this->assertEquals("aspect", SerializerKeys::ASPECT);
        $this->assertEquals("audio", SerializerKeys::AUDIO);
        $this->assertEquals("categories", SerializerKeys::CATEGORIES);
        $this->assertEquals("channel", SerializerKeys::CHANNEL);
        $this->assertEquals("channels", SerializerKeys::CHANNELS);
        $this->assertEquals("clumpIdx", SerializerKeys::CLUMP_IDX);
        $this->assertEquals("colour", SerializerKeys::COLOUR);
        $this->assertEquals("commentators", SerializerKeys::COMMENTATORS);
        $this->assertEquals("composers", SerializerKeys::COMPOSERS);
        $this->assertEquals("content", SerializerKeys::CONTENT);
        $this->assertEquals("countries", SerializerKeys::COUNTRIES);
        $this->assertEquals("credits", SerializerKeys::CREDITS);
        $this->assertEquals("date", SerializerKeys::DATE);
        $this->assertEquals("descs", SerializerKeys::DESCS);
        $this->assertEquals("directors", SerializerKeys::DIRECTORS);
        $this->assertEquals("displayNames", SerializerKeys::DISPLAY_NAMES);
        $this->assertEquals("editors", SerializerKeys::EDITORS);
        $this->assertEquals("episodeNums", SerializerKeys::EPISODE_NUMS);
        $this->assertEquals("generatorInfoName", SerializerKeys::GENERATOR_INFO_NAME);
        $this->assertEquals("generatorInfoUrl", SerializerKeys::GENERATOR_INFO_URL);
        $this->assertEquals("guests", SerializerKeys::GUESTS);
        $this->assertEquals("height", SerializerKeys::HEIGHT);
        $this->assertEquals("icons", SerializerKeys::ICONS);
        $this->assertEquals("id", SerializerKeys::ID);
        $this->assertEquals("keywords", SerializerKeys::KEYWORDS);
        $this->assertEquals("lang", SerializerKeys::LANG);
        $this->assertEquals("language", SerializerKeys::LANGUAGE);
        $this->assertEquals("lastChance", SerializerKeys::LAST_CHANCE);
        $this->assertEquals("length", SerializerKeys::LENGTH);
        $this->assertEquals("new", SerializerKeys::NEW);
        $this->assertEquals("origLanguage", SerializerKeys::ORIG_LANGUAGE);
        $this->assertEquals("pdcStart", SerializerKeys::PDC_START);
        $this->assertEquals("premiere", SerializerKeys::PREMIERE);
        $this->assertEquals("present", SerializerKeys::PRESENT);
        $this->assertEquals("presenters", SerializerKeys::PRESENTERS);
        $this->assertEquals("previouslyShown", SerializerKeys::PREVIOUSLY_SHOWN);
        $this->assertEquals("producers", SerializerKeys::PRODUCERS);
        $this->assertEquals("programmes", SerializerKeys::PROGRAMMES);
        $this->assertEquals("quality", SerializerKeys::QUALITY);
        $this->assertEquals("ratings", SerializerKeys::RATINGS);
        $this->assertEquals("reviewer", SerializerKeys::REVIEWER);
        $this->assertEquals("reviews", SerializerKeys::REVIEWS);
        $this->assertEquals("role", SerializerKeys::ROLE);
        $this->assertEquals("secondaryTitles", SerializerKeys::SECONDARY_TITLES);
        $this->assertEquals("showView", SerializerKeys::SHOW_VIEW);
        $this->assertEquals("source", SerializerKeys::SOURCE);
        $this->assertEquals("sourceDataUrl", SerializerKeys::SOURCE_DATA_URL);
        $this->assertEquals("sourceInfoName", SerializerKeys::SOURCE_INFO_NAME);
        $this->assertEquals("sourceInfoUrl", SerializerKeys::SOURCE_INFO_URL);
        $this->assertEquals("src", SerializerKeys::SRC);
        $this->assertEquals("start", SerializerKeys::START);
        $this->assertEquals("starRatings", SerializerKeys::STAR_RATINGS);
        $this->assertEquals("stereo", SerializerKeys::STEREO);
        $this->assertEquals("stop", SerializerKeys::STOP);
        $this->assertEquals("subtitles", SerializerKeys::SUBTITLES);
        $this->assertEquals("system", SerializerKeys::SYSTEM);
        $this->assertEquals("titles", SerializerKeys::TITLES);
        $this->assertEquals("type", SerializerKeys::TYPE);
        $this->assertEquals("units", SerializerKeys::UNITS);
        $this->assertEquals("urls", SerializerKeys::URLS);
        $this->assertEquals("value", SerializerKeys::VALUE);
        $this->assertEquals("video", SerializerKeys::VIDEO);
        $this->assertEquals("videoPlus", SerializerKeys::VIDEO_PLUS);
        $this->assertEquals("vpsStart", SerializerKeys::VPS_START);
        $this->assertEquals("width", SerializerKeys::WIDTH);
        $this->assertEquals("writers", SerializerKeys::WRITERS);
    }
}
